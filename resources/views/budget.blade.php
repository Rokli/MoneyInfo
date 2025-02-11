@extends("base")

@vite('resources/css/budget.css')

@section('content')
    <section class="home-settings">
        <h3>Бюджет</h3>
        <div class="home-content" style="width:40%;">
            <h2>Общий баланс: <strong>52000</strong></h2>
            <p>Доходы: 5000₽ </p>
            <p>Расходы: 3000₽</p>
        </div>
        <h3>Категории</h3>
        <div class="home-content" style="width:40%;">
            <ul class="budget-ul">
                <li>Квартира: 5к</li>
                <li>Подписки: 7к</li>
                <li>Игры: 8к</li>
            </ul>
        </div>
        <div class="home-content" style="width:40%;">
            <form method="GET" action="/budget" class="budget-form">
                @csrf
                <div class="budget-form-content">
                <input type="text" name="name" placeholder="Название категории">
                <select name="type">
                    <option value="income">Доход</option>
                    <option value="expense">Расход</option>
                </select>
                </div>
                <button type="submit">Добавить</button>
            </form>
        </div>
    </section>
@endsection

@vite('resources/js/home.js')