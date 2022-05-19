@extends('layouts.main')

@section('content')
    <div class="container-lg" style="margin: 0 auto;">
        <div class="row mt-5">

            @foreach ($res as $currency)
                <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $currency['logo_url'] }}" style="width:75px; margin:10px auto;">
                        <div class="card-body">
                            <div class="card-title">{{ $currency['currency'] }}</div>
                            <div class="card-text" style="margin: 5px">rank: #{{ $currency['rank'] }}</div>
                            <div class="card-text" style="margin: 5px">circulating_supply:
                                {{ $currency['circulating_supply'] }}</div>
                            <div class="card-text" style="margin: 5px">price: ${{ $currency['price'] }}</div>
                            <div class="card-text" style="margin: 5px">market_cap: {{ $currency['market_cap'] }}</div>
                            <div class="card-text" style="margin: 5px">name: {{ $currency['name'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
