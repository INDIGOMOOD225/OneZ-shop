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
</head>
<body>

	<h2>Bunch of Merch</h2>

	<table>
	
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
        $json_data = file_get_contents("products.json");
        $products = json_decode($json_data, true);
        if(count($products) != 0){
            foreach($products as $product) {
               ?> 

                 <!-- The html template we will use in our loop -->
                    <tr>
                        <td> <img src="<?php echo $product['image']?>"></td>
                        <td> <?php echo $product['name']?> </td>
                        <td> <?php echo $product['price']?> </td>
                        <td> <?php echo $product['productCode']?> </td>
                        <td> <?php echo $product['inventory']?> </td>
                        <td>
                            <!-- Edit actions -->
                            <select name="actions" id="actions">
                                <option value="">Select action</option>
                                <option value="remove">Remove</option>
                                <option value="edit">Edit</option>
                                <option value="sold-out">Sold out</option>
                            </select>
                        </td>
                    </tr>

               <?php
            }
          
        }
       ?>
    
    </table> <br><br>
    <button onclick="window.location.href='visitors.html'">Go back</button>
</body>
</html>