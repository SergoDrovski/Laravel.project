@extends('admin.layouts.app')

@section('title')
    @parent Панель администратора
@endsection

@section('content')
    <x-admin.head-content
        header="Добавление категории" message="">
    </x-admin.head-content>

    <div class="bd-example">
        <form class="row g-3" method="post">
            <div class="col-md-6">
                <label for="inputTitle" class="form-label">Название категории</label>
                <input type="text" class="form-control" id="inputTitle" name="title">
            </div>
            <div class="col-12">
                <label for="inputDescription" class="form-label">Описание категории</label>
                <textarea class="form-control" id="inputDescription" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Изображение категории</label>
                <input class="form-control" type="file" id="formFile" name="imgCategory">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection


