<?php require 'header.php' ?>
<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>All countries</h2>
    </div>
    <div class="card-body">
      <?php foreach ($countries as $country): ?>
        <div class="card my-2">
          <div class="card-header">
            <h2>
              <?php echo $country->name ?>  
            </h2>
          </div>
          <div class="card-body">
            <?php foreach ($country->divisions as $division): ?>
                <li><?php echo $division->name ?></li>
            <?php endforeach ?>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
<?php require 'footer.php'?>
