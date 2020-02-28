 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('areas', $_SESSION['userPermmissions']) ?>
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
        <th>Area Head</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($areas as $area): ?>
      <tr id="<?php echo $area['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($area['area_code'] .' - '. $area['area_name']) ?></td>
        <td><?= ucwords($area['description']) ?></td>
        <td><?= ucwords($area['firstname'].' '.$area['lastname']) ?></td>
        <td class="text-center">
          <?php
            users_action('areas', $_SESSION['userPermmissions'], $area['id']);
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
    <?php paginater('areas', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
