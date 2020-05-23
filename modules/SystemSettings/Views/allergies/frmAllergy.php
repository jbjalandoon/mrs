<br>
<div class="row">
  <div class="col-md-6 offset-md-3">
    <h1>Adding Allergy</h1>
    <hr>
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
        <label for="allergy_type_id">Allergy Type</label>
        <select class="form-control <?= isset($errors['allergy_type_id']) ? 'is-invalid' : 'is-valid'?>" name="allergy_type_id" id="allergy_type_id">
          <?php foreach ($allergyTypes as $allergyType): ?>
            <option value="<?=$allergyType['id']?>" <?= $rec['allergy_type_id'] == $allergyType['id'] ? 'selected' : ''?>><?=ucwords($allergyType['name'])?></option>
          <?php endforeach; ?>
        </select>
        <?php if (isset($errors['allergy_type_id'])): ?>
          <?= $errors['allergy_type_id']?>
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
