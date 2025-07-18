@extends('layout.main')

@section('title')
    @parent | Добавить новость
@endsection

@section('menu')
    @include('layout.menubar')
@endsection

@section('content')
    <form class="text-start container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Заголовок</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Текст заголовка">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Текст новости</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
