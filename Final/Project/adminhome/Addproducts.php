<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap">
	<title></title>
	<style>

    * {

  font-family: 'Teko', sans-serif;
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style-type: none;
  box-sizing: border-box;
}

input[type=text], [type=Password] ,[type=AddingDate],[type=SessionDate],[type=Price],[type=Status]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #66CCCC;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #00868B;
}

div {
  width: 50%;
  border-radius: 5px;
  background-color: #D1EEEE;
  padding: 20px;
  margin: auto;
}
</style>
</head>
<body>
  <?php
  include 'dbconnection.php'; 
  ?>
  <div>
  <form action="insertpro.php" method="POST">
    <label for="ID">ID</label>
    <input type="text" id="ID" name="ID" placeholder="Product ID..">

    <label for="Products">Product Name</label>
    <input type="text" id="" name="Products" placeholder="Product name..">

    <label for="AddingDate">Adding Date</label>
    <input type="AddingDate" id="AddingDate" name="AddingDate" placeholder="Adding Date..">

    <label for="SessionDate">Session Date</label>
    <input type="SessionDate" id="SessionDate" name="SessionDate" placeholder="Session Date..">


     <label for="Price">Price :</label>
    <input type="Price" id="Price" name="Price" placeholder="Price..">


     <label for="Status">Status :</label>
    <input type="Status" id="Status" name="Status" placeholder="Status..">

   
  
    <input type="submit" value="Add Product">
  </form>
</div>
</body>
</html>