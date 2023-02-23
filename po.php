<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="icon" href="img/mewai.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    include "Header.php";
    ?>

    <section class="checkout_area section-margin--small">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="save.php" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="firstname"placeholder="First name">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="lastname" placeholder="Last name">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number"   placeholder="Phone number">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="compemailany"placeholder="Email Address">
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1"placeholder="Address line 01">
                                <span class="placeholder" data-placeholder="Address line 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2"placeholder="Address line 02">
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city"placeholder="Town/City">
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select"name="District">
                                    <option value="Thailand">Thailand</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                            </div>
                            <div class="col-md-12 form-group mb-0">
                                <div class="creat_account">
                                    <h3>Shipping Details</h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Ship to a different address?</label>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                            </div>
                    </div>


                    
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">
                                        <h4>Product <span>Total</span></h4>
                                    </a></li>
                        <?php
                        date_default_timezone_set('Asia/Bangkok');
                        $date = date("d-m-Y");
                        $time = date("H:i:s");
                        $value=0;
                        include "connect.php";
                        $sql = "SELECT * FROM cart";
                        $query = mysqli_query($conn, $sql);
                        while ($data=mysqli_fetch_array($query)){
                            $TOTAL=$data['Price']*$data['count'];
                            $value=$value+$TOTAL;
                            echo    '<li><a href="#">'.$data['Product_name'].'<span class="middle">x '.$data['count'].'</span> <span class="last">'.$TOTAL.'</span></a></li>';
                        }
                        ?>
                            </ul>
                            <ul class="list list_2"> 
                            <?php echo '<li><a href="#">Subtotal <span>'.$value.'</span></a></li>' ;?>
                                <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                               
                            <?php 
                             $value=$value+50;
                            echo '<li><a href="#">Total <span>'.$value.'</span></a></li>' ;
                            ?>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select"name="Total">
                                    <?php echo '<option value="'.$value.'">TOTAL</option>'; ?>
                                </select>
                                <select class="country_select"name="date">
                                    <?php echo '<option value="'.$date.'">DATE</option>'; ?>
                                </select>
                                <select class="country_select"name="time">
                                    <?php echo '<option value="'.$time.'">TIME</option>'; ?>
                                </select>
                            </div>
                            <div class="col-md-12 form-group text-center">
								<button type="submit" value="submit" class="button button-paypal" name="reg_PO">Proceed to Pay</button>
                                <a></a>
                                <a class="button button-paypal" href="CSHOP.php">Back to Cart</a>
							</div>

                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
    <?php
    include "Footer.php";
    ?>
</body>

</html>