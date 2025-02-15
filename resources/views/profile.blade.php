@extends("base")

@vite('resources/css/profile.css')

@section('content')
    <section class="profile-container">
        <div class="profile-header">
            <img src="https://via.placeholder.com/100" alt="Аватар" class="profile-avatar">
            <h2>{{ Auth::user()->login }}</h2>
            <p class="profile-status">🌟 Активный пользователь</p>
        </div>

        <div class="profile-info">
            <h3>Личная информация</h3>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Дата регистрации:</strong> {{ Auth::user()->created_at}}</p>
        </div>

        <div class="profile-actions">
            <h3>⚙️ Настройки</h3>
            <a href="{{ route("getProfileEdit") }}" class="profile-a"><button id="editProfileBtn">✏️ Редактировать профиль</button></a>
            <a href="{{ route("getPasswordEdit") }}" class="profile-a"><button id="changePasswordBtn">🔒 Изменить пароль </button></a>
            <form action="{{ route('logout') }}" method="POST" class="profile-form">
                @csrf
                <button id="logoutBtn" type="submit">🚪 Выйти</button>
            </form>
        </div>
    </section>
@endsection