async function loadGoals(){
    const response = await fetch('api/savings',{
        headers:{
            'Accept': 'application/json'
        }
    });

    if(!response.ok){
        console.error("Ошибка загрузки целей!");
        return;
    }

    const goals = await response.json();
    console.log('Ответ API:', goals);
    let goalsHtml = '';
    goals.forEach(goal => {
        let progress = (goal.savings / goal.target) * 100;
        goalsHtml += `
        <li>
            <span class="goal-name">${goal.name}</span> — 
            <span class="goal-amount">${goal.target.toLocaleString()}₽</span>
            <div class="progress-container">
                <div class="progress-bar" style="width: ${Math.round(progress)};">${Math.round(progress)}</div>
            </div>
            <button class="delete-goal" data-id="${goal.id}">Удалить категорию</button>
        </li>
        ` 
    });
    document.getElementById('goals-list').innerHTML = goalsHtml;
    document.querySelectorAll('.delete-goal').forEach(button => {
        button.addEventListener('click',deleteGoal);
    });
}

async function deleteGoal(event){
    const dataId = event.target.getAttribute('data-id');
    const response = await fetch(`/api/savings/${dataId}`,{
        method:"DELETE",
        headers: { 'Accept': 'application/json' }
    });

    if (response.ok) {
        loadGoals(); 
    } else {
        console.error('Ошибка удаления цели');
    }
}

async function addGoal(){
    const name = document.getElementById('name').value;
    const amount = document.getElementById('amount').value;
    const response = await fetch('/api/savings', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ target_name: name, target_amount: amount }) 
    })

    if (response.ok) {
        document.getElementById('name').value = '';
        document.getElementById('amount').value = '';
        loadGoals();
    } else {
        console.error('Ошибка добавления цели');
    }
}

document.getElementById('saving-add-goal-btn').addEventListener('click', addGoal);
loadGoals();