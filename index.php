<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD ROYAL</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
<center>
    

<div class="main">
    <form action="insert.php" method="post" enctype="multipart/form-data">
      <h2>اضف منتجات علي موقع رويال</h2>
      <img src="logo2.jpg" alt="logo"  width="350px">
      <input type="text" name="name">
      <br>
      <input type="text" name="price">
      <br>
      <input type="file" id="file" name="image" style="display: none;">
      <label for="file">صوره المنتج</label>
      <button name="ubload">رفع المنتج</button>
      <br><br>
      <a href="products.php"> جميع المنتجات المنشوره</a>

    </form>
</div>

<p>Developer By Mohamed Mossad</p>


</center>

</body>
</html>