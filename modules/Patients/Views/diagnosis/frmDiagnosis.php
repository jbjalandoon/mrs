    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-6 offset-md-3">
    <h1>Adding Diagnosis</h1>
    <hr>
  </div>
</div>
<form action="<?= base_url() ?>diagnosis/<?= isset($rec) ? 'edit/'.$rec['id'].'/'.$profile[0]['id'] : 'add/'.$profile[0]['id'] ?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="condition_id">Condition</label>
        <select id="condition_id" class="form-control <?= isset($errors['condition_id']) ? 'is-invalid':'is-valid' ?>" name="condition_id">
          <option value="1" disabled selected>-- Choose a Condition --</option>
          <?php foreach ($conditions as $condition): ?>
              <option value="<?=$condition['id']?>" <?=isset($rec['condition_id']) ? $rec['condition_id'] == $condition['id'] ? 'selected' : '' : ''?>><?=ucwords($condition['name'])?></option>
          <?php endforeach; ?>
        </select>
          <?php if(isset($errors['condition_id'])): ?>
            <div class="invalid-feedback">
              <?= $errors['condition_id'] ?>
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="">Diagnosis Type</label>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="primary" name="diagnosis_type_id" class="custom-control-input" value="1" checked>
          <label class="custom-control-label" for="primary">Primary</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="secondary" name="diagnosis_type_id" value="2" class="custom-control-input" <?=isset($rec['diagnosis_type_id']) ? $rec['diagnosis_type_id'] == 2 ? 'checked': '' : ''?>>
          <label class="custom-control-label" for="secondary">Secondary</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="">Confirmed or Suspect</label>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="confirmed" name="is_confirmed" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="confirmed">Confirmed</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="suspect" name="is_confirmed" value="2" class="custom-control-input" <?=isset($rec['is_confirmed']) ? $rec['is_confirmed'] == 2 ? 'checked': '' : ''?>>
          <label class="custom-control-label" for="suspect">Suspect</label>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="visit_id" value="<?=$visit_id?>">
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary float-right">Submit</button>
  </div>
</form>
