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
    <form action="<?= base_url() ?>document-types/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="document_type_code">Document Type Code</label>
            <input name="document_type_code" type="text" value="<?= isset($rec['document_type_code']) ? $rec['document_type_code'] : set_value('document_type_code') ?>" class="form-control <?= $errors['document_type_code'] ? 'is-invalid':'is-valid' ?>" id="document_type_code" placeholder="Document Type Code">
              <?php if($errors['document_type_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['document_type_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="document_type_name">Department Name</label>
            <input name="document_type_name" type="text" value="<?= isset($rec['document_type_name']) ? $rec['document_type_name'] : set_value('document_type_name') ?>" class="form-control <?= $errors['document_type_name'] ? 'is-invalid':'is-valid' ?>" id="document_type_name" placeholder="Document Type Name">
              <?php if($errors['document_type_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['document_type_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Document Type Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Role Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
            <?php if($errors['description']): ?>
                <div class="invalid-feedback">
                  <?= $errors['description'] ?>
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
