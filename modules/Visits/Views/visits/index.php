 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('roles', $_SESSION['userPermmissions']) ?>
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
        <th>Description</th>
        <th>Landing Page</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($visits as $visit): ?>
      <tr id="<?php echo $visit['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($visit['first_name'] . ' ' . $visit['last_name']) ?></td>
        <td><?= $visit['gender'] == 'm' ? 'Male':'Female' ?></td>
        <td><?= date('F d, Y', strtotime($visit['start_date'])) ?></td>
        <td class="text-center">
          <?php
            patient_detail_link('patients', 'show-patient', $_SESSION['userPermmissions'], $visit['patient_id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>
