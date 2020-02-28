 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">

   </div>
 </div>
 <div class="row">
   <div class="col-md-6 offset-md-3">
     <?php if(isset($_SESSION['user_academic_program_id']) == 0): ?>
        <div class="alert alert-warning" role="alert">
          <big>Academic Program for user <?= strtoupper($_SESSION['uname']) ?> not set. <br>
          Ask the system administrator to set it for you if you need to.</big>
        </div>
     <?php endif; ?>
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>academic-documents/<?= isset($rec) ? 'edit/'.$rec['id'] : 'upload-academic-document' ?>" method="post" enctype="multipart/form-data">
      <!-- <fieldset <?= isset($_SESSION['user_academic_program_id']) == 0 ? 'disabled="disabled"': ''?>> -->
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="doc_name">Name of the Document</label>
            <input name="doc_name" type="text" value="<?= isset($rec['doc_name']) ? $rec['doc_name'] : set_value('doc_name') ?>" class="form-control <?= isset($errors['doc_name']) ? 'is-invalid':'is-valid' ?>" id="doc_name" placeholder="Document Name">
              <?php if(isset($errors['doc_name'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['doc_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="doc_attachment">File Attachment</label>
            <input name="doc_attachment" type="file" value="<?= isset($rec['doc_attachment']) ? $rec['doc_attachment'] : set_value('doc_attachment') ?>" class="form-control <?= isset($errors['doc_attachment']) ? 'is-invalid':'is-valid' ?>" id="doc_attachment" placeholder="File Attachment">
              <?php if(isset($errors['doc_attachment'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['doc_attachment'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="document_type_id">Document Type</label>
            <select name="document_type_id" class="form-control <?= isset($errors['document_type_id']) ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['document_type_id'])): ?>
                <option value="<?= $rec['document_type_id'] ?>"><?= strtoupper(name_on_system($rec['document_type_id'], $document_types, 'document_types')) ?></option>
              <?php else: ?>
                <option value="">Select Document Type of the File</option>
              <?php endif; ?>

              <?php foreach($document_types as $document_type): ?>
                <option value="<?= $document_type['id'] ?>"><?= strtoupper($document_type['document_type_code'].' - '.$document_type['document_type_name']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if(isset($errors['document_type_id'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['document_type_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Document Description</label>
            <textarea name="description" type="text" class="form-control <?= isset($errors['description']) ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Document Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
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
          <button type="submit" class="btn btn-primary float-right">Upload</button>
        </div>
      </div>
      <!-- </fieldset> -->
    </form>
    <p style="clear: both"></p>
  </div>
</div>
