<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=esc($title);?></title>
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/home.css')?>">
</head>
<body>

<!-- As a heading -->
<div class="container-holder min-vh-100">
     <header class="headling rounded-bottom">
        <nav class="navbar navbar-expand-lg bg-transparent p-0">
           <div class="container-fluid d-flex"  style="backdrop-filter: blur(10px)">
               <a class="navbar-brand text-light" href="<?=base_url('/')?>">
                    <?=esc($navbrand)?>
                </a>
                <a class="btn button-nav shadow" href="<?=base_url('login')?>">
                    <?=esc($info)?>
                </a>
        </nav>
</header>
        

    
