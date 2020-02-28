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
    <form action="<?= base_url() ?>academic-programs/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="program_name">Program Name</label>
            <input name="program_name" type="text" value="<?= isset($rec['program_name']) ? $rec['program_name'] : set_value('program_name') ?>" class="form-control <?= isset($errors['program_name']) ? 'is-invalid':'is-valid' ?>" id="program_name" placeholder="Program Name">
              <?php if(isset($errors['program_name'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['program_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Program Description</label>
            <textarea name="description" type="text" class="form-control <?= isset($errors['description']) ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Program Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
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
            <label for="program_head_id">Department Head</label>
            <select name="program_head_id" class="form-control <?= isset($errors['program_head_id']) ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['program_head_id'])): ?>
                <option value="<?= $rec['program_head_id'] ?>"><?= ucwords(name_on_system($rec['program_head_id'], $users, 'users')) ?></option>
              <?php else: ?>
                <option value="">Select Program Head</option>
              <?php endif; ?>

              <?php foreach($users as $user): ?>
                <option value="<?= $user['id'] ?>"><?= ucwords($user['firstname'].' '.$user['lastname']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if(isset($errors['program_head_id'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['program_head_id'] ?>
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
