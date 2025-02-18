async function loadCategory(){
    const response = await fetch('api/budget',{
        headers:{
            'Accept': 'application/json'
        }
    });

    if(!response.ok){
        console.error("Ошибка загрузки категорий");
        return;
    }

    const categories = await response.json();
    let categoryHtml = '';

    categories.forEach(category => {
        categoryHtml += `
            <ul class="budget-ul">
                <li>${category.name}: ${category.price}</li>
                <button class="budget-button-delete" data-id="${category.id}">Удалить</button>
            </ul>
        `
    });
    const categoryContainer = document.getElementById("budget-ul");
    if (categoryContainer) {
        categoryContainer.innerHTML = categoryHtml;
    } else {
        console.error("Элемент с id 'budget-ul' не найден");
    }
    document.querySelectorAll(".budget-button-delete").forEach(btn => {
        btn.addEventListener('click',deleteCategory);
    });
}

async function deleteCategory(event){
    const dataId = event.target.getAttribute('data-id');
    const response = await fetch(`api/budget/${dataId}`,{
        method:"DELETE",
        headers: {"Accept": "application/json"}
    });

    if (response.ok) {
        loadCategory(); 
    } else {
        console.error('Ошибка удаления цели');
    }
}

loadCategory();