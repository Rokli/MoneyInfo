import Chart from 'chart.js/auto';

const ctx = document.getElementById('balanceChart').getContext('2d');

const balanceChart = new Chart(ctx,{
    type: "doughnut",
    data: {
        labels: ["Сбережения", "Расходы", "Остаток"],
        datasets: [{
            data: [5000,20000, 10000],
            backgroundColor: ['#4CAF50', '#FF5733', '#3498DB']
        }]
    },
    options: {responsive: true}
})

async function loadOperation(){
    const response = fetch('/api/home/operation',{
        method: "GET",
        headers: {
            "Accept": "application/json"
        }
    });
    
    if(!response.ok){
        console.log("Ошибка загрузки операций");
    }

    let operations =  await response.json;
    let operationHtml = '';
    operations.forEach(operation => {
        operationHtml += `
            <li>${operation.name}: ${operation.balance}</li>
        `
    });

    const operationContainer = document.getElementById('home-trancastion');
    operationContainer.innerHTML = operationHtml;
}

async function loadBalance(){
    const response = fetch('/api/home/balance',{
        method: "GET",
        header:{
            "Accept" : "application/json"
        }
    });
    if(!response.ok){
        console.log('Ошибка загрузки баланса');
    }
    let balance = await response.json;
    let balanceHtml = `
        <h3>Ваш баланс</h3>
        <p class="home-balance-amount">${balance.summ}</p> 
    `;
    const balanceContainer = document.getElementById('home-balance');
    balanceContainer.innerHTML = balanceHtml;
}

async function addIncome(){
    //TODO:Сначала модальное окно
}

async function addExpence(){
    //TODO:Сначала модальное окно
}

loadBalance();

loadOperation();
