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
<nav class="navbar navbar-expand-lg bg-body-tertiary d-flex p-4">
  <div class="container-fluid d-flex justify-content-center">
      <a class="navbar-brand" href="#"><img src="<?=base_url('content/icons/lumenleaf2.png');?>"></a>
    </div>
    <a href="<?=base_url('login')?>">
        <button class="btn button-login shadow"><?=esc($info)?></button>
    </a>
</nav>
