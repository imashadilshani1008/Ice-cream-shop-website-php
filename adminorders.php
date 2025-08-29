<?php
include 'db.php';

// Fetch orders from the database
$stmt = $conn->prepare("SELECT id, customer_name, email, address, ice_cream, quantity, status FROM orders");
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Handle accept and delete actions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $orderId = $_POST['order_id'];
    $action = $_POST['action'];

    if ($action == 'accept') {
        $stmt = $conn->prepare("UPDATE orders SET status = 'Accepted' WHERE id = ?");
        $stmt->execute([$orderId]);
        $order = $stmt->fetch();
        $email = $order['email'];

        // Send email to user
        $to = $email;
        $subject = "Order Accepted";
        $message = "Your order has been accepted.";
        $headers = "From: support@uniconesweets.com";
        mail($to, $subject, $message, $headers);
    } elseif ($action == 'delete') {
        // Fetch the order to get the user's email
        $stmt = $conn->prepare("SELECT email FROM orders WHERE id = ?");
        $stmt->execute([$orderId]);
        $order = $stmt->fetch();
        $email = $order['email'];

        // Delete the order
        $stmt = $conn->prepare("DELETE FROM orders WHERE id = ?");
        $stmt->execute([$orderId]);

        // Send email to user
        $to = $email;
        $subject = "Order Deleted";
        $message = "Your order has been deleted.";
        $headers = "From: support@uniconesweets.com";
        mail($to, $subject, $message, $headers);
    }

    // Refresh the page to show updated data
    header("Location: adminorders.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Admin Orders</title>
    <style>
        table, th, td {
            border: 0.5px solid black;
            padding: 5px;
            border-spacing: 0.5px;
            width: 800px;
            margin: 0 auto;
        }

        th, td {
            text-align: center;
        }

        th {
            background-color: #995496;
            color: white;
        }

        form {
            display: inline;
        }

        .btn {
            padding: 5px 10px;
            margin: 5px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-accept {
            background-color: green;
            color: white;
        }

        .btn-delete {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

<h1 style="text-align: center; margin-top: 20px; color: #995496;">Received Orders</h1>

<table>
    <tr>
        <th>Name</th>
        <th>E-mail</th>
        <th>Address</th>
        <th>Ice cream name</th>
        <th>Quantity</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= htmlspecialchars($order['customer_name']) ?></td>
            <td><?= htmlspecialchars($order['email']) ?></td>
            <td><?= htmlspecialchars($order['address']) ?></td>
            <td><?= htmlspecialchars($order['ice_cream']) ?></td>
            <td><?= htmlspecialchars($order['quantity']) ?></td>
            <td><?= htmlspecialchars($order['status']) ?></td>
            <td>
                <form method="post" action="adminorders.php">
                    <input type="hidden" name="order_id" value="<?= $order['id'] ?>">
                    <button type="submit" name="action" value="accept" class="btn btn-accept">Accept</button>
                    <button type="submit" name="action" value="delete" class="btn btn-delete">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
