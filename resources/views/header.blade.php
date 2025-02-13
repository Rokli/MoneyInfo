<header>
    <div class="header-div">
        <h1>Money Info</h1>
        <nav class="header-settings">
            <ul>
                <li><a href="/home">Главная</a></li>
                <li><a href="/budget">Бюджет</a></li>
                <li><a href="/saving">Сбережения</a></li>
                <!-- <li><a href="/finance">Финансы</a></li> -->
                <li><a href="/profile">Профиль</a></li>
                @if(Auth::user() === null)
                <li><a href="/entry">Вход</a></li>
                @endif
                <li><button id="theme-toggle">🌙 Смена темы</button></li>
            </ul>
        </nav>
    </div>
</header>
