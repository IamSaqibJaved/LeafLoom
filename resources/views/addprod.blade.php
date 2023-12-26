
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/addprod.css') }}">
</head>
<body>

<form id="product-form" action="/addprod" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="product-name">Name of Product:</label>
    <input type="text" id="product-name" name="product_name" required>
    
    <label for="product-price">Price:</label>
    <input type="number" id="product-price" name="product_price" required>
    
    <label for="product-image">Product Image:</label>
    <input type="file" id="product-image" name="product_image" accept="image/*">
    
    <div id="categories">
        <label><input type="radio" name="category" value="skincare"> Skin Care</label>
        <label><input type="radio" name="category" value="haircare"> Hair Care</label>
        <label><input type="radio" name="category" value="makeup"> Makeup</label>
    </div>
    
    <div id="sub-categories" style="display: none;">
        <label for="sub-category">Sub Category:</label>
        <select id="sub-category" name="sub_category">
            <!-- Sub-categories options will be added here by JavaScript -->
        </select>
    </div>
    
    <div id="ingredients" style="display: none;">
        <label for="ingredient">Ingredients:</label>
        <select id="ingredient" name="ingredient">
            <!-- Ingredients options will be added here by JavaScript -->
        </select>
    </div>
    
    <div id="types" style="display: none;">
        <label for="type">Type:</label>
        <select id="type" name="type">
        </select>
    </div>

    
    <button type="submit">Submit</button>
</form>

<script src="{{asset('js/addprod.js')}}"></script>
</body>
</html>
