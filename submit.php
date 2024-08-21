<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $payment_method = $_POST['payment_method'];
    $address = $_POST['address'];

    $conn = new mysqli('localhost', 'root', '', 'user');
    if ($conn->connect_error) {
        die('Connect Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO form (Name, Number, Date, Time, Payment_method, Address) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $number, $date, $time, $payment_method, $address);
        $stmt->execute();
        echo "Thanks";
        $stmt->close();
        $conn->close();
    }
?>
