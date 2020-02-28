 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('accreditation_templates', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Template Code/Name</th>
        <th>Level</th>
        <th>Program</th>
        <th>Area</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($ats as $at): ?>
      <tr id="<?php echo $at['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= strtoupper($at['template_code'] .' - '. $at['template_name']) ?></td>
        <td><?= strtoupper($at['accreditation_level']) ?></td>
        <td><?= strtoupper($at['program_name']) ?></td>
        <td><?= strtoupper($at['area_code'].' - '.$at['area_name']) ?></td>
        <td class="text-center">
          <?php
            users_action('accreditation_templates', $_SESSION['userPermmissions'], $at['id']);
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
