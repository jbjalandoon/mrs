 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('departments', $_SESSION['userPermmissions']) ?>
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
        <th>Department Head</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($departments as $department): ?>
      <tr id="<?php echo $department['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($department['department_name']) ?></td>
        <td><?= ucwords($department['description']) ?></td>
        <td><?= ucwords($department['firstname'].' '.$department['lastname']) ?></td>
        <td class="text-center">
          <?php
            users_action('departments', $_SESSION['userPermmissions'], $department['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>

<div class="row">
  <div class="col-md-6 offset-md-6">
    <?php paginater('departments', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
