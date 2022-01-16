@extends('admin.layouts.app')

@section('title')
    @parent Панель администратора
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Статистика</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <span data-feather="calendar"></span>
                Эта неделя
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Месяц</a></li>
                <li><a class="dropdown-item" href="#">Эта неделя</a></li>
                <li><a class="dropdown-item" href="#">Сегодня</a></li>
            </ul>
        </div>
    </div>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    <h2>Таблица</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Раздел 1</th>
                <th>Раздел 2</th>
                <th>Раздел 3</th>
                <th>Раздел 4</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection


