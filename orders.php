<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $ice_cream = $_POST['ice_cream'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO orders (customer_name, email, address, ice_cream, quantity, user_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$customer_name, $email, $address, $ice_cream, $quantity, $user_id]);
    echo "Order placed successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding-bottom: 50px;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            width: 350px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            border: 2px solid black;
            background: white;
            padding: 50px;
            border-radius: 5px;
        }

        .text-center {
            text-align: center;
        }

        .margin-low {
            margin-top: 20px;
        }

        .margin-high {
            margin-top: 35px;
        }

        input {
            padding: 6px 8px;
            outline: none;
            font-size: .8rem;
            border: 2px solid black;
            border-radius: 5px;
        }

        h1 {
            text-decoration: none;
            color: purple;
        }

        .login-btn {
            background: purple;
            padding: 3px 10px;
            border: 2px solid black;
            font-size: 1rem;
            color: white;
            letter-spacing: 1px;
            transition: all .5s ease-in-out;
            border-radius: 5px;
            width: 250px;
        }

        .login-btn:hover {
            background: blue;
            color: white;
        }

        .cancel-btn {
            padding: 3px 10px;
            border: 2px solid black;
            font-size: 1rem;
            color: rgb(135, 8, 84);
            letter-spacing: 1px;
            transition: all .5s ease-in-out;
            border-radius: 5px;
        }

        .cancel-btn:hover {
            background: purple;
            color: white;
        }

        a:hover {
            color: blue;
        }

        @media screen and (max-width: 700px) {
            .form {
                width: 65%;
                padding: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form name="f1" action="orders.php" method="POST" class="form">
            <div class="login-form">
                <h1 class="text-center">Place an Order</h1>
                <input class="margin-high" type="text" name="customer_name" placeholder="Customer Name" required>
                <input class="margin-low" type="email" name="email" placeholder="E-mail" required>
                <input class="margin-low" type="text" name="address" placeholder="Address" required>
                <input class="margin-low" type="text" name="ice_cream" placeholder="Ice Cream Name" required>
                <input class="margin-low" type="number" name="quantity" placeholder="Quantity" required>
                <div class="text-center">
                   <button class="margin-high login-btn" type="submit" name="submit">Place Order</button>     
                </div>
                <div class="text-center">
                <a href="index.php"><button class="margin-high cancel-btn" type="button" name="reset" >Back</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
