@extends('base')        

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