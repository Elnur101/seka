@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">DataTables.Net</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="#">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tables</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Datatables</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-body">
                    @if($categories->isEmpty())
                        <p class="text-danger">Нет доступных категории или услуг</p>
                    @else
                        <div class="table-responsive">
                            <table
                                id="basic-datatables"
                                class="display table table-striped table-hover"
                            >
                                <thead>
                                <tr>
                                    <th>Изображение</th>
                                    <th>Категория</th>
                                    <th>Услуги</th>
                                    <th>Действие</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td><img src="" alt=""></td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->services->pluck('name')->implode(', ') ? : 'Нет услуг'}}</td>
                                        <td>
                                            <a href="" class="btn btn-primary"></a>
                                            <a href="" class="btn btn-success"></a>
                                            <a href="" class="btn btn-danger"></a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    @endif

                </div>
            </div>
        </div>


    </div>
@endsection

