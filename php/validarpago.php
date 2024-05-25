<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paymentAmount = isset($_POST['paymentAmount']) ? floatval($_POST['paymentAmount']) : 0;
    $totalPrice = isset($_SESSION['precio']) ? floatval($_SESSION['precio']) : 0;

    if ($paymentAmount === $totalPrice) {
        // Redirigir a la página cursosgratis.html si el pago es correcto
        header("Location: cursosgratis.html");
        exit();
    } else {
        // Si el monto ingresado no coincide con el total a pagar, mostrar un mensaje de error
        echo "<script>alert('El monto ingresado no coincide con el total a pagar. Por favor, inténtelo de nuevo.');</script>";
    }
}
?>
