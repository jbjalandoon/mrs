<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Name</span>
        <span class="field-value"><?= ucfirst($supplies[0]['name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Supply Type</span>
        <span class="field-value"><?= ucwords(name_on_system($supplies[0]['supply_type_id'], $supply_types, 'supply_types')) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($supplies[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Quantity</span>
        <span class="field-value"><?= ucfirst($supplies[0]['quantity']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Unit</span>
        <span class="field-value"><?= ucfirst($supplies[0]['unit']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('supplies','edit-supplies', $permissions, $supplies[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
