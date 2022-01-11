@extends('news.layouts.app')

@section('title')
    @parent Категории новостей
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
            <hr>
            <h3>Список всех категорий</h3>
            <div class="row vr-gallery">


                    <ul class="nav-fill mx-auto mb-5 right-list">
                        @forelse ($category as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="/categories/{{ $item['id'] }}"><p>{{ $item['category'] }}</p></a>
                        </li>
                        @empty
                            <p>Нет категорий</p>
                        @endforelse
                    </ul>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/assets/js/main.js"></script>
@endpush

