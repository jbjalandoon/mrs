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
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($allergyTypes)): ?>
      <?php else: ?>
        <?php $cnt = 1; ?>
        <?php foreach($allergyTypes as $allergyType): ?>
        <tr id="<?php echo $allergyType['id']; ?>">
          <th scope="row"><?= $cnt++ ?></th>
          <td><?= ucwords($allergyType['name']) ?></td>
          <td><?= ucwords($allergyType['description']) ?></td>
          <td class="text-center">
            <?php
              users_action('allergy_types', $_SESSION['userPermmissions'], $allergyType['id']);
            ?>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
 </div>
<hr>
