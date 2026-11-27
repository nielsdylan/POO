<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Fernwick — Houseplants, Grown Well</title>
<meta name="description" content="Fernwick is a free HTML ecommerce template for a plant shop — working cart, product filters, product detail page and care guides. No framework, no build step." />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600;700&family=Sometype+Mono:wght@400;500&display=swap" rel="stylesheet" />
<link rel="preconnect" href="https://images.unsplash.com" crossorigin />

<!-- <link rel="stylesheet" href="./../assets/css/tokens.css" /> -->
<link rel="stylesheet" href="./assets/css/tokens.css" />
<!-- <link rel="stylesheet" href="./../assets/css/shop.css" /> -->
<link rel="stylesheet" href="./assets/css/shop.css" />
</head>
<body>


<?php include __DIR__ . '/../layouts/header.php'; ?>
<!-- Aquí se inyectará el <main> de cada vista -->
    <?php 
        if (isset($vista) && file_exists($vista)) {
            include $vista;
        } else {
            include __DIR__ . '/../views/home.php';
        }
    ?>


<?php include __DIR__ . '/../layouts/footer.php'; ?>
<!-- ===================== Cart drawer ===================== -->
<?php include __DIR__ . '/../layouts/showCart.php'; ?>
<?php include __DIR__ . '/../layouts/js.php'; ?>



</body>
</html>
