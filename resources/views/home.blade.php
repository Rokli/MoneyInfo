@extends('base')

@section('content')
    <section class="home-settings">

        <div class="home-content">
            <h3>Ваш баланс</h3>
            <p class="home-balance-amount">35.000</p> 
            <p>Цель накоплений: 5000(70%)</p>
            <div class="home-progress-bar">
                <div class="progress" style="width: 70%;"></div>
            </div>
        </div>

        <div class="home-content">
            <p>Графики</p>
            <canvas id="balanceChart" class="home-chart"></canvas>
        </div>

        <div class="home-content">
            <h3>Действия</h3>
            <div>
                <button class="home-button">Добавить доход</button>
                <button class="home-button">Добавить расход</button>
            </div>
        </div>

        <div class="home-content">
            <p>История операций</p>
            <ul class="home-transaction-list"> 
                <li>Мороженное: 54</li>
                <li>Квартира: 5000</li>
                <li>Машина: 700000</li>
            </ul>
        </div>

    </section>
@endsection