@extends("base")

@vite("resources/css/saving.css")

@section('content')
    <section class="savings-container">
        <div class="savings-goals">
            <h3>🎯 Цели</h3>
            <ul class="goals-list">
                <li>
                    <span class="goal-name">Авто</span> — <span class="goal-amount">250 000₽</span>
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 20%;">20%</div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="savings-form">
            <h3>➕ Добавить цель</h3>
            <input type="text" name="goal_name" placeholder="Название цели">
            <input type="number" name="goal_amount" placeholder="Сумма (₽)">
            <button type="submit">Добавить</button>
        </div>
    </section>

@endsection