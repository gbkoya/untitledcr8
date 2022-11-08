@extends('layouts.app')

@section('description', 'Add a new product')
@section('title', 'Foremost - Add product')
@section('article:section', 'Admin')
@section('url', 'www.foremosteyeclinic.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <div class="container">

        <section class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel heading</h3>
            </div>
            <div class="panel-body">

                <form action="designer-finish.html" class="form-horizontal" role="form">

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Тип заказа</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Внешный
                                заказ
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                Внутренный заказ
                            </label>
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Буюртмачи</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Исм ёки корхона номи">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Название продукта</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Название">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="about" class="col-sm-3 control-label">Описание</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="qty" class="col-sm-3 control-label">Количество</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="qty" id="qty" placeholder="шт.">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Сроки</label>
                        <div class="col-sm-3">
                            <label class="control-label small" for="date_start">Начало: </label>
                            <input type="text" class="form-control" name="date_start" id="date_start"
                                placeholder="Начало">
                        </div>
                        <div class="col-sm-3">
                            <label class="control-label small" for="date_finish">Конец:</label>
                            <input type="text" class="form-control" name="date_finish" id="date_finish"
                                placeholder="Конец">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Загрузить</label>
                        <div class="col-sm-3">
                            <label class="control-label small" for="file_img">Картинка (jpg/png):</label> <input
                                type="file" name="file_img">
                        </div>
                        <div class="col-sm-3">
                            <label class="control-label small" for="file_img">Файлы:</label> <input type="file"
                                name="file_archive">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="tech" class="col-sm-3 control-label">Технолог</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option value="">Выберите</option>
                                <option value="texnolog2">Технолог 2</option>
                                <option value="texnolog3">Технолог 3</option>
                            </select>
                        </div>
                    </div> <!-- form-group // -->
                    <hr>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </div>
                    </div> <!-- form-group // -->
                </form>

            </div><!-- panel-body // -->
        </section><!-- panel// -->


    </div> <!-- container// -->
    <script></script>

@endsection
