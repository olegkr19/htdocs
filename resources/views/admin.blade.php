<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
</head>
<body>
<h1>Admin panel - Control Panel</h1>
<h2>Add new product</h2>

<form action="" method="post">
    @csrf
    <select name="name" title="name">
        <option value="TISSOT">TISSOT</option>
        <option value="Breitling">Breitling</option>
        <option value="Omega">Omega</option>
        <option value="Mathey-Tissot">Mathey-Tissot</option>
        <option value="Hermle">Hermle</option>
        <option value="Hilser">Hilser</option>
    </select><br>
    <input type="url" name="img_url" title="img_url" placeholder="Image url" size="70"><br>
    <textarea name="description" placeholder="Description" rows="10" cols="100"></textarea><br>
    <input type="number" name="price" title="price" placeholder="Price"><br>
    <input type="text" name="model" title="model" placeholder="Model" size="35"><br>
    <input type="number" min="1" max="2" name="category_id" title="category_id" placeholder="Category_id"><br><br>
    <input type="submit" value="Add product">
</form>

<br>
<a href="/">Go to home page</a>
</body>
</html>