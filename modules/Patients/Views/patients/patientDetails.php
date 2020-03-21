    </div>
  </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">

      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="child" class="fas fa-diagnoses"></i> Diagnosis</h5></div>
        <div class="card-body">
          <?php if (empty($diagnosis)): ?>
            <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <table class="table" style="width: 100%;">
              <tr>
                <th>Diagnosis</th>
                <th>Type</th>
                <th>Status</th>
              </tr>
              <?php foreach ($diagnosis as $diagnose): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b><?=ucwords($diagnose['condition_name'])?></b> </td>
                  <td> <?=ucwords($diagnose['type_name'])?> </td>
                  <td><?=$diagnose['is_confirmed'] == 1 ? 'Confirmed': 'Suspect'?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
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
                  <td> <b>Weight</b> </td>
                  <td><?=$health['weight']?> kg.</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b>Height</b> </td>
                  <td><?=$health['height']?> cm.</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b>BMI</b> </td>
                  <td><?= ($health['weight'] / $health['height'] / $health['height']) * 10000 ?> </td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b>Temperature</b> </td>
                  <td><?=$health['temperature']?> C.</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b>Respiratory Rate</b> </td>
                  <td><?=$health['respiratory_rate']?> / min</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b>Pulse Rate</b> </td>
                  <td><?=$health['pulse_rate']?> / min</td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b>Blood Pressure</b> </td>
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
            <table class="table" style="width: 100%;">
              <tr>
                <th>Condition</th>
                <th>Status</th>
              </tr>
              <?php foreach ($conditions as $condition): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b><?=ucwords($condition['name'])?></b> </td>
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
            <table class="table" style="width: 100%;">
              <tr>
                <th>Allergy</th>
                <th>Type</th>
                <th>Reaction</th>
              </tr>
              <?php foreach ($allergies as $allergy): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b><?= ucwords($allergy['name']) ?></b> </td>
                  <td><?= $allergy['type'] == null ? 'Others' : ucwords($allergy['type']) ?></td>
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
                    <span class="float-left"><?=date('F d, Y', strtotime($recent_visit['created_at']))?> <?=$recent_visit['updated_at'] == '' ? ' - Active': ' - ' . date('F d, Y', strtotime($recent_visit['updated_at']))?></span>
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
            <table class="table" style="width: 100%;">
              <tr>
                <th>File</th>
                <th>Download</th>
              </tr>
              <?php foreach ($attachments as $attachment): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b><?= ucwords($attachment['name']) ?></b> </td>
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
        <div class="card-header"><h5><i id="family" class="fas fa-users"></i> Relatives</h5></div>
        <div class="card-body">
          <?php if (empty($relatives)): ?>
            <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <table class="table" style="width: 100%;">
              <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Relation</th>
              </tr>
              <?php foreach ($relatives as $relative): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td> <b><?= ucwords($relative['name']) ?></b> </td>
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
