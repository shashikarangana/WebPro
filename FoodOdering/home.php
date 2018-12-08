<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 12/8/2018
 * Time: 11:24 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBurger</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/Index.css">

    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <style>
        #ph1{
            background:url("dist/images/craft-slide.jpg");
            background-size: cover;
            width: 100%;height: 750px;
        }
        #createOrder{
            background:url("dist/images/orderbg.jpg");
            background-size: cover;
            width: 80%;height: 550px;
        }
        #secCreateOrder{
            background:url("dist/images/craft-slide.jpg");
            background-size: cover;
            width: 100%;height: 100%;
        }
        .navbar-text {
            position: absolute;
            width: 100%;
            left: 0;
            text-align: center;
            text-color: white;
            margin: auto;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
    </style>

</head>
<body>


<!-- navigation-->
<div class="pos-f-t">
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <h5 class="text-white h4">MY BURGER</h5>
            <!--<span class="navbar-toggler-icon"></span>-->
        </button>
    </nav>
</div>


<section id="secCreateOrder"class="row" style="padding: 0;margin: 0;width: 100%;height: 750px;">

<!--    <img src="dist/images/craft-slide.jpg" alt="Card image cap" style="padding: 0;margin: 0;width: 75%;height: 350px;">-->

    <form id="createOrder" class = "card" style="padding: 0;margin: 20%;width: 100%;height: 550px;">
        <br>
        <h4 class="h4" style="left:0;right: 0;bottom: 0;top: 0;margin: 10px;font-family: 'Abril Fatface', cursive;color: white">ORDER HERE...</h4>
        <br>
        <div class="row" style="margin-left:20px;margin-right: 20px">
            <div class="col col-md-6">
                <div class="form-group">
<!--                    <label for="orderCustomerID" style="text-color: white">Customer ID</label>-->
                    <input type="text" class="form-control" name="orderCustomerID" id="orderCustomerID" placeholder="Customer ID">
                </div>
            </div>
            <div class="col col-md-6">
                <div class="form-group">
<!--                    <label for="orderCustomerName">Customer Name</label>-->
                    <input type="text" class="form-control" name="orderCustomerName" id="orderCustomerName" placeholder="Customer Name">
                </div>
            </div>
        </div>
        <div class="row" style="margin-left:20px;margin-right: 20px">
            <div class="col col-md-12">
                <div class="form-group">
<!--                    <label for="orderItemID">Food Name</label>-->
                    <select class="form-control" name="OrderItems" id="OrderItemsName"></select>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left:20px;margin-right: 20px">

            <div class="col col-md-6">
                <div class="form-group">
<!--                    <label for="orderItemID">Food ID</label>-->
                    <input type="text" class="form-control" name="orderItemID" id="orderItemID" placeholder="Food ID" style="width: 200px">

                </div>
            </div>
            <div class="col col-md-6">
                <div class="form-group">

<!--                    <label for="orderItemPrice">Food Price</label>-->
                    <input type="number" class="form-control" name="orderItemPrice" id="orderItemPrice"  placeholder="Food Price">
                </div>
            </div>

        </div>
        <div class="row" style="margin-left:20px;margin-right: 20px">
            <div class="col col-md-6">
                <div class="form-group">
<!--                    <label for="orderQuantity">Order Quentity</label>-->
                    <input type="number" class="form-control" name="orderQuantity" id="orderQuantity"  placeholder="Order Quentity" style="width: 200px">
                </div>
            </div>
            <div class="col col-md-6">
                <div class="form-group">

<!--                    <label for="OrderDate">Order date</label>-->
                    <input type="date" class="form-control" name="OrderDate" id="OrderDate"  placeholder="" style="width: 200px">
                </div>
            </div>

        </div>


        <div class="row" style="margin-left:40px;margin-right: 20px">
        <div class="form-group">
<!--            <label for="orderTotalPrice">Amount</label>-->
            <input type="number" class="form-control" name="orderTotalPrice" id="orderTotalPrice"  placeholder="Amount" style="width: 400px">
        </div>
        </div>
        <div class="row justify-content-lg-center">
            <button class="btn btn-danger" id="cancelOrder" type="button" style ="margin: 8px">Cancel Order</button>
            <button class="btn btn-primary" id="saveOrder" type="button" style ="margin: 8px">Get Order</button>
        </div>
    </form>
    </div>
</section>

<!-- end order model-->

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/bootstrap.min.js" rel="script" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $('#cancelOrder').click(function () {
            window.location.href = 'index.html';
        });
        //add customer click function
        $('#orderIcon').click(function () {
            $('#createOrder').modal('show');
        });
        // $('#orderPaymentID').click(function () {
        //     $.ajax({
        //        url:"api/service/PaymentService.php",
        //         method:"GET",
        //         async:true,
        //         dataType:"jason"
        //     }).done(function (resp) {
        //         var pid;
        //         for(var i in resp){
        //             var temp=resp[i];
        //             pid=temp[0];
        //         }
        //         $('#orderPaymentID').val(pid);
        //     });
        // });

        $('#OrderItemsName').click(function () {
            $.ajax({
                url:"api/service/FoodService.php",
                method:"GET",
                async:true,
                dataType:"json"
            }).done(function (resp) {
                var name=$('#OrderItemsName').val();
                var fid;
                var price;
                for (var i in resp){
                    var temp=resp[i];
                    if(name==temp[1]){
                        fid=temp[0];
                        price=temp[2];
                    }
                }
                $('#orderItemID').val(fid);
                $('#orderItemPrice').val(price);
            });
            $('#orderTotalPrice').click(function () {
                var unit=$('#orderItemPrice').val();
                var qty=$('#orderQuantity').val();
                var tot=unit*qty;
                $('#orderTotalPrice').val(tot);
            })
        });

        $('#orderCustomerID').click(function () {
            $.ajax({
                url:"api/service/CustomerService.php",
                method:"GET",
                async:true,
                dataType:"json"
            }).done(function (resp) {
                var name=$('#orderCustomerName').val();
                alert(name);
                var cid;
                for (var i in resp){
                    var temp=resp[i];
                    if (name==temp[1]){
                        cid=temp[0];
                    }
                }
                $('#orderCustomerID').val(cid);
            });

        });

        $('#getOrder').click(function () {
            let orderForm=$('#OrderForm').serialize();
            $.ajax({
                url:"api/service/OrderService.php",
                method:"POST",
                async:true,
                data:orderForm
            }).done(function (res) {
                alert(res);
            });
        });
    });

</script>
<footer>
    <div style="background-color:#0b2e13 ; width: 100%;height: 20px"></div>
</footer>
</body>
</html>
