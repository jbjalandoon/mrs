 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<form action="<?= base_url() ?>patient-relatives/<?= isset($rec) ? 'edit/'.$rec['id'].'/'.$profile[0]['id'] : 'add/'.$profile[0]['id'] ?>" method="post">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="name">Name</label>
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
        <label for="contact_no">Contact Number</label>
        <input name="contact_no" type="text" value="<?= isset($rec['contact_no']) ? $rec['contact_no'] : '' ?>" class="form-control <?= isset($errors['contact_no']) ? 'is-invalid':'is-valid' ?>" id="contact_no" placeholder="Contact Number">
        <?php if(isset($errors['contact_no'])): ?>
          <div class="invalid-feedback">
            <?= $errors['contact_no'] ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="relation">Relation</label>
        <select name="relation" type="text" class="form-control <?= isset($errors['relation']) ? 'is-invalid':'is-valid' ?>" id="relation">
          <option value="mother">Mother</option>
          <option value="father">Father</option>
          <option value="etc">Etc...</option>
        </select>
        <?php if(isset($errors['relation'])): ?>
          <div class="invalid-feedback">
            <?= $errors['relation'] ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="address">Address</label>
        <textarea name="address" class="form-control <?= isset($errors['address']) ? 'is-invalid':'is-valid' ?>" rows="8" cols="80"><?= isset($rec['address']) ? $rec['address'] : '' ?></textarea>
        <?php if(isset($errors['address'])): ?>
          <div class="invalid-feedback">
            <?= $errors['address'] ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary float-right">Submit</button>
  </div>
</form>
