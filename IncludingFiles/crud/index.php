<?php
$pdo= new PDO('mysql:host=localhost;port=3306;dbname=crud_try','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//crud queries
$statement = $pdo->prepare('SELECT * from products ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

echo'<pre>';
var_dump($products);
echo'</pre>';
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
       <h2> Products CRUD</h2>
        <a href="create.php" class="btn btn-primary">Create</a>
      </p>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <!-- <th scope="col">Image</th> -->
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $i=> $product):?>
    <tr>
      <th scope="row"><?php echo $i+1?></th>
      <td></td>
      <td><?php echo $product['title']?></td>
      <!-- <td><?php echo $product['image']?></td> -->
      <td><?php echo $product['price']?></td>
      <td><?php echo $product['create_date']?></td>
      <td>
        <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
        <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  </body>
</html>