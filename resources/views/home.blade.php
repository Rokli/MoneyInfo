@extends('base')        

<dialog id="modal">
    <div class="modal-header">
        <h2>Добавление дохода</h2>
    </div>
    <div class="modal-body">
        <div class="dropdown">
            <button class="dropdown-button" onclick="toggleDropdown()" id="dropdown-button">Меню</button>
            <div class="dropdown-content" id="dropdownMenu">
                <a href="#">Опция 1</a>
                <a href="#">Опция 2</a>
                <a href="#">Опция 3</a>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn cancel">Закрыть</button>
        <button class="btn confirm">Подтвердить</button>
    </div>
</dialog>

@section('content')
    <section class="home-settings">
        <div class="home-content">
        </div>

        <div class="home-content">
            <p>Графики</p>
            <canvas id="balanceChart" class="home-chart"></canvas>
        </div>

        <div class="home-content">
            <h3>Действия</h3>
            <div>
                <button class="home-button" id="incomeBtn">Добавить доход</button>
                <button class="home-button" id="expenceBtn">Добавить расход</button>
            </div>
        </div>

        <div class="home-content">
            <p>История операций</p>
            <ul class="home-transaction-list" id="home-trancastion"> 
            </ul>
        </div>
    </section>
@endsection