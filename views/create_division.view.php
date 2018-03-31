<?php require 'header.php' ?>
<div class="container">
  <div class="card mt-3">
    <div class="card-header">
      <h2>create division </h2>
    </div>
      <div class="card-body">
          <form action="" method="post">
            
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="country_id">Country</label>
              <select name="country_id" id="country_id" class="form-control">
                <?php foreach ($countries as $country): ?>
                  <option value="<?php echo $country->id ?>"><?= $country->name ?></option>
                <?php endforeach ?>
              </select>
          </div>
          <div class="form-group">
            <button class="btn btn-info" type="submit">Add Division</button>
          </div>
        </form>
    </div>
  </div>
</div>
<?php require 'footer.php'?>
