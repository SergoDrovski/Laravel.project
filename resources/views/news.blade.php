@extends('layouts.app')

@section('title')
    @parent Все новости
@endsection

@section('topic')
    @parent
    <div class="row ml-0 mr-0">
        <div class="col-md-3 pr-0 first">
            <div class="card">
                <img class="card-img" src="assets/images/architecture.png" alt="">
                <div class="card-img-overlay">
                    <h5>Архитектура</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 pl-0 pr-0">
            <div class="card">
                <img class="card-img" src="assets/images/interior.png" alt="">
                <div class="card-img-overlay">
                    <h5>Интерьер</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 pl-0 pr-0">
            <div class="card">
                <img class="card-img" src="assets/images/food.png" alt="">
                <div class="card-img-overlay">
                    <h5>Еда</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 pl-0 last">
            <div class="card">
                <img class="card-img" src="assets/images/travel.png" alt="">
                <div class="card-img-overlay">
                    <h5>Путешествия</h5>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row vr-gallery">
            @forelse ($news as $item)
                <hr>
                <a href="/news/{{ $item['id'] }}">
                    <div class="col-md-8 mb-4">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 pr-0 pd-md">
                                <img src="assets/images/" alt="img">
                            </div>
                            <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                                <p><small>{{ $item['date'] }}</small></p>
                                <h3>{{ $item['title'] }}</h3>
                                <p>
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <p>Нет новостей</p>
            @endforelse
            @isset($news)
               <a href="#" class="btn">Загрузить ещё</a>
            @endisset
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/assets/js/main.js"></script>
@endpush

