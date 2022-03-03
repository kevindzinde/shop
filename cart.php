<?php
    session_start();
    include("includes/db.php");
    include("includes/header.php");
    include("includes/navbar.php");
    include("functions/functions.php");

?>
<?php

$ip_add = getRealUserIp();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

$count = mysqli_num_rows($run_cart);

?>

<!--Exp-->
<div class="container">
  <h2>Your cart</h2>
  <p>You currently have <?php echo $count; ?> item(s) in your cart.</p>            
  <table class="table">
    <thead>
      <tr>
        <th colspan="2" >Product</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Size</th>
        <th colspan="1">Delete</th>
        <th colspan="2"> Sub Total </th>
      </tr>
    </thead>
    <tbody>
        
<?php
$total = 0;
while($row_cart = mysqli_fetch_array($run_cart)){
    $pro_id = $row_cart['p_id'];
    $pro_size = $row_cart['size'];
    $pro_qty = $row_cart['qty'];
    $only_price = $row_cart['p_price'];
    $get_products = "select * from products where product_id='$pro_id'";
    $run_products = mysqli_query($con,$get_products);
while($row_products = mysqli_fetch_array($run_products)){
    $product_title = $row_products['product_title'];
    $product_img1 = $row_products['product_img1'];
    $sub_total = $only_price*$pro_qty;
    $_SESSION['pro_qty'] = $pro_qty;
    $total += $sub_total;
?>

      <tr>
      <td>
        <img src="admin_area/product_images/<?php echo $product_img1; ?>"  style="width:50px;height:60px;">
    </td>
    <td>
        <a href="#" > <?php echo $product_title; ?> </a>
    </td>
    <td>
        <input type="text" name="quantity" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="quantity form-control">
    </td>
    <td>
$<?php echo $only_price; ?>.00
</td>
<td>
<?php echo $pro_size; ?>
</td>
<td>
    <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
</td>
<td>
$<?php echo $sub_total; ?>.00
</td>
      </tr>
      <?php } } ?>
    </tbody>
  </table>
</div>

<!--Exp-->


<!--Footer-->
<?php
    include("includes/footer.php");
?>
<!--End Footer-->
   

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>