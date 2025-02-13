@extends("base")

@vite('resources/css/entry.css')

@section('content')
    <div class="entry-content">
        <form id="entry-form" action="/entry" method="POST">
            <h3>Логин</h3>
            <input type="text" name="login" required>
            <h3>Пароль</h3>
            <input type="password" name="password" required> 
            <button type="submit">Войти</button>
        </form> 
        <p>Нет аккаунта? <a href="/registration" class="entry-register-link">Зарегистрироваться</a></p>
    </div>
@endsection