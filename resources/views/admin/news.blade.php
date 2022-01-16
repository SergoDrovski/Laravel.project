@extends('admin.layouts.app')

@section('title')
    @parent Панель администратора
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Все Новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <x-admin.add-button> Добавить новость </x-admin.add-button>
        </div>
    </div>

    <div class="table-responsive">

    </div>
@endsection


