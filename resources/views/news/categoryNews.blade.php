@extends('news.layouts.app')

@section('title')
    @parent Новость
@endsection

@section('breadCrumbs')
    @parent
    <ul class="nav nav-fill mx-auto breadc pb-3">
        <li class="nav-item">
            <a class="nav-link active" href="/news">Главная</a>
        </li>
        <li><img src="/assets/images/star-shape.png" class="mt-2" alt=""></li>
        <li class="nav-item">
            <a class="nav-link" href="#">{{ $category[0]['category'] }}</a>
        </li>
    </ul>
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
                                    <img src="/assets/images/" alt="img">
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
    <script src="/assets/js/article.js"></script>
@endpush
