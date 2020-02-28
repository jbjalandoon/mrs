<div class="row">
  <div class="col-md-6 offset-1">
    <div class="input-group">
     <input type="text" name="search_item" class="form-control" placeholder="Search for documents">
     <div class="input-group-append">
       <button class="btn btn-dark" type="button">
         <i class="fa fa-search"></i>
       </button>
     </div>
   </div>
  </div>
  <div class="col-md-4">
    <?php file_upload_link('upload-academic-document', $_SESSION['userPermmissions'], 'academic_document_upload', 'btn btn-info btn-block', 0) ?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Name</span>
        <span class="field-value">
          <a href="<?= base_url().'uploads/'.strtoupper($document[0]['document_type_code']).'/'.$document[0]['doc_attachment'] ?>" target="_blank"><i class="far fa-file-alt"></i> VIEW DOCUMENT</a>
          <?php echo strtoupper($document[0]['doc_name']) ?>
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucwords($document[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Type</span>
        <span class="field-value"><?= strtoupper($document[0]['document_type_code'].' - '.$document[0]['document_type_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Uploader</span>
        <span class="field-value"><?= strtoupper($document[0]['lastname'].', '.$document[0]['firstname']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('academic_documents','edit-academic-document', $permissions, $document[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
