@extends('base')

@vite("resources/css/entry.css")

@section('content')
    <div class="entry-content">
        <form id="entry-form" action="{{ route('postProfileEdit') }}" method="POST">
            @csrf
            <h3>Логин</h3>
            <input type="text" name="login">
            <h3>Email</h3>
            <input type="text" name="email">
            <button type="submit">Изменить</button>
        </form>
    </div>
@endsection