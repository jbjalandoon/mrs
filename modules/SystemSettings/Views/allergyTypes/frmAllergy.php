 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<form action="<?= base_url() ?>allergies/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="name">Allergy Name</label>
        <input name="name" type="text" value="<?= isset($rec['name']) ? $rec['name'] : '' ?>" class="form-control <?= isset($errors['name']) ? 'is-invalid':'is-valid' ?>" id="name" placeholder="Name">
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
        <label for="description">Description</label>
        <textarea name="description" class="form-control <?= isset($errors['description']) ? 'is-invalid':'is-valid' ?>" rows="8" cols="80"><?= isset($rec['description']) ? $rec['description'] : '' ?></textarea>
        <?php if (isset($errors['description'])): ?>
          <div class="invalid-feedback">
            <?= $errors['description'] ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary float-right">Submit</button>
  </div>
</form>
