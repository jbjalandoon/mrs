</div>
</div>
</div>
<br>
 <div class="row">

   <!--<div class="col-md-10">
      search here
   </div>-->
   <div class="col-md-2 offset-md-10">
    <?php patient_detail_add_link('attachments', $_SESSION['userPermmissions'], $profile[0]['id']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-sm table-striped table-bordered index-table">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Name</th>
        <th>File</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($attachments as $attachment): ?>
      <tr id="<?php echo $attachment['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($attachment['name']) ?></td>
        <td><?= ucwords($attachment['file']) ?></td>
        <td class="text-center">
          <?php
            users_action('attachments', $_SESSION['userPermmissions'], $attachment['id'], $profile[0]['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>
