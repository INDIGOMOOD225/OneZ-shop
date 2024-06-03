user-select: none;

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Setting the pages character encoding -->
  <meta charset="UTF-8">
  
  <!-- The meta viewport will scale my content to any device width -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link to my stylesheet -->
  <link rel="stylesheet" href="css/table.css"> 
  <title>Start up</title>
  <style>
    header{
    background-color: #f1f1f1;
    padding: 1rem;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    }
    h2{
    text-align: center;
    color: "white";
    background-color: aquamarine;
    padding: 1rem;
    font-size: 1.5rem;
    font-weight: bold;
    fill: whitesmoke;
    }
  body{
    background-image: url(https://freefrontend.com/assets/img/css-background-patterns/2023-3d-cropped-golden-cubes-tessellated-pattern-no-div-pure-css.png);
    background-repeat: no-repeat;
    background-size: cover;
  }
    .button-36 {
  background-image: linear-gradient(92.88deg, #455EB5 9.16%, #5643CC 43.89%, #673FD7 64.72%);
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  flex-shrink: 0;
  font-family: "Inter UI","SF Pro Display",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;
  font-size: 16px;
  font-weight: 500;
  height: 4rem;
  padding: 0 1.6rem;
  text-align: center;
  text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
  transition: all .5s;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-36:hover {
  box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
  transition-duration: .1s;
}

@media (min-width: 768px) {
  .button-36 {
  padding: 0 2.6rem;
  }
}
  </style>
</head>
<body>

  <h2>Bunch of Merch</h2>
  <?php
  // Function to delete a product
  function deleteProduct($productCode) {
    // Read the contents of the "products.json" file
    $json_data = file_get_contents("products.json");
    // Decode the JSON data into an associative array
    $products = json_decode($json_data, true);
    
    // Loop through each product
    foreach($products as $key => $product) {
      // Check if the product code matches
      if($product['productCode'] == $productCode) {
        // Remove the product from the array
        unset($products[$key]);
        break;
      }
    }
    
    // Encode the updated array back to JSON
    $updated_json_data = json_encode($products, JSON_PRETTY_PRINT);
    
    // Write the updated JSON data back to the file
    file_put_contents("products.json", $updated_json_data);
  }

  // Check if the form is submitted
  if(isset($_POST['delete'])) {
    // Get the product code from the form
    $productCode = $_POST['productCode'];
    
    // Call the deleteProduct function
    deleteProduct($productCode);
  }
  ?>
  <table style="box-shadow: rgb(85, 91, 255) 0px 0px 0px 3px, rgb(31, 193, 27) 0px 0px 0px 6px, rgb(255, 217, 19) 0px 0px 0px 9px, rgb(255, 156, 85) 0px 0px 0px 12px, rgb(255, 85, 85) 0px 0px 0px 15px;">
  
    <!-- The tables header -->
    <tr>
    <th>Product Image</th>
    <th>Name</th>
    <th>Price</th>
    <th>Product code</th>
    <th>Available items</th>
    <th>Actions</th>
    </tr>
   <?php
    // Read the contents of the "products.json" file
    $json_data = file_get_contents("products.json");
    // Decode the JSON data into an associative array
    $products = json_decode($json_data, true);
    // Check if there are any products
    if(count($products) != 0){
      // Loop through each product
      foreach($products as $product) {
         ?> 

         <!-- The html template we will use in our loop -->
          <tr>
            <td> <img src="<?php echo $product['image']?>"></td>
            <td> <?php echo $product['name']?> </td>
            <td> <?php echo $product['price']?> </td>
            <td> <?php echo $product['productCode']?> </td>
            <td> <?php echo $product['inventory']?> </td>
            <>
      <!-- Delete action -->
      
    
              <!-- Edit actions -->
              <select name="actions" id="actions">
                <option value="">Select action</option>
                <option value="remove">Remove</option>
                <option value="edit">Edit</option>
                <option value="sold-out">Sold out</option>
        
              </select>
              <form method="post">
        <input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>">
        <button type="submit" name="delete">Submit request</button>
      </form>
            </td>
          </tr>

         <?php
      }
      
    }
     ?>
  
  </table> <br><br>
  <button onclick="window.location.href='visitors.html'" class="button-36" role="button">Go back</button>
</body>
</html>