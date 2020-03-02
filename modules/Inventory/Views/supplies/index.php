 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('supplies', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Supply Name</th>
        <th>Supply Type</th>
        <th>Quantity</th>
        <th>Unit</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($supplies as $supply): ?>
      <tr id="<?php echo $supply['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($supply['name']) ?></td>
        <td><?= ucwords($supply['type_name']) ?></td>
        <td><?= ucwords($supply['quantity']) ?></td>
        <td><?= ucwords($supply['unit']) ?></td>
        <td class="text-center">
          <?php
            users_action('supplies', $_SESSION['userPermmissions'], $supply['id']);
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
    <?php paginater('supplies', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
