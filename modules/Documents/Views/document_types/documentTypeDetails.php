<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Type Name</span>
        <span class="field-value"><?= ucwords($document_type[0]['document_type_code'].' - '.$document_type[0]['document_type_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucwords($document_type[0]['description']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('document_types','edit-document-type', $permissions, $document_type[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
