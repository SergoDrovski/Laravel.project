@extends('admin.layouts.app')

@section('title')
    @parent Панель администратора
@endsection

@section('content')
    <x-admin.head-content
        header="Добавить новость" message="" href="{{ route('admin.news.create')  }}">
    </x-admin.head-content>

    <div class="bd-example">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Наименование категории</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Автор</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Статус</label>
                <select id="inputState" class="form-select">
                    <option selected>DRAFT</option>
                    <option>ACTIVE</option>
                    <option>BLOCKED</option>
                </select>
            </div>
            <div class="col-12">
                <label for="inputDescription" class="form-label">Описание новости</label>
                <textarea class="form-control" id="inputDescription" name="description"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection


