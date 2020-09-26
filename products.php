<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head>
<title>Products</title>
<link href="styles/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="styles/applicationStyles.css">
<style type="text/css">
    .active {
  background-color: #4CAF50;
  color: white;
}
</style>
<script type="text/javascript">
    var checkout = function(){
        var customerName = prompt("Enter customer name: ", "");
        while (customerName == null || customerName == "") {
            alert("Please provide the customer name");
            customerName = prompt("Enter customer name: ", "");
        } 
        cartAction('empty',customerName);    
        
    
    }
</script>
</head>
<body>
<div class="header">
  <div class="title">
    <h1>Welcome to Home Shop</h1>
    <p>Various needs one destination</p>
  </div>
  <div class="titleImage">
    <img src="images/headingImage.jpg">
  </div>
    <div >
    <a href="index.php">Home</a>
    <a class="products.php" href="#news">Products</a>
    <a href="feedback.php">Contact Us</a>
  </div>
</div>    
<?php 
require_once "product-gallery.php";
?>
<div class="clear-float"></div>

<div id="shopping-cart">
<div id="cart-item">
<?php 
require_once "ajax-action.php";
?>
</div>
</div>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function cartAction(action, product_code) {
    var queryString = "";
    if (action != "") {
        switch (action) {
        case "add":
            queryString = 'action=' + action + '&code=' + product_code
                    + '&quantity=' + $("#qty_" + product_code).val();
            break;
        case "remove":
            queryString = 'action=' + action + '&code=' + product_code;
            break;
        case "empty":
            queryString = 'action=' + action + '&customerName=' + product_code;;
            break;
        }
    }
    jQuery.ajax({
        url : "ajax-action.php",
        data : queryString,
        type : "POST",
        success : function(data) {
            $("#cart-item").html(data);
            if (action == "add") {
                $("#add_" + product_code + " img").attr("src",
                        "images/icon-check.png");
                $("#add_" + product_code).attr("onclick", "");
            }
        },
        error : function() {
        }
    });
}
</script>
</body>
</html>