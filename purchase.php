<?php
    include "header.php";
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h5>Purchase</h5>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputDes" class="form-label">Description</label>
    <input type="text" name="des" class="form-control" id="exampleInputDes">
  </div>
  <div class="mb-3">
    <label for="exampleInputUnit" class="form-label">Unit</label>
    <input type="number" name="unit" class="form-control" id="exampleInputUnit">
  </div>
  <div class="mb-3">
    <label for="exampleInputUnitprice" class="form-label">Unit Price</label>
    <input type="number" name="unitprice" class="form-control" id="exampleInputUnitprice">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

    <?php
 if (isset($_POST['submit'])) 
    {
    $name=$_POST['name'];
    $des=$_POST['des'];
    $unit=$_POST['unit'];
    $unitprice=$_POST['unitprice'];

    $insertsql = "INSERT INTO product(name, des, unit, unitprice) VALUES ('$name', '$des', '$unit','$unitprice')";

    $insertsql1 = "INSERT INTO purchase(name, des, unit, unitprice) VALUES ('$name', '$des', '$unit','$unitprice')";
    if (mysqli_query($conn,$insertsql))
    {
      echo  "<script>
                    alert('Sucessfully Adding.');
                    window.location = 'category_view.php';
                    </script>";
    } else 
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
?>
</body>
</html>
