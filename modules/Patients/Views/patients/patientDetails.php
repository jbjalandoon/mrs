<div class="card-footer w-100 text-muted">
  <div class="row">
    <div class="col-md-2">
      <h5><i class="fas fa-notes-medical"></i> General Actions</h5>
    </div>
    <div class="col-md-2" style="border-right: 3px solid #86888A; border-left: 3px solid #86888A; text-align:center;">
      <i class="fas fa-clipboard-check"></i> <a href="<?= base_url(). 'visits' . '/'?><?= $visit_id != 0 ? 'end/' . $visit_id .'/'. $profile[0]['id'] : 'start/' . $profile[0]['id']?> " class="text-dark"><?= $visit_id != 0 ? 'End Visit': 'Start Visit'?></a>
    </div>
    <?php if ($visit_id != 0): ?>
    <div class="col-md-2" style="text-align: center;">
      <i id="vitalsicon" data-toggle="modal" data-target=".bd-example-modal-lg" class="fas fa-heartbeat"></i> <a href="<?=base_url(). 'vitals/capture/' . $profile[0]['id']?>" class="text-dark" <?=$vital_recorded == 0 ? '': 'style="pointer-events: none"'?>>Capture Vitals</a>
    </div>
    <div class="col-md-2">
      <i id="notesicon" class="fas fa-notes-medical"></i> <a href="#" class="text-dark">Visit Notes</a>
    </div>
    <?php endif; ?>
    <div class="col-2" style="text-align:right;">
      <i class="fas fa-file-prescription"></i> <a class="text-dark" href="<?=base_url().'patient-conditions/' . $profile[0]['id'] ?>">Conditions</a>
    </div>
    <div class="col-md-1" style="text-align:center;">
      <i class="fas fa-user-edit"></i> <a class="text-dark" href="<?=base_url() . 'patients/edit/' . $profile[0]['id'] ?>">Edit</a>
    </div>
    <div class="col-md-1">
      <i class="fas fa-trash-alt"></i> <a class="text-dark" href="#" onClick="confirmDelete('<?=base_url().'patients/delete/'?>' , <?=$profile[0]['id']?>)">Delete</a>
    </div>
  </div>
</div>
</div>
</div>
</div>
<hr>

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
          <table  style="width: 100%;">
            <tr  style="border-bottom: 1px solid #ddd">
              <td>Weight</td>
              <td> kg.</td>
            </tr>
            <tr  style="border-bottom: 1px solid #ddd">
              <td>Height</td>
              <td> cm.</td>
            </tr>
            <tr  style="border-bottom: 1px solid #ddd">
              <td>BMI</td>
              <td>FORMULA</td>
            </tr>
            <tr  style="border-bottom: 1px solid #ddd">
              <td>Temperature</td>
              <td> C.</td>
            </tr>
            <tr  style="border-bottom: 1px solid #ddd">
                <td>Respiratory rate</td>
              <td> / min</td>
            </tr>
            <tr  style="border-bottom: 1px solid #ddd">
                <td>Pulse Rate</td>
              <td> / min</td>
            </tr>
            <tr  style="border-bottom: 1px solid #ddd">
                <td>Blood Pressure</td>
              <td></td>
            </tr>
          </table>
        </div>
      </div>
      <br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="health" class="fas fa-file-medical-alt"></i> Health Trend Summary</h5></div>
        <div class="card-body">
          <table>
            <tr>
              <td>
                <a class="btn form-control btn-light-outline dropdown-toggle" data-toggle="collapse" href="#details" role="button" aria-expanded="false" aria-controls="collapseExample">
                  date
                </a>
                <div class=" mt-2 collapse" id="details">
                  <div class="card card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <strong>Weight</strong>
                        </div>
                        <div class="col-md-6">
                          kg
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <strong>Height</strong>
                        </div>
                        <div class="col-md-6">
                          cm
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <strong>BMI</strong>
                        </div>
                        <div class="col-md-6">
                          FORMULA
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <strong>Temperature</strong>
                        </div>
                        <div class="col-md-6">
                          C / F
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <strong>Respiratory Rate</strong>
                        </div>
                        <div class="col-md-6">
                          / min
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <strong>Pulse Rate</strong>
                        </div>
                        <div class="col-md-6">
                          / min
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <strong>Blood Pressure</strong>
                        </div>
                        <div class="col-md-6">
                          / over over
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="child" class="fas fa-child"></i> Condition</h5></div>
        <div class="card-body">
          <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
        </div>
      </div>
<br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="allergy" class="fas fa-allergies"></i> Allergy</h5></div>
        <div class="card-body">
          <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
        </div>
      </div>
<br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="weight" class="fas fa-weight"></i> Weight Graph</h5> </div>
        <div class="card-body">
            <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="calendar" class="fas fa-calendar-check"></i> Recent Visits</h5></div>
        <div class="card-body">
          <?php if (empty($recent_visits)): ?>
            <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <?php foreach ($recent_visits as $recent_visit): ?>
              <div class="row">
                <div class="col-md-12">
                  <p>
                    <a class="btn form-control btn-light-outline" data-toggle="collapse" href="#visit<?=$recent_visit['id']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                      <span class="float-left"><?=date('F d, Y', strtotime($recent_visit['created_at']))?> <?=$recent_visit['updated_at'] == '' ? ' - Active': ''?></span>
                    </a>
                  </p>
                  <div class="collapse" id="visit<?=$recent_visit['id']?>">
                    <div class="card card-body">
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
<br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="calendar" class="fas fa-calendar-plus"></i> Appointment</h5></div>
        <div class="card-body">
          <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
        </div>
      </div>
<br>
      <div id="cards" class="card border-light">
        <div class="card-header"><h5><i id="family" class="fas fa-users"></i> Family</h5></div>
        <div class="card-body">
          <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
        </div>
      </div>
    </div>
  </div>
<hr>
