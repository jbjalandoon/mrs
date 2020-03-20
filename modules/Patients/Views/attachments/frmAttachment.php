    </div>
  </div>
</div>
<br>
<form action="<?= base_url() ?>attachments/<?= isset($rec) ? 'edit/'.$rec['id'].'/'.$profile[0]['id'] : 'add/'.$profile[0]['id'] ?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="name">File Name</label>
        <input name="name" type="text" value="<?= isset($rec['name']) ? $rec['name']: ''?>" class="form-control <?= isset($errors['name']) ? 'is-invalid':'is-valid' ?>" id="name" placeholder="File Name">
        <?php if(isset($errors['name'])): ?>
          <div class="invalid-feedback">
            <?= $errors['name'] ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="file">File Attachment</label>
        <input name="file" type="file" class="form-control <?= isset($errors['file']) ? 'is-invalid':'is-valid' ?>" id="file" placeholder="File Attachment">
          <?php if(isset($errors['file'])): ?>
            <div class="invalid-feedback">
              <?= $errors['file'] ?>
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div>
  <input type="hidden" name="visit_id" value="<?=$visit_id?>">
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary float-right">Submit</button>
  </div>
</form>
