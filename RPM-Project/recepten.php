<?php
  // Get the HTML head section
  include("inc/header.php");

  include("inc/navbar.php");

  $random = rand(1,100);
?>

<!-- Start main container -->
<div class="main">
  <h3 class="text-uppercase">Recepten</h3>
<!-- Ontbit -->
  <div class="custom-container">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="recipe-container container-ontbijt">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Ontbijt</b>
            </br>
            Een heerlijk ontbijtje
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-ontbijt">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Ontbijt</b>
            </br>
            Een heerlijk ontbijtje
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-ontbijt">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Ontbijt</b>
            </br>
            Een heerlijk ontbijtje
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-secondary btn-recepten">Zie meer</button>
    </div>
  </div>
<!-- Lunch -->
  <div class="custom-container">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="recipe-container container-lunch">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Lunch</b>
            </br>
            Een heerlijke lunch
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-lunch">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Lunch</b>
            </br>
            Een heerlijke lunch
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-lunch">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Lunch</b>
            </br>
            Een heerlijke lunch
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-secondary btn-recepten">Zie meer</button>
    </div>
  </div>
<!-- Diner -->
  <div class="custom-container">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="recipe-container container-diner">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Diner</b>
            </br>
            Een prettige diner
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-diner">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Diner</b>
            </br>
            Een prettige diner
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-diner">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Diner</b>
            </br>
            Een prettige diner
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-secondary btn-recepten">Zie meer</button>
    </div>
  </div>
<!-- Dessert -->
  <div class="custom-container">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="recipe-container container-dessert">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Dessert</b>
            </br>
            Een heerlijke dessert
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-dessert">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Dessert</b>
            </br>
            Een heerlijke dessert
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-dessert">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Dessert</b>
            </br>
            Een heerlijke dessert
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-secondary btn-recepten">Zie meer</button>
    </div>
  </div>
<!-- Snacks -->
  <div class="custom-container">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="recipe-container container-snacks">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Snacks</b>
            </br>
            Een heerlijke snacks
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-snacks">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Snacks</b>
            </br>
            Een heerlijke snacks
          </div>
        </div>
        <div class="col-sm">
          <div class="recipe-container container-snacks">
            <img src="https://picsum.photos/400/250?random=<?php echo $random; ?>" class="rounded mx-auto d-block" alt="...">
            <b>Snacks</b>
            </br>
            Een heerlijke snacks
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-secondary btn-recepten">Zie meer</button>
  </div>
</div>

<?php
  // Get the HTML footer section
  include("inc/footer.php");
?>