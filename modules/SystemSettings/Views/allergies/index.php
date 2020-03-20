 <div class="row">
   <div class="col-md-2 offset-md-10">
    <?php user_add_link('allergies', $_SESSION['userPermmissions']) ?>
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
        <th>Allergy Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($allergies)): ?>
      <?php else: ?>
        <?php $cnt = 1; ?>
        <?php foreach($allergies as $allergy): ?>
        <tr id="<?php echo $allergy['id']; ?>">
          <th scope="row"><?= $cnt++ ?></th>
          <td><?= ucwords($allergy['name']) ?></td>
          <td><?= ucwords($allergy['description']) ?></td>
          <td><?= ucwords($allergy['type']) ?></td>
          <td class="text-center">
            <?php
              users_action('allergies', $_SESSION['userPermmissions'], $allergy['id']);
            ?>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
 </div>
<hr>
