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
    <?php patient_detail_add_link('patient_conditions', $_SESSION['userPermmissions'], $profile[0]['id']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
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
