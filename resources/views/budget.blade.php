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
            <ul class="budget-ul" id="budget-ul">
            </ul>
        </div>
        <div class="home-content" style="width:40%;">
            <form method="POST" action="/api/budget" class="budget-form">
                @csrf
                <div class="budget-form-content">
                <input type="text" name="category_name" placeholder="Название категории">
                <select name="category_type">
                    <option value="income">Доход</option>
                    <option value="expense">Расход</option>
                </select>
                </div>
                <button type="submit">Добавить</button>
            </form>
        </div>
    </section>
@endsection

@vite('resources/js/budget.js')