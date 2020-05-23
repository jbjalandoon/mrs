 <div class="row">
   <div class="col-md-4">
     <h1> <?=$function_title?> </h1>
   </div>
   <div class="col-md-2 offset-md-6">
    <?php user_add_link('patients', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-sm table-striped table-bordered index-table">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Birthdate</th>
        <th>Contact no.</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($patients as $patient): ?>
      <tr id="<?php echo $patient['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($patient['last_name'].', ' . $patient['first_name'] . ' ' . $patient['extension_name'] . ' ' . $patient['middle_name']) ?></td>
        <td><?= ucwords($patient['gender']) ?></td>
        <td><?= ucwords($patient['birthdate']) ?></td>
        <td><?= ucwords($patient['cellphone_no']) ?></td>
        <td class="text-center">
          <?php
            users_action('patients', $_SESSION['userPermmissions'], $patient['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>
