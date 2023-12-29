@extends('frontend.themes.gold.layout.layout')
@section('title', 'Zlatne poluge')
@section('description', 'Zlatne poluge')
@section('keywords', '')
@section('content')
    <div class="page-content bg-white">
        <!-- Golden Plates -->
        <section class="content-inner-1 overlay-white-middle about-products2">
            <img src="/themes/gold/assets/images/bg-triangle3.png" class="bg-img" alt="">
            <img src="/themes/gold/assets/images/bg-triangle4.png" class="bg-img2" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-head style-2 wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                            <h2 class="sub-title">Zlatne poluge</h2>
                            <p>Zlatne poluge su čest izbor ulagača zainteresovanih za investiciono zlato. One dolaze iz
                                pouzdanih livnica svetskog renomea, upakovane su u blister pakovanja u kojima se nalaze LBMA
                                sertifikati koji garantuju kvalitet proizvodnje i druge bitne parametre. Zlatne poluge
                                težinskih denominacija od 1unce do 1kg renomiranih svetskih brendova. Zbog svoje fine izrade
                                i najviše čistoće zlata („Fine Gold“) predstavljaju visoko likvidne investicione formate.
                            </p>
                        </div>
                        <div class="product-specification wow fadeInUp" data-wow-delay="0.3s"
                            style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                            <h4 class="specification-title">Specifikacije</h4>
                        </div>
                        <!-- Category Prices -->
                        @foreach ($goldenBars as $bar)
                            <div class="category-prices mb-3">
                                <h5>Težina poluge <span>od {{ $bar['description'] }}:</span></h5>
                                <table class="table wow fadeInUp product-prices-table" data-wow-delay="0.4s"
                                    style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                    <thead>
                                        <td class="text-start fw-bold">Naziv</td>
                                        <td class="text-end fw-bold">Prodajna cena</td>
                                        <td class="text-end fw-bold">Otkupna cena</td>
                                    </thead>
                                    <tbody>
                                        @foreach ($bar['products'] as $product)
                                            <tr>
                                                <td class="text-start"><a target="_blank" href="{{ $product['url'] }}">
                                                        {{ $product['name'] }}</a>
                                                </td>
                                                <td class="text-end">@priceFormat($product['selling_price'])
                                                    {{ $currency }}</td>
                                                <td class="text-end">@priceFormat($product['purchase_price'])
                                                    {{ $currency }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center mt-3">
                                    <a href="{{ route('frontend.category', $bar['slug']) }}">Sve zlatne poluge u ponudi</a>
                                </div>
                            </div>
                        @endforeach
                        <!-- #Category Prices -->
                    </div>
                </div>
            </div>
        </section>
        <!-- #Golden Plates -->
    </div>
@endsection