@extends('news.layouts.app')

@section('title')
    @parent Все новости
@endsection

@section('topic')
    @parent
    <div class="row ml-0 mr-0">
        @forelse ($category as $item)
            <div class="col-md-3 pr-0 first">
                <a href="/categories/{{ $item['id'] }}">
                    <div class="card">
                        <img width="440" height="293" class="card-img" src="/assets/images/categories/{{ $item['id'] }}.jpg" alt="">
                        <div class="card-img-overlay">
                            <h5>{{ $item['category'] }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <p>Нет категорий</p>
        @endforelse
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
    <script src="{{asset('/assets/js/main.js')}}"></script>
@endpush

