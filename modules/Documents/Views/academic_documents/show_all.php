 <div class="row">
   <div class="col-md-12">
     <div class="input-group">
      <input type="text" name="search_item" class="form-control" placeholder="Search for documents">
      <div class="input-group-append">
        <button class="btn btn-dark" type="button">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>Document Name</th>
      </tr>
    </thead>
    <tbody>
      <form>
        <?php $cnt = 1; ?>
        <?php if (isset($academic_documents) && count($academic_documents) != 0): ?>
          <?php foreach($academic_documents as $academic_document): ?>
            <tr id="<?php echo $academic_document['id']; ?>">
              <td>
                <input type="checkbox" name="academic_document_id" value="<?= $academic_document['id'] ?>">
                <?php echo strtoupper($academic_document['doc_name']) ?>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
  </table>
 </div>
<div class="row">
  <div class="col-md-6 offset-md-6">
    <?php paginater('document_types', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
