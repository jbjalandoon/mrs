<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Department Name</span>
        <span class="field-value"><?= ucfirst($department[0]['department_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($department[0]['description']) ?></span>
      </div>
    </div>
    <?php if(strtolower($department[0]['dept_head_id']) != 1): ?>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Department Head</span>
        <span class="field-value"><?= ucwords(name_on_system($department[0]['dept_head_id'], $users, 'users')) ?></span>
      </div>
    </div>
  <?php endif; ?>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('departments','edit-department', $permissions, $department[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
