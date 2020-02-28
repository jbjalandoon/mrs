 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('academic_programs', $_SESSION['userPermmissions']) ?>
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
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($academic_programs as $academic_program): ?>
      <tr id="<?php echo $academic_program['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= strtoupper($academic_program['program_name']) ?></td>
        <td><?= ucwords($academic_program['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('academic_programs', $_SESSION['userPermmissions'], $academic_program['id']);
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
    <?php paginater('academic_programs', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
