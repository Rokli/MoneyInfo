@extends("base")

@vite('resources/css/profile.css')

@section('content')
    <section class="profile-container">
        <div class="profile-header">
            <img src="https://via.placeholder.com/100" alt="Аватар" class="profile-avatar">
            <h2>Иван Иванов</h2>
            <p class="profile-status">🌟 Активный пользователь</p>
        </div>

        <div class="profile-info">
            <h3>📌 Личная информация</h3>
            <p><strong>Email:</strong> ivan@example.com</p>
            <p><strong>Дата регистрации:</strong> 01.01.2024</p>
        </div>

        <div class="profile-actions">
            <h3>⚙️ Настройки</h3>
            <button id="editProfileBtn">✏️ Редактировать профиль</button>
            <button id="changePasswordBtn">🔒 Изменить пароль</button>
            <button id="logoutBtn">🚪 Выйти</button>
        </div>
    </section>
@endsection