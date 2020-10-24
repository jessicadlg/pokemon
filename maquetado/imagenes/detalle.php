<?php

include 'action.php';
include_once 'header.php';
?>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-3 bg-info p-4 rounded">
            <img src='recursos/imagenes/<?= $vimagen; ?>.png' width="400">
        </div>
        <div class="col-md-6 mt-3  p-2 rounded">
            <h2 class="text-center text-dark aling-middle ">
                <img src='recursos/imagenes/<?= $vtipo; ?>.png' width="40"> ID :<?= $vid; ?> <?= $vnombre; ?></h2>
            <h4 class="mt-2"><?= $vdescripcion; ?></h4>
        </div>
</div>
</div>
</body>