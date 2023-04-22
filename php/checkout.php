<?php
require_once('config.php');

function outputShoppingCart() {
   try {
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'select * from shoppingcart';

    $result = $pdo->query($sql);
    $sum = 0;
    while ($row = $result->fetch()) {
    outputCheckoutTable($row); 
    $sum += (float)$row['totalPrice'];
    #$a = array();
    #array_push($a, $row['totalPrice']);
    #$sum = array_sum($a);  
   }
    outputTotalSum($sum);
   
      $pdo = null;
   }
      catch (PDOException $e) {
         die( $e->getMessage() );
      }
   }

   function outputCheckoutTable($row) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>';
      echo $row['name'];
      echo '</td>';

      echo '<td>';
      echo '$'.number_format($row['price'], 2, '.','');
      echo '</td>';

      echo '<td>';
      echo '$'.number_format($row['AddOnPrice'], 2, '.','');
      echo '</td>';

      echo '<td>';
      
      echo '$'.number_format($row['totalPrice'], 2, '.','');
      echo '</td>';

      echo '<td>';
      echo '</td>';
      echo '</tr>';
      echo '</tbody>';
      #$sum = 0;
      #$sum += $row['totalPrice'];
     # $a = array($row['totalPrice']);
     # $sum = array_sum($a);
      #outputTotalSum($sum);
   }

   function outputTotalSum($sum) {
    echo '<tfoot>';
     echo '<tr>';
       echo '<td colspan="3" class="text-right">';
      echo 'Total:'.'</td>';
    echo '<td id="cart-total">'.'$'.$sum.'</td>';
     echo '</tr>';
  
    echo '</tfoot>';

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Checkout</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="/css/style-1.css">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="/javascript/baklava.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="icon" type="image/x-icon" href="/images/logo2.png"></link>
</head>
<body>
   <main>
      <header>
         <img src= "/images/logo2.png" alt = "logo"/>
         <h1>Team One Cafe</h1>
      </header>
   </main>  
   <div class="container">
      <nav class="navbar navbar-default" role="navigation">
         <ul id="navi" class="nav navbar nav">
            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="catalogue.html">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="references.html">References</a></li>
            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
       <li class="nav-item"><a href="checkout.html"><i class="fa fa-shopping-cart"></i></a></li>
         </ul>
      </nav>
      <!--
      <div class="row">
         <div class="col-md-3">
            <div class="panel panel-default">
               <div class="panel-heading" style="background-color:#362417">
                  <h3 class="panel-title">Recommendations</h3>
               </div>
               <div class="panel-body">
                  <ul class="list-group">
                     <li class="list-group-item"><a href="tea.html" style="color: white;">Tea</a></li>
                     <li class="list-group-item"><a href="turkish-tea.html" style="color: white;">Turkish Tea</a></li>
                     <li class="list-group-item"><a href="baklava.html" style="color: white;">Baklava</a></li>
                  </ul>
               </div>
            </div>
         </div>
         -->
         <div class="col-md-12">
            <div class="jumbotron">
           
              <h1>Cart</h1>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>AddOnPrice</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                  </tr>
</thead>
                  <?php 
                  outputShoppingCart();
                ?>

                
                <!-- Cart items will be dynamically added here -->
             


   
               <!-- </tbody>
                <tfoot>
                  <tr>
                    <td colspan="3" class="text-right">Total:</td>
                    <td id="cart-total"></td>
                  </tr>
              
                </tfoot> -->
              </table>
              <div>
               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class=>
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"  name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>
               </div>
              
            </div>
         </div>
      </div>
   </div>
</body>
</html>