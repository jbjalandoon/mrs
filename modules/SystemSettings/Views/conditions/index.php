 <div class="row">
   <!--<div class="col-md-10">
      search here
   </div>-->
   <div class="col-md-2 offset-md-10">
    <?php user_add_link('conditions', $_SESSION['userPermmissions']) ?>
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
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($conditions)): ?>
      <?php else: ?>
        <?php $cnt = 1; ?>
        <?php foreach($conditions as $condition): ?>
        <tr id="<?php echo $condition['id']; ?>">
          <th scope="row"><?= $cnt++ ?></th>
          <td><?= ucwords($condition['name']) ?></td>
          <td><?= ucwords($condition['description']) ?></td>
          <td class="text-center">
            <?php
              users_action('conditions', $_SESSION['userPermmissions'], $condition['id']);
            ?>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
 </div>
<hr>
