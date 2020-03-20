    </div>
  </div>
</div>
<br>
<div class="row">

 <!--<div class="col-md-10">
    search here
 </div>-->
 <div class="col-md-3 offset-md-9">
  <?php patient_detail_add_link('patient_conditions', $_SESSION['userPermmissions'], $profile[0]['id']) ?>
 </div>
</div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-sm table-striped table-bordered index-table">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Condition Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($conditions as $condition): ?>
      <tr id="<?php echo $condition['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($condition['name']) ?></td>
        <td>
        <?php if ($condition['patient_condition_status'] == 1) {
          echo "Active";
        }
        elseif ($condition['patient_condition_status'] == 2) {
          echo "Inactive";
        }
        else {
          echo "History Of";
        }?>
        </td>
        <td class="text-center">
          <?php
            users_action('patient_conditions', $_SESSION['userPermmissions'], $condition['id'], $profile[0]['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>
