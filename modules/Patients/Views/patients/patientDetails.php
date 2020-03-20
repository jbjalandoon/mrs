        <div class="card-footer w-100 text-muted">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <div class="nav-link" style="">
                <i class="fas fa-clipboard-check"></i> <a href="<?= base_url(). 'visits' . '/'?><?= $visit_id != 0 ? 'end/' . $visit_id .'/'. $profile[0]['id'] : 'start/' . $profile[0]['id']?> " class="text-dark"><?= $visit_id != 0 ? 'End Visit': 'Start Visit'?></a>
              </div>
              <?php if ($visit_id != 0): ?>
                <div class="nav-link" style="text-align: center;">
                  <i id="vitalsicon" data-toggle="modal" data-target=".bd-example-modal-lg" class="fas fa-heartbeat"></i> <a href="<?=base_url(). 'vitals/capture/' . $profile[0]['id']?>" class="text-dark" <?=$vital_recorded == 0 ? '': 'style="pointer-events: none"'?>>Capture Vitals</a>
                </div>
                <div class="nav-link">
                  <i id="notesicon" class="fas fa-notes-medical"></i> <a href="<?=base_url(). 'attachments/' . $profile[0]['id']?>" class="text-dark">Attachment</a>
                </div>
                <div class="nav-link">
                  <i id="notesicon" class="fas fa-notes-medical"></i> <a href="#" class="text-dark">Diagnosis</a>
                </div>
              <?php endif; ?>

            </ul>
            <form class="form-inline my-2 my-lg-0">
              <div class="nav-link" style="">
                <i class="fas fa-file-prescription"></i> <a class="text-dark" href="<?=base_url().'patient-conditions/' . $profile[0]['id'] ?>">Conditions</a>
              </div>
              <div class="nav-link" style="">
                <i class="fas fa-file-prescription"></i> <a class="text-dark" href="<?=base_url().'patient-allergies/' . $profile[0]['id'] ?>">Allergies</a>
              </div>
              <div class="nav-link" style="">
                <i class="fas fa-file-prescription"></i> <a class="text-dark" href="<?=base_url().'patient-relatives/' . $profile[0]['id'] ?>">Relatives</a>
              </div>
              <div class="nav-link" style="">
                <i class="fas fa-user-edit"></i> <a class="text-dark" href="<?=base_url() . 'patients/edit/' . $profile[0]['id'] ?>">Edit</a>
              </div>
              <div class="nav-link">
                <i class="fas fa-trash-alt"></i> <a class="text-dark" href="#" onClick="confirmDelete('<?=base_url().'patients/delete/'?>' , <?=$profile[0]['id']?>)">Delete</a>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">

      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="child" class="fas fa-diagnoses"></i> Diagnosis</h5></div>
        <div class="card-body">
          <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
        </div>
      </div>
      <br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="vitalsicon" class="fas fa-heartbeat"></i> Recent Vitals</h5></div>
        <div class="card-body">
          <?php if (empty($latest_vital)): ?>
            <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <table  style="width: 100%;">
              <?php foreach ($latest_vital as $health): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>Weight</td>
                  <td><?=$health['weight']?> kg.</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>Height</td>
                  <td><?=$health['height']?> cm.</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>BMI</td>
                  <td><?= ($health['weight'] / $health['height'] / $health['height']) * 10000 ?> </td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>Temperature</td>
                  <td><?=$health['temperature']?> C.</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>Respiratory rate</td>
                  <td><?=$health['respiratory_rate']?> / min</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>Pulse Rate</td>
                  <td><?=$health['pulse_rate']?> / min</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>Blood Pressure</td>
                  <td><?=$health['blood_pressure']?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
        </div>
      </div>
      <br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="health" class="fas fa-file-medical-alt"></i> Health Trend Summary</h5></div>
        <div class="card-body">
          <?php if (empty($health_summary)): ?>
            <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <div id="accordion">
              <?php foreach ($health_summary as $summary): ?>
                <div class="card">
                  <div class="card-header" id="heading<?=$summary['id']?>">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?=$summary['id']?>" aria-expanded="false" aria-controls="collapse<?=$summary['id']?>">
                        <?=date('F d, Y', strtotime($summary['created_at']))?>
                      </button>
                    </h5>
                  </div>
                  <div id="collapse<?=$summary['id']?>" class="collapse" aria-labelledby="heading<?=$summary['id']?>" data-parent="#accordion">
                    <div class="card-body">
                      <table  style="width: 100%;">
                        <tr style="border-bottom: 1px solid #ddd">
                          <td>Weight</td>
                          <td><?=$summary['weight']?> kg.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd">
                          <td>Height</td>
                          <td><?=$summary['height']?> cm.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd">
                          <td>BMI</td>
                          <td><?= ($summary['weight'] / $summary['height'] / $summary['height']) * 10000 ?> </td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd">
                          <td>Temperature</td>
                          <td><?=$summary['temperature']?> C.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd">
                          <td>Respiratory rate</td>
                          <td><?=$summary['respiratory_rate']?> / min</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd">
                          <td>Pulse Rate</td>
                          <td><?=$summary['pulse_rate']?> / min</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd">
                          <td>Blood Pressure</td>
                          <td><?=$summary['blood_pressure']?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="child" class="fas fa-child"></i> Condition</h5></div>
        <div class="card-body">
          <?php if (empty($conditions)): ?>
            <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <table  style="width: 100%;">
              <?php foreach ($conditions as $condition): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>
                    <?php
                    if ($condition['patient_condition_status'] == 1) {
                      echo "Active";
                    }elseif ($condition['patient_condition_status'] == 2) {
                      echo "Inactive";
                    }else {
                      echo "History Of";
                    }
                    ?>
                  </td>
                  <td><?=ucwords($condition['name'])?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
          <!-- <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p> -->
        </div>
      </div>
<br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="allergy" class="fas fa-allergies"></i> Allergy</h5></div>
        <div class="card-body">
          <?php if (empty($allergies)): ?>
            <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <table  style="width: 100%;">
              <?php foreach ($allergies as $allergy): ?>
                <tr style="border-bottom: 1px solid #ddd">
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
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
        </div>
      </div>
<br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="weight" class="fas fa-weight"></i> Weight Graph</h5> </div>
        <div class="card-body">
          <?php if (empty($health_summary)): ?>
            <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <canvas id="canvas"></canvas>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="calendar" class="fas fa-calendar-check"></i> <a href="<?=base_url().'visits/'.$profile['0']['id']?>">Recent Visits</a> </h5></div>
        <div class="card-body">
          <?php if (empty($recent_visits)): ?>
            <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <table  style="width: 100%;">
              <?php foreach ($recent_visits as $recent_visit): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>
                    <span class="float-left"><?=date('F d, Y', strtotime($recent_visit['created_at']))?> <?=$recent_visit['updated_at'] == '' ? ' - Active': ''?></span>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
        </div>
      </div>
<br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="calendar" class="fas fa-calendar-plus"></i> Attachment</h5></div>
        <div class="card-body">
          <?php if (empty($attachments)): ?>
            <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <table  style="width: 100%;">
              <?php foreach ($attachments as $attachment): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td><?= ucwords($attachment['name']) ?></td>
                  <td> <a target="_blank" href="<?=base_url().'uploads/'.$attachment['file']?>">Download Here</a> </td>
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
          <!-- <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p> -->
        </div>
      </div>
<br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="family" class="fas fa-users"></i> Family</h5></div>
        <div class="card-body">
          <?php if (empty($relatives)): ?>
            <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <table  style="width: 100%;">
              <?php foreach ($relatives as $relative): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td><?= ucwords($relative['name']) ?></td>
                  <td><?= ucwords($relative['contact_no']) ?></td>
                  <td><?= ucwords($relative['relation']) ?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<hr>
