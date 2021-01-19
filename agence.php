<?php
use App\Autoload;
use App\Agence;
require "class/Autoload.php";
Autoload::register();

if (isset($_GET['id'])) {
    $agence = new Agence($_GET['id']);
} else {
    header("location: index.php");
}

include "inc/header.html";
?>
<body>
    <?php include "inc/navbar.html" ?>

    <div class="container text-center col-lg-12 col-sm-12 mt-5">
        <h4><?= $agence->getName() ?></h4>
        <p><?= $agence->getAddress() ?></p>
    </div>

    <div class="container text-center">
        <div style="font-size: 12px">
            0<?= $agence->getTelephone() . " - " . $agence->getEmail() ?>
        </div>
    </div>

    <div class="container mt-3">
        <div class="p-2">
            <h5>Véhicules disponible pour l'agence <?= $agence->getName()?> </h5>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <div>etc</div>
        </div>
    </div>

</body>
<?php
include "inc/footer.html";
?>