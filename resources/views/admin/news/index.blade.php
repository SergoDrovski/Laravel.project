@extends('admin.layouts.app')

@section('title')
    @parent Панель администратора
@endsection

@section('content')
    <x-admin.head-content
        header="Все новости" message="Добавить новость" href="{{ route('admin.news.create')  }}">
    </x-admin.head-content>

    <div class="table-responsive">

    </div>
@endsection


