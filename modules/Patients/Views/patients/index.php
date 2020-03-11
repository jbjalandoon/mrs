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
    <?php user_add_link('patients', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
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
