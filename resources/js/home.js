import Chart from 'chart.js/auto';

const ctx = document.getElementById('balanceChart').getContext('2d');
const modal = document.getElementById('modal');

const balanceChart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["Сбережения", "Расходы", "Остаток"],
        datasets: [{
            data: [5000, 20000, 10000],
            backgroundColor: ['#4CAF50', '#FF5733', '#3498DB']
        }]
    },
    options: { responsive: true }
});

async function loadOperation() {
    const response = await fetch('/api/home/operation', {
        method: "GET",
        headers: {
            "Accept": "application/json"
        }
    });

    if (!response.ok) {
        console.log("Ошибка загрузки операций");
        return;
    }

    let operations = await response.json();
    let operationHtml = '';
    operations.forEach(operation => {
        operationHtml += `
            <li>${operation.name}: ${operation.balance}</li>
        `;
    });

    const operationContainer = document.getElementById('home-trancastion');
    operationContainer.innerHTML = operationHtml;
}

async function loadBalance() {
    const response = await fetch('/api/home/balance', {
        method: "GET",
        headers: {
            "Accept": "application/json"
        }
    });

    if (!response.ok) {
        console.log('Ошибка загрузки баланса');
        return;
    }

    let balance = await response.json();
    let balanceHtml = `
        <h3>Ваш баланс</h3>
        <p class="home-balance-amount">${balance.summ}</p> 
    `;
    const balanceContainer = document.getElementById('home-balance');
    balanceContainer.innerHTML = balanceHtml;
}

function openModal() {
    if (modal) {
        modal.showModal(); 
        console.log('Модальное окно открыто');
    } else {
        console.error('Не найдено модальное окно');
    }
}

function closeModal() {
    modal.close();
}

document.getElementById('incomeBtn').addEventListener('click', openModal);
document.getElementById('expenceBtn').addEventListener('click', openModal);
documenbt.getElementById('dropdown-button').addEventListener('click',toggleDropdown);

document.querySelector('.btn.cancel').addEventListener('click', closeModal);


document.addEventListener('DOMContentLoaded', function () {
    loadBalance();
    loadOperation();
});

function toggleDropdown() {
    document.getElementById("dropdownMenu").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropdown-button')) {
        let dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].classList.remove('show');
        }
    }
}