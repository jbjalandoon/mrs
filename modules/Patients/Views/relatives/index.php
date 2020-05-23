    </div>
  </div>
</div>
 <br>
 <div class="row">
   <div class="col-md-4">
      <h1><?=$function_title?></h1>
   </div>
   <div class="col-md-3 offset-md-5">
    <?php patient_detail_add_link('patient_relatives', $_SESSION['userPermmissions'], $profile[0]['id']) ?>
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
        <th>Relation</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($relatives as $relative): ?>
      <tr id="<?php echo $relative['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($relative['name']) ?></td>
        <td><?= ucwords($relative['relation']) ?></td>
        <td><?= ucwords($relative['contact_no']) ?></td>
        <td><?= ucwords($relative['address']) ?></td>
        <td class="text-center">
          <?php
            users_action('patient_relatives', $_SESSION['userPermmissions'], $relative['id'], $profile[0]['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>
