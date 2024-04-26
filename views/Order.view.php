<?php

require_once 'Database.php';


$config = require 'config.php';
$db = new Database($config['database']);

if (isset($_POST["submit"])) {

    $address = $_POST["address"];
    $note = $_POST["note"];
    $userID = $_SESSION["user"]["id"];


    $insertOrderQuery = "
            INSERT INTO `order` (orderdate, note, address, userid)
            VALUES (:orderdate, :note, :address, :userid)";
    $db->query($insertOrderQuery, [
        'userid' => $userID,
        'address' => $address,
        'note' => $note,
        'orderdate' => date('Y-m-d H:i:s')
    ]);

    $orderId = $db->connection->lastInsertId();
    $itemNumber = 1;

    foreach ($_POST['pizza_id'] as $key => $pizzaId) {
        $quantity = $_POST['quantity'][$key];
        $totalPrice = $_POST['total_price'][$key];
        $insertOrderItemQuery = "
                INSERT INTO orderitem (OrderID, ItemNumber, Quantity, ItemPrice, PizzaID)
                VALUES (:order_id, :item_number, :quantity, :item_price, :pizza_id)";
        $db->query($insertOrderItemQuery, [
            'order_id' => $orderId,
            'item_number' => $itemNumber,
            'quantity' => $quantity,
            'item_price' => $totalPrice,
            'pizza_id' => $pizzaId
        ]);
        $itemNumber++;
    }

    header("Location: /home");
    exit();
}

$pizzas = $db->query('SELECT * FROM pizza')->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .main {
            background-image: url('../assets/images/backgroundnajnovi.jpg');
            background-repeat: repeat;
        }

        .font-belle {
            font-family: 'La Belle Aurore', sans-serif;
        }

        .bg-custom {
            background-color: #122f1a;
        }

        .text-custom {
            color: #122f1a;
        }

        .border-custom {
            border-color: #122f1a;
        }

        .bg-custom-lighter {
            background-color: #1e4328;
        }

       
    </style>
</head>

<body class="main bg-gray-100">

    <header class="bg-custom text-white py-4">
        <?php require ('partials/nav.view.php') ?>
        <?php require ('partials/greeting.view.php') ?>

    </header>
    <main class="container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2 px-4">
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="text-red-600"><?php echo $_SESSION['error']; ?></div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>

                <form method="POST" action="#" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                        <input name="address" id="address" type="text"
                            class="font-belle shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Note</label>
                        <textarea name="note" id="note"
                            class="font-belle shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <button type="submit" name="submit"
                        class="bg-custom bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save
                        Order</button>
                </form>

                <form id="orderForm" class="mb-8">
                    <div class="flex items-center mb-4">
                        <label for="pizzaSelect" class="mr-4 font-bold">Select Pizza:</label>
                        <select id="pizzaSelect" onchange="updatePrice()" class="border rounded p-2">
                            <?php foreach ($pizzas as $pizza): ?>
                                <option value="<?php echo htmlspecialchars($pizza['PizzaID']); ?>"
                                    data-price="<?php echo htmlspecialchars($pizza['Price']); ?>">
                                    <?php echo htmlspecialchars($pizza['PizzaName']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="quantity" class="mr-4 font-bold">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="0" oninput="updateTotalPrice()"
                            class="border rounded p-2 w-24">
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="price" class="mr-4 font-bold">Pizza Price:</label>
                        <input type="number" readonly id="price"
                            value="<?php echo isset($pizzas[0]) ? htmlspecialchars($pizzas[0]["Price"]) : ''; ?>"
                            class="border rounded p-2 w-24">
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="totalPrice" class="mr-4 font-bold">Total Price:</label>
                        <input type="number" readonly id="totalPrice" class="border rounded p-2 w-24">
                    </div>
                    <button type="button" onclick="addToTable()"
                        class="bg-custom hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to
                        Table</button>
                </form>

                <table id="orderTable" class="max-w-500 border-collapse border border-gray-300 w-full bg-gray-200">
                    <thead>
                        <tr class="bg-gray-200 bg-custom" style="color: white">
                            <th class="border border-gray-300 px-4 py-2 text-left">Pizza</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Quantity</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Total Price</th>
                        </tr>
                    </thead class="bg-custom-lighter">
                    <tbody>
                        <!-- Table body content goes here -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>

   <script src="../js/orderScript.js"></script>
</body>

</html>