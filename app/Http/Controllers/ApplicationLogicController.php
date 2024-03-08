<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScamReportingRequest;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\SubscriptionRequest;
use App\Mail\ScamReportingMail;
use App\Mail\SubscriptionMail;
use App\Models\IndividualsAuthorized;
use App\Models\ScamReportings;
use App\Models\Subscriber;
use App\Models\Transaction;
use Illuminate\Support\Facades\Mail;

class ApplicationLogicController extends Controller
{
    public function subscribe(SubscriptionRequest $request)
    {
        $input = $request->validated();
        $subscription = Subscriber::create($input);

        Mail::to('example@gmail.com')->send(new SubscriptionMail($subscription));
        return response()->json(['message'=>'Success','status'=>200]);
    }

    public function transactions()
    {
        return view('transactions');
    }

    public function getTransactionData($wallet)
    {
        $transaction = Transaction::where('wallet', $wallet)->first();

        /** Mask Name */
        $name = $transaction->first_name.' '.$transaction->last_name;
        $maskedName = implode(' ', array_map(function ($word) {
            return strtoupper(mb_substr($word, 0, 1)).str_repeat('*', mb_strlen($word) - 1);
        }, explode(' ', $name)));

        if($transaction){
            $transaction->account = $this->maskString($transaction->account);
            $transaction->color = $this->formatStatus($transaction->status);
            $transaction->full_name = $maskedName;
            $view = view('includes.transaction-card', compact('transaction'));
            return response()->json(['html' => $view->render()], 200);
        }
        return response()->json(['message'=>'Not Found'], 404);
    }

    public function getIndividualsAuthorized($name)
    {
        $individuals = IndividualsAuthorized::where('full_name', 'like', '%' . $name . '%')
            ->orWhere('reference_number', 'like', '%'.$name.'%')->get();

        if($individuals->count()){
            $view = view('includes.individual-card', compact('individuals'));
            return response()->json(['html' => $view->render()], 200);
        }
        return response()->json(['message'=>'Not Found'], 404);
    }

    public function storeTransaction(StoreTransactionRequest $request){
        $input = $request->validated();
        $input = array_merge($input, [
            'status' => 'Initiated',
            'liabilities' => '$0.00'
        ]);
        $transaction = Transaction::create($input);
        return response()->json(['message' => 'Success', 'status' => 200]);
    }

    public function reportScam(ScamReportingRequest $request)
    {
        $input = $request->validated();
        $report = ScamReportings::create($input);
        Mail::to('example@gmail.com')->send(new ScamReportingMail($report));
        return response()->json(['message' => 'Success', 'status'=>200]);
    }

    private function maskString($inputString) {
        $length = strlen($inputString);

        if ($length > 4) {
            $maskedLength = $length - 4;
            $maskedString = str_repeat('*', $maskedLength) . substr($inputString, -4);
            return $maskedString;
        } else {
            return $inputString;
        }
    }

    private function formatStatus($status){
        switch ($status) {
            case 'Pending':
                return '#facc15';
            case 'Failed':
                return '#dc2626';
            case 'Deposited':
                return '#22c55e';
            case 'Initiated':
                return '#0284c7';
            default:
                return 'black'; // You can set a default color if needed
        }
    }
}
