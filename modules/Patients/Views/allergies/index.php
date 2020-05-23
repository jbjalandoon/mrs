    </div>
  </div>
</div>
<br>
 <div class="row">
   <div class="col-md-4">
     <h1> <?=$function_title?> </h1>
   </div>
   <div class="col-md-3 offset-md-5">
    <?php patient_detail_add_link('patient_allergies', $_SESSION['userPermmissions'], $profile[0]['id']) ?>
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
