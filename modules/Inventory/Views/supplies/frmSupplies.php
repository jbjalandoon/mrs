 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>supplies/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="name">Supply Name</label>
            <input name="name" type="text" value="<?= isset($rec['name']) ? $rec['name'] : set_value('name') ?>" class="form-control <?= isset($errors['name']) ? 'is-invalid':'is-valid' ?>" id="name" placeholder="Supply Name">
              <?php if(isset($errors['name'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <!-- <label for="function_id">Landing Page</label>
            <input type="hidden" value="1" name="function_id"> -->
            <label for="supply_type_id">Supply Type</label>
            <select name="supply_type_id" class="form-control <?= isset($errors['supply_type_id']) ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['supply_type_id'])): ?>
                <option value="<?= $rec['supply_type_id'] ?>"><?= ucwords(name_on_system($rec['supply_type_id'], $supply_types, 'supply_types')) ?></option>
              <?php else: ?>
                <option value="">Supply Types</option>
              <?php endif; ?>

              <?php foreach($supply_types as $supply_type): ?>
                <option value="<?= $supply_type['id'] ?>"><?= ucwords($supply_type['type_name']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if(isset($errors['supply_type_id'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['supply_type_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Supply Description</label>
            <textarea name="description" type="text" class="form-control <?= isset($errors['description']) ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
              <?php if(isset($errors['description'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['description'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input name="quantity" type="number" value="<?= isset($rec['quantity']) ? $rec['quantity'] : set_value('quantity') ?>" class="form-control <?= isset($errors['quantity']) ? 'is-invalid':'is-valid' ?>" id="quantity" placeholder="Quantity">
              <?php if(isset($errors['quantity'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['quantity'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="unit">Unit</label>
            <input name="unit" type="text" value="<?= isset($rec['unit']) ? $rec['unit'] : set_value('unit') ?>" class="form-control <?= isset($errors['unit']) ? 'is-invalid':'is-valid' ?>" id="unit" placeholder="Unit">
              <?php if(isset($errors['unit'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['unit'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
