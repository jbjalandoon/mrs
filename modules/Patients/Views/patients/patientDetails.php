<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Last Name</span>
        <span class="field-value"><?= ucfirst($patient[0]['last_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">First Name</span>
        <span class="field-value"><?= ucfirst($patient[0]['first_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Middle Name</span>
        <span class="field-value"><?= ucfirst($patient[0]['middle_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Extension Name</span>
        <span class="field-value"><?= ucfirst($patient[0]['extension_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Birthdate</span>
        <span class="field-value"><?= ucfirst($patient[0]['birthdate']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?= ucfirst($patient[0]['gender']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Contact No.</span>
        <span class="field-value"><?= ucfirst($patient[0]['cellphone_no']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Address</span>
        <span class="field-value"><?= ucfirst($patient[0]['address']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">City</span>
        <span class="field-value"><?= ucfirst($patient[0]['city']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Province</span>
        <span class="field-value"><?= ucfirst($patient[0]['province']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Postal</span>
        <span class="field-value"><?= ucfirst($patient[0]['postal']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Relative Name</span>
        <span class="field-value"><?= ucfirst($patient[0]['relative_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Relative Contact</span>
        <span class="field-value"><?= ucfirst($patient[0]['relative_contact']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('patients','edit-patient', $permissions, $patient[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
