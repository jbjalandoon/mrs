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
    <?php patient_detail_add_link('patient_allergies', $_SESSION['userPermmissions'], $profile[0]['id']) ?>
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
        <th>Type</th>
        <th>Severity</th>
        <th>Reactions</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php if (empty($patient_allergies)): ?>
      <?php else: ?>
        <?php $cnt = 1; ?>
        <?php foreach($patient_allergies as $allergy): ?>
        <tr id="<?php echo $allergy['id']; ?>">
          <th scope="row"><?= $cnt++ ?></th>
          <td><?= ucwords($allergy['name']) ?></td>
          <td><?= $allergy['type'] == null ? 'Others' : ucwords($allergy['type']) ?></td>
          <td>
            <?php if ($allergy['severity'] == 1): ?>
              Mild
            <?php endif; ?>
            <?php if ($allergy['severity'] == 2): ?>
              Moderate
            <?php endif; ?>
            <?php if ($allergy['severity'] == 3): ?>
              Severe
            <?php endif; ?>
          </td>
          <td>
            <?php getReactions($allergy['reaction_id'], $reactions) ?>
          </td>
        <td class="text-center">
          <?php
            users_action('patient_allergies', $_SESSION['userPermmissions'], $allergy['id'], $profile[0]['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
  </table>
 </div>
<hr>
