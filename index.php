<?php
use App\Autoload;
use App\Home;
require "class/Autoload.php";
Autoload::register();

$home = new Home();

include "inc/header.html";
?>
<body>
    <?php include"inc/navbar.html" ?>
    <div class="container-fluid bg-white p-5">
        <div class="container col col-lg-6 col-sm-12">
            <form action="#" id="searchForm" name="searchForm" autocomplete="off" method="POST">
                <div class="mb-3">
                    <label for="searchInput" class="form-label">Chercher une agence</label>
                    <div class="autocomplete">
                        <input type="text" class="form-control" id="searchInput" autocomplete="off" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Valider</button>
            </form>
            <?php $home->getAgencesName(); ?>
        </div>
    </div>

    <div class="container mt-3">
        <div class="p-2">
            <h5>Nos agences</h5>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <?php $home->getAgencesLink(); ?>
        </div>
    </div>

    <div class="container mt-3">
        <div class="p-2">
            <h5>Type de véhicule disponible</h5>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <?php $home->getVehicles(); ?>
        </div>
    </div>
</body>
<script src="inc/js/autocomplete.js"></script>
<script>
    autocomplete(document.getElementById("searchInput"), getAgenceList());
</script>
<?php
include "inc/footer.html";
?>