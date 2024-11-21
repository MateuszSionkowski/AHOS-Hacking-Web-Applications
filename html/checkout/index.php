<?php
require __DIR__ . '/../functions.php';

function authenticate($username, $password)
{
    if ((($password=="January2027")))
    {
        return TRUE;
    }
    else return FALSE;

}

$error_message="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ( !empty($_POST['coupon'])) {

        $password = $_POST['coupon'];
    } 
    $error_message = "<i style='color:gray'>This coupon code is invalid.</i>";
}




$unauthenticated_page = <<< XXXXXX



<h2 >Hybrid attack on password</h2>
<h3 >Find a working coupon code with a hybrid of dictionary+bruteforce attack</h3>    
<hr class="divider">


<div class="lab">

    <title>Checkout - Umbrella Store</title>
    <style>
        /* General Styles */

        .lab {
            margin: 0 auto;
        }
        .container {
            margin: 0 auto;
            max-width: 600px;
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .lab h1 {
            text-align: center;
            color: #4682b4;
            margin-bottom: 20px;
        }

        .order-summary, .coupon-form, .total-price {
            margin-top: 20px;
        }

        /* Order Summary Styling */
        .order-summary {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .order-summary h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .order-summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .order-summary-item span {
            color: #555;
        }

        /* Coupon Form Styling */
        .coupon-form input[type="text"] {
            width: 70%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }

        .coupon-form button {
            padding: 10px 15px;
            font-size: 16px;
            color: white;
            background-color: #4682b4;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .coupon-form button:hover {
            background-color: #5a9bd3;
        }

        /* Total Price Styling */
        .total-price {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            color: #333;
        }
    </style>


<div class="container">
    <h1>Checkout</h1>

    <!-- Order Summary Section -->
    <div class="order-summary">
        <h2>Order Summary</h2>
        <div class="order-summary-item">
            <span>Classic Black Umbrella</span>
            <span>$20.00</span>
        </div>
        <div class="order-summary-item">
            <span>Red & White Stripe Umbrella</span>
            <span>$18.00</span>
        </div>
        <div class="order-summary-item">
            <span>Sunshine Yellow Umbrella</span>
            <span>$22.00</span>
        </div>
    </div>

    <!-- Coupon Form Section -->
    <div class="coupon-form">
        <h2 style="color: black;">Apply Coupon Code</h2>
        <form method="POST" action="">
            <input type="text" name="coupon" placeholder="Enter coupon code">
            <button type="submit">Apply</button>
        </form>
        $error_message
    </div>

    <!-- Total Price Section -->
    <div class="total-price">
        <p>Total Price: $60.00</p>
    </div>
</div>
</div>



XXXXXX;



$authenticated_page = <<< XXXXXX




<h2 >Hybrid attack on password</h2>
<h3 >Find a working coupon code with a hybrid of dictionary+bruteforce attack</h3>    
<hr class="divider">


<div class="lab">

    <title>Checkout - Umbrella Store</title>
    <style>
        /* General Styles */

        .lab {
            margin: 0 auto;
        }
        .container {
            margin: 0 auto;
            max-width: 600px;
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .lab h1 {
            text-align: center;
            color: #4682b4;
            margin-bottom: 20px;
        }

        .order-summary, .coupon-form, .total-price {
            margin-top: 20px;
        }

        /* Order Summary Styling */
        .order-summary {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .order-summary h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .order-summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .order-summary-item span {
            color: #555;
        }

        /* Coupon Form Styling */
        .coupon-form input[type="text"] {
            width: 70%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }

        .coupon-form button {
            padding: 10px 15px;
            font-size: 16px;
            color: white;
            background-color: #4682b4;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .coupon-form button:hover {
            background-color: #5a9bd3;
        }

        /* Total Price Styling */
        .total-price {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            color: #333;
        }
    </style>


<div class="container">
    <h1>Checkout</h1>

    <!-- Order Summary Section -->
    <div class="order-summary">
        <h2>Order Summary</h2>
        <div class="order-summary-item">
            <span>Classic Black Umbrella</span>
            <span>$20.00</span>
        </div>
        <div class="order-summary-item">
            <span>Red & White Stripe Umbrella</span>
            <span>$18.00</span>
        </div>
        <div class="order-summary-item">
            <span>Sunshine Yellow Umbrella</span>
            <span>$22.00</span>
        </div>
    </div>

    <!-- Coupon Form Section -->
    <div class="coupon-form">
        <h2 style="color:black;">Apply Coupon Code</h2>
        <form method="POST" action="">
            <input disabled=1 type="text" name="coupon" placeholder="Enter coupon code">
            <button disabled type="submit" style="background-color: gray;">Apply</button>
        </form>
        <i style="color: gray;"> Coupon code applied </i>
    </div>

    <!-- Total Price Section -->
    <div class="total-price">
        <p>Total Price: $10.00</p>
        <p style="color: green"><i>-$50.00 in coupons</i></p>
    </div>
</div>
</div>




XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'POST') && (authenticate($username, $password))) )
{
    load_header("Check out");
    echo($authenticated_page);
    load_footer();
}
else
{
    load_header("Check out");
    echo($unauthenticated_page);
    load_footer();

}




?>
