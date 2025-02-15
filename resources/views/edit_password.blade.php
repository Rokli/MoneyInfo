@extends('base')

@vite("resources/css/entry.css")

@section('content')
    <div class="entry-content">
        <form id="entry-form" action="{{ route('postPasswordEdit') }}" method="POST">
            @csrf
            <h3>Текущий пароль</h3>
            <input type="password" name="current_password">
            <h3>Новый пароль</h3>
            <input type="password" name="new_password">
            <button type="submit">Обновить пароль</button>
        </form>
    </div>
@endsection