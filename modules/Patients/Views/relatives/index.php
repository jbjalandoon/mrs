 <div class="row">
   <div class="col-md-6 offset-0">
     <div class="input-group">
      <input type="text" name="search_item" class="form-control" placeholder="Search Students here">
      <div class="input-group-append">
        <button class="btn btn-dark" type="button">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
   </div>
   <!--<div class="col-md-10">
      search here
   </div>-->
   <div class="col-md-2 offset-md-4">
    <?php patient_detail_add_link('patient_relatives', $_SESSION['userPermmissions'], $profile[0]['id']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
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
