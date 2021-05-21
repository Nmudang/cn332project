<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
    <title>Shopping cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body> 
<div class="container">
    <br /><br />
    <div class="col-lg-6 col-md-6">
        <div class="table-responsive"> 
            <h3 align="center">Shopping Cart</h3><br />
            <?php
            foreach($clothes as $row)
            {
                echo '
                <div class="col-md-4" style="padding:16px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; height:500px" align="center">
                <img src="'.base_url().'public/images/'.$row->product_image.'" width="100" 
                height="100" class="img-thumbnail" /><br />

                
                <h4>'.$row->Name.'</h4>
                <h3 class="text-danger">$'.$row->Price.'</h3>
                <input type="text" name="quantity" class="form-control quantity" id="'.$row->Id.'" /><br />
                <button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="'.$row->Name.'" data-price="'.$row->Price.'" data-productid="'.$row->Id.'" />Add to Cart</button>
                </div>
                ';
            }
            ?>

        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div id="cart_details">
            <h3 align="center">Cart is Empty</h3>
        </div>
    </div>
    
</div>
</body>
<script>
$(document).ready(function(){
    $('.add_cart').click(function(){
        var Id = $(this).data("productid");
        var Name = $(this).data("productname");
        var Price = $(this).data("price");
        var quantity = $('#' + Id).val();
        if(quantity != '' && quantity > 0)
        {
            $.ajax({
                url:"<?php echo base_url(); ?>shopping_cart/add",
                method:"POST",
                data:{Id:Id, Name:Name, Price:Price, quantity:quantity},
                success:function(data)
                {
                    alert("Product Added into Cart");
                    $('#cart_details').html(data);
                    $('#' + Id).val('');
                }
            });
        }
        else
        {
            alert("Please Enter quantity");
            
        }
    });

    $('#cart_details').load("<?php echo base_url(); ?>shopping_cart/load");

    $(document).on('click', '.remove_inventory', function(){
        var row_id = $(this).attr("id");
        if(confirm("Are you sure to remove this?"))
        {
            $.ajax({
                url:"<?php echo base_url(); ?>shopping_cart/remove",
                method:"POST",
                data:{row_id:row_id},
                success:function(data)
                {
                    alert("Product removed from Cart");
                    $('#cart_details').html(data);
                }
            })
        }
        else{
            return false;
        }
    });

    $(document).on('click', '#clear_cart', function(){
        if(confirm("Are you sure to clear cart?"))
        {
            $.ajax({
                url:"<?php echo base_url(); ?>shopping_cart/clear",
                success:function(data)
                {
                    alert("Your cart has been clear...");
                    $('#cart_details').html(data);
                }
            });
        }
    })
});
</script>
