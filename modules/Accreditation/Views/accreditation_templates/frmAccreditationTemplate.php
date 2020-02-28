 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">

   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>accreditation-templates/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="template_code">Accreditation Template Code</label>
            <input name="template_code" type="text" value="<?= isset($rec['template_code']) ? $rec['template_code'] : set_value('template_code') ?>" class="form-control <?= isset($errors['template_code']) ? 'is-invalid':'is-valid' ?>" id="template_code" placeholder="Accreditation Template Code">
              <?php if(isset($errors['template_code'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['template_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="template_name">Accreditation Template Name</label>
            <input name="template_name" type="text" value="<?= isset($rec['template_name']) ? $rec['template_name'] : set_value('template_name') ?>" class="form-control <?= isset($errors['template_name']) ? 'is-invalid':'is-valid' ?>" id="template_name" placeholder="Accreditation Template Name">
              <?php if(isset($errors['template_name'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['template_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Accreditation Template Description</label>
            <textarea name="description" type="text" class="form-control <?= isset($errors['description']) ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Accreditation Template Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
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
            <label for="accreditation_level_id">Accreditation Level</label>
            <select name="accreditation_level_id" class="form-control <?= isset($errors['accreditation_level_id']) ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['accreditation_level_id'])): ?>
                <option value="<?= $rec['accreditation_level_id'] ?>"><?= strtoupper(name_on_system($rec['accreditation_level_id'], $accreditation_levels, 'accreditation_levels')) ?></option>
              <?php else: ?>
                <option value="">Accreditation Level</option>
              <?php endif; ?>
              <?php foreach($accreditation_levels as $accreditation_level): ?>
                <option value="<?= $accreditation_level['id'] ?>"><?= strtoupper($accreditation_level['accreditation_level']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if(isset($errors['accreditation_level_id'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['accreditation_level_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="academic_program_id">Academic Program</label>
            <select name="academic_program_id" class="form-control <?= isset($errors['academic_program_id']) ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['academic_program_id'])): ?>
                <option value="<?= $rec['academic_program_id'] ?>"><?= strtoupper(name_on_system($rec['academic_program_id'], $academic_programs, 'academic_programs')) ?></option>
              <?php else: ?>
                <option value="">Academic Program</option>
              <?php endif; ?>
              <?php foreach($academic_programs as $academic_program): ?>
                <option value="<?= $academic_program['id'] ?>"><?= strtoupper($academic_program['program_name']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if(isset($errors['academic_program_id'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['academic_program_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="area_id">Area</label>
            <select name="area_id" class="form-control <?= isset($errors['area_id']) ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['area_id'])): ?>
                <option value="<?= $rec['area_id'] ?>"><?= strtoupper(name_on_system($rec['area_id'], $areas, 'areas')) ?></option>
              <?php else: ?>
                <option value="">Area</option>
              <?php endif; ?>
              <?php foreach($areas as $area): ?>
                <option value="<?= $area['id'] ?>"><?= strtoupper($area['area_code'].' - '.$area['area_name']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if(isset($errors['area_id'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['area_id'] ?>
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
