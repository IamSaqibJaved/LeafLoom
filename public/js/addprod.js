document.addEventListener('DOMContentLoaded', function() {
    const categoryRadios = document.querySelectorAll('input[name="category"]');
    const subCategorySelect = document.getElementById('sub-category');
    const ingredientSelect = document.getElementById('ingredient');
    const TypeDiv = document.getElementById('type');
    const subCategoriesDiv = document.getElementById('sub-categories');
    const ingredientsDiv = document.getElementById('ingredients');
    const typesDiv = document.getElementById('types');
    
    categoryRadios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            switch(this.value) {
                case 'skincare':
                    updateSubCategories(['Serum', 'Lotions and moisturizer', 'Facewash']);
                    updateIngredients(['Vitamin C', 'Retinol', 'Arbutin']);
                    updateType(['Dry Skin','Oily Skin','All Skin Types']);
                    break;
                case 'haircare':
                    updateSubCategories(['Scalp oil', 'Shampoo', 'Conditioner']);
                    updateIngredients(['Keratin', 'Biotin', 'Argan Oil']);
                    updateType(['Hair Fall','Dry & Damage','Split Ends']);
                    break;
                case 'makeup':
                    subCategoriesDiv.style.display = 'none';
                    ingredientsDiv.style.display = 'none';
                    typesDiv.style.display = 'none';
                    break;
            }
        });
    });

    function updateSubCategories(subCategories) {
        subCategorySelect.innerHTML = '';
        subCategories.forEach(function(subCategory) {
            const option = document.createElement('option');
            option.value = subCategory.toLowerCase().replace(/\s+/g, '');
            option.textContent = subCategory;
            subCategorySelect.appendChild(option);
        });
        subCategoriesDiv.style.display = 'block';
    }

    function updateIngredients(ingredients) {
        ingredientSelect.innerHTML = '';
        ingredients.forEach(function(ingredient) {
            const option = document.createElement('option');
            option.value = ingredient.toLowerCase().replace(/\s+/g, '');
            option.textContent = ingredient;
            ingredientSelect.appendChild(option);
        });
        ingredientsDiv.style.display = 'block';
    }
    function updateType(types) {
        TypeDiv.innerHTML = '';
        types.forEach(function(type) {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/\s+/g, '');
            option.textContent = type;
            TypeDiv.appendChild(option);
        });
        typesDiv.style.display = 'block';
    }
});
