    <?php
    $pdo= new PDO('mysql:host=localhost;port=3306;dbname=crud_try','root','');
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo'<pre>';
    // var_dump($products);
    // echo'</pre>';
    ?>
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <title>Crud</title>
        <style>
          h1
          {
            text-align:center;
          }
        </style>
      </head>
      <body>
        <h1>Crud operations</h1>
          <!-- create operation -->
          <p>
           <h2> Create new product</h2>
           
<form action="" method="post">

  <div class="form-group my-3">
    <label>Product image</label>
    <input type="file" name="image">
  </div>

  <div class="form-group mt-3 mb-2">
    <label>product Title</label>
    <input type="text" class="form-control" name="title">
  </div>

  <div class="form-group mt-3">
    <label>Product Description</label>
    <textarea class="form-control" name="description"></textarea>
    </div>
  
  <div class="form-group mt-3 mb-4">
    <label>Product Price</label>
    <input type="number" step=".01" class="form-control" name="price">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


          </p>
    
      </body>
    </html>
