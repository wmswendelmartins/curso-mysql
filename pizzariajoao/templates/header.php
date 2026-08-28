<?php
    include("process/conn.php");

    $msg = "";

    if(isset($_SESSION["msg"])) {
        
        $msg = $_SESSION["msg"];
        $status = $_SESSION["status"];

        $_SESSION["msg"] = "";
        $_SESSION["status"] = "";

    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria João</title>
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- App CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class= "navbar navbar-expand-lg">
            <a href= "#home" class= "navbar-brand">
               <img src= "img/pizza.svg" alt= "Pizzaria João" id= "brand-logo">
            </a>
            <div class= "collapse navbar-collapse" id= "navbarNav">
                <ul class= "navbar-nav">
                    <li class="nav-item active">
                    <a href="#home" class="nav-link">
                        <?= isset($navMessage) ? $navMessage : "Peça sua pizza" ?>
                    </a>
                </li>
                </ul>    
            </div>
        </nav>
    </header>
    <?php if($msg != ""): ?>
    <div class= "alert alert-<?= $status?>">
        <p><?= $msg ?></p>
    </div>
    <?php endif; ?>