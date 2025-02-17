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
            </ul>
        `
    });
    const categoryContainer = document.getElementById("budget-ul");
    if (categoryContainer) {
        categoryContainer.innerHTML = categoryHtml;
    } else {
        console.error("Элемент с id 'budget-ul' не найден");
    }
}

loadCategory();