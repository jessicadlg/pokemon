<?php

include 'action.php';
include_once 'header.php';
?>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-3 bg-info p-4 rounded">
            <img src="<?= $vimagen; ?>" width="300" class="img-thumbnail">
        </div>
        <div class="col-md-6 mt-3 bg-info p-4 rounded">
            <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h2>
        <h4 class="text-light">Name : <?= $vnombre; ?></h4>
<h4 class="text-light">Email : <?= $vtipo; ?></h4>
<h4 class="text-light">Phone : <?= $vdescripcion; ?></h4>
        </div>
</div>
</div>
</body>