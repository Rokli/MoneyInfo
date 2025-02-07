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