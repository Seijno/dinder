<?php include "header.php"; ?>
<div class="py-5"></div>
<h3>welkom <?php getUsername(); ?>!</h3>
<session>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img width=100 height=300 src="./img/watzijnwij.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
            <h4>voorbeeld</h4>
            </div>
            </div>
            <?php slider(); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
        </div>
        <div class="py-2"></div>
        <a href="adddog.php"><button type="button" class="btn btn-warning">Honden toevoegen</button></a>
    </div>
<div class="py-2"></div>
</session>
<?php include "footer.php"; ?>