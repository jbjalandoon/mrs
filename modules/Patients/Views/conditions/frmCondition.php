    </div>
  </div>
</div>
<br>
<br>
<form action="<?= base_url() ?>patient-conditions/<?= isset($rec) ? 'edit/'.$rec['id'].'/'.$profile[0]['id'] : 'add/'.$profile[0]['id'] ?>" method="post">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="condition_id">Condition</label>
        <select id="condition_id" class="form-control <?= isset($errors['condition_id']) ? 'is-invalid':'is-valid' ?>" name="condition_id">
          <option value="1" disabled selected>-- Choose a Condition --</option>
          <?php foreach ($conditions as $condition): ?>
              <option value="<?=$condition['id']?>" <?=$rec['condition_id'] == $condition['id'] ? 'selected' : ''?>><?=ucwords($condition['name'])?></option>
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
        <!-- <textarea name="description" class="form-control <?= isset($errors['description']) ? 'is-invalid':'is-valid' ?>" rows="8" cols="80"><?= isset($rec['description']) ? $rec['description'] : '' ?></textarea> -->
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="patient_condition_status" id="activeRadio" value="1" checked>
          <label class="form-check-label" for="activeRadio">Active</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="patient_condition_status" id="inactiveRadio" value="2" <?=isset($rec['patient_condition_status']) ? $rec['patient_condition_status'] == 2 ? 'checked': '' : ''?>>
          <label class="form-check-label" for="inactiveRadio">Inactive</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="patient_condition_status" id="historyOfRadio" value="3" <?=isset($rec['patient_condition_status']) ? $rec['patient_condition_status'] == 3 ? 'checked': '' : ''?>>
          <label class="form-check-label" for="historyOfRadio">History Of</label>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary float-right">Submit</button>
  </div>
</form>
