<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Academic Program Name</span>
        <span class="field-value"><?= ucfirst($academic_program[0]['program_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($academic_program[0]['description']) ?></span>
      </div>
    </div>
    <?php //if(strtolower($academic_program[0]['program_head_id']) != 1): ?>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Program Head</span>
        <span class="field-value"><?= ucwords(name_on_system($academic_program[0]['program_head_id'], $users, 'users')) ?></span>
      </div>
    </div>
  <?php // endif; ?>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('academic_programs','edit-program', $permissions, $academic_program[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
