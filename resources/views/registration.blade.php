@extends("base")

@vite("resources/css/entry.css")

@section("content")
    <div class="entry-content">
        <form id="entry-form" action="{{ route('registration') }}" method="POST">
            @csrf    
            <h3>Логин</h3>
            <input type="text" name="login" required>
            <h3>Email</h3>
            <input type="text" name="email" required>
            <h3>Пароль</h3>
            <input type="password" name="password" required> 
            <button type="submit">Войти</button>
            @if($errors->any())
                <p>Неправильно введены данные</p>
            @endif
        </form> 
    </div>
@endsection
