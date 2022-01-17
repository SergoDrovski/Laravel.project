@extends('admin.layouts.app')

@section('title')
    @parent Панель администратора
@endsection

@section('content')
    <x-admin.head-content
        header="Все категории" message="Добавить категорию" href="{{ route('admin.categories.create')  }}">
    </x-admin.head-content>

    <div class="table-responsive">

    </div>
@endsection


