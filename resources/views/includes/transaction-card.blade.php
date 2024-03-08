<div class="card-info mb-10 sm:max-w-5xl bg-white relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="sm:grid sm:grid-cols-5 gap-0 sm:inline-grid dark:bg-gray-800">
        <div class="sm:col-span-2 rounded-lg dark:border-gray-700 mb-4 sm:mb-0">
            <img id="btc-logo" class="w-full h-auto sm:max-h-full" src="{{ asset('images/BTCpic.png') }}"
                 alt="BTC Logo">
        </div>
        <div class="sm:col-span-3 rounded-lg dark:bg-gray-800 pt-0">
            <div class="pt-0 sm:px-0 sm:pt-0 bg-white rounded-lg text-center dark:bg-gray-800" id="about" role="tabpanel"
                 aria-labelledby="about-tab">
                <dl>
                    <div class="bg-gray-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-lg font-medium text-gray-800">
                            Full name
                        </dt>
                        <dd class="mt-1 text-lg text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$transaction->full_name}}
                        </dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-lg font-medium text-gray-800">
                            Account
                        </dt>
                        <dd class="mt-1 text-lg text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$transaction->account}}
                        </dd>
                    </div>
                    <div class="bg-gray-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-lg font-medium text-gray-800">
                            Wallet
                        </dt>
                        <dd class="mt-1 text-lg text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$transaction->wallet}}
                        </dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-lg font-medium text-gray-800">
                            BTC amount
                        </dt>
                        <dd class="mt-1 text-lg text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$transaction->btc_amount}}
                        </dd>
                    </div>
                    <div class="bg-gray-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-lg font-medium text-gray-800">
                            Liabilities
                        </dt>
                        <dd class="mt-1 text-lg text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$transaction->liabilities}}
                        </dd>
                    </div>
                    <div class="bg-gray-100 md:flex md:justify-between px-4 pt-5 pb-3 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                        <dt class="text-lg font-medium text-gray-800">
                            Date: {{ $transaction->created_at->format('Y-m-d') }}
                        </dt>
                        <dt class="text-lg font-medium text-gray-800">
                            Status: <span style="color: {{ $transaction->color }}">{{$transaction->status}}</span>
                        </dt>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>

