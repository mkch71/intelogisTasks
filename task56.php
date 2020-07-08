<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Task3 Intelogis</title>
  </head>
  <body>
    <div class="container-fluid">
      <table>
        <?php 
          require_once("db.php");
          global $mysqli;
          $fields = $mysqli->query("SHOW COLUMNS FROM `products`");
          echo("<tr>");
          //$arrFields=[];
          while ($row=$fields->fetch_assoc()){
            //$arrFields[]=$row["Field"];
            echo("<th>".$row["Field"]."</th>");
          }  
          echo("</tr>");
          
          $result=$mysqli->query("SELECT * FROM `products` WHERE 1");
          while ($row=$result->fetch_assoc()){
            echo("<tr>");
            foreach($row as $key => $value){
             echo("<td>".$row[$key]."</td>"); 
            }
            echo("</tr>");  
            //echo("<th>".$row["Field"]."</th>");
          }  
          
          
        ?>
      </table>
      <hr>
      <table>
        <?php
          $result=$mysqli->query("SELECT products.id, products.name, products.description, products.picture, ordersrow.idorder, ordersrow.qty FROM `products` LEFT OUTER JOIN `ordersrow` ON products.id = ordersrow.idproduct");
          
          echo("<tr> <th> id </th>  <th> name </th><th>description <th> picture </th><th> ordersrow.idorder</th><th> ordersrow.qty</th>");
        
          while ($row = $result->fetch_assoc()){
            echo("<tr>");
           
            echo("<td>".$row["id"]."</td>"); 
            echo("<td>".$row["name"]."</td>"); 
            echo("<td>".$row["description"]."</td>"); 
            echo("<td>".$row["picture"]."</td>"); 
            echo("<td>".$row["idorder"]."</td>"); 
            echo("<td>".$row["qty"]."</td>"); 
            
            
            echo("</tr>");
          }
        ?>
      </table>
      
      
    </div>
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    
    
  </body>
</html>