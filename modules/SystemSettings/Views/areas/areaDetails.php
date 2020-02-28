<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Area Name</span>
        <span class="field-value"><?= ucfirst($area[0]['area_code'].' - '.$area[0]['area_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($area[0]['description']) ?></span>
      </div>
    </div>
    <?php if(strtolower($area[0]['area_head_id']) != 1): ?>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Area Head</span>
        <span class="field-value"><?= ucwords(name_on_system($area[0]['area_head_id'], $users, 'users')) ?></span>
      </div>
    </div>
  <?php endif; ?>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('departments','edit-department', $permissions, $area[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
