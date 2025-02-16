@extends("base")

@vite("resources/css/saving.css")

@section('content')
    <section class="savings-container">
        <div class="savings-goals">
            <h3>🎯 Цели</h3>
            <ul class="goals-list" id="goals-list">
            </ul>
        </div>

        <div class="savings-form">
            <h3>➕ Добавить цель</h3>
            <input type="text" name="goal_name" id="name" placeholder="Название цели">
            <input type="number" name="goal_amount" id="amount" placeholder="Сумма (₽)">
            <button type="submit" id="saving-add-goal-btn">Добавить</button>
        </div>
    </section>
@endsection

@vite("resources/js/saving.js")