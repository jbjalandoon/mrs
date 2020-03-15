<div class="row">
  <div class="col-md-4">
    <h3>Diagnosis</h3>
    <table class="table table-border-top">
      <tr>
        <td>None</td>
      </tr>
    </table>

    <h3>Recent Vitals <span class="h6"> <?=isset($latest_vital[0]) ? '(' . date('F d, Y', strtotime($latest_vital[0]['start_date'])) . ')' : ''?></span> </h3>
    <table class="table table-border-top">
      <?php if (empty($latest_vital)): ?>
        <tr>
          <td>None</td>
        </tr>
      <?php else: ?>
        <tr>
          <td>Weight</td>
          <td><?=$latest_vital[0]['weight']?> kg.</td>
        </tr>
        <tr>
          <td>Height</td>
          <td><?=$latest_vital[0]['height']?> cm.</td>
        </tr>
        <tr>
          <td>BMI</td>
          <td>FORMULA</td>
        </tr>
        <tr>
          <td>Temperature</td>
          <td><?=$latest_vital[0]['temperature']?> C.</td>
        </tr>
        <tr>
            <td>Respiratory rate</td>
          <td><?=$latest_vital[0]['respiratory_rate']?> / min</td>
        </tr>
        <tr>
            <td>Pulse Rate</td>
          <td><?=$latest_vital[0]['pulse_rate']?> / min</td>
        </tr>
        <tr>
            <td>Blood Pressure</td>
          <td><?=$latest_vital[0]['blood_pressure']?></td>
        </tr>
      <?php endif; ?>
    </table>

    <h3>Health Trend Summary</h3>
    <table class="table table-border-top">
      <?php if (empty($health_summary)): ?>
        <tr>
          <td>None</td>
        </tr>

      <?php else: ?>
        <?php foreach ($health_summary as $health): ?>
          <tr>
            <td>
                <a class="btn form-control btn-light-outline dropdown-toggle" data-toggle="collapse" href="#detail<?=$health['id']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                  <?=date('F d, Y', strtotime($health['start_date']))?>
                </a>
                <div class=" mt-2 collapse" id="detail<?=$health['id']?>">
                  <div class="card card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-7">
                          <strong>Weight</strong>
                        </div>
                        <div class="col-md-5">
                          <?=$health['weight'] . ' kg.'?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <strong>Height</strong>
                        </div>
                        <div class="col-md-5">
                          <?=$health['height'] . ' cm.'?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <strong>BMI</strong>
                        </div>
                        <div class="col-md-5">
                          <?=$health['height'] . ' cm.'?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <strong>Temperature</strong>
                        </div>
                        <div class="col-md-5">
                          <?=$health['temperature'] . ' C.'?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <strong>Respiratory Rate</strong>
                        </div>
                        <div class="col-md-5">
                          <?=$health['respiratory_rate'] . ' / Min.'?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <strong>Pulse Rate</strong>
                        </div>
                        <div class="col-md-5">
                          <?=$health['pulse_rate'] . ' / Min.'?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <strong>Blood Pressure</strong>
                        </div>
                        <div class="col-md-5">
                          <?=$health['blood_pressure']?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>

    <h3>Weight Graph</h3>
    <table class="table table-border-top">
      <tr>
        <td>None</td>
      </tr>
    </table>
  </div>
  <div class="col-md-4">
    <h3>Recent Visits</h3>
    <div class="container table-border-top">
      <br>
      <?php if (empty($recent_visits)): ?>
        None
      <?php else: ?>
        <?php foreach ($recent_visits as $recent_visit): ?>
          <div class="row">
            <div class="col-md-12">
              <p>
                <a class="btn form-control btn-light-outline" data-toggle="collapse" href="#visit<?=$recent_visit['id']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                  <span class="float-left"><?=date('F d, Y', strtotime($recent_visit['start_date']))?> <?=$recent_visit['end_date'] == '' ? ' - Active': ''?></span>
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
    <!-- <table class="table table-border-top table-borderless">
      <?php if (!empty($recent_visits)): ?>
        <?php foreach ($recent_visits as $recent_visit): ?>
          <tr>
            <td><?=date('F d, Y h:i A', strtotime($recent_visit['start_date']))?> <?=$recent_visit['end_date'] == '' ? ' - Active': ''?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <h4>None</h4>
      <?php endif; ?>
    </table> -->

    <h3>Conditions</h3>
    <div class="container table-border-top">
      <br>

    </div>

    <h3>Allergies</h3>
    <div class="container table-border-top">
      <br>

    </div>

    <h3>Family</h3>
    <table class="table table-border-top">
      <tr>
        <td>None</td>
      </tr>
    </table>

    <h3>Appointment</h3>
    <table class="table table-border-top">
      <tr>
        <td>None</td>
      </tr>
    </table>
  </div>

  <div class="col-md-4">
    <h3>General Actions</h3>
    <ul class="list-group ">
      <li class="list-group-item">
        <div class="container">
          <div class="row">
            <div class="col-md-1">
              <i class="fa fa-plus-square"></i>
            </div>
            <div class="col-md-10">
              <a href="<?= base_url(). 'visits' . '/'?><?= $visit_id != 0 ? 'end/' . $visit_id .'/'. $profile[0]['id'] : 'start/' . $profile[0]['id']?> " class="text-dark"><?= $visit_id != 0 ? 'End Visit': 'Start Visit'?></a>
            </div>
          </div>
          <?php if ($visit_id != 0): ?>
            <div class="row mt-3">
              <div class="col-md-1 offset-md-1">
                <i class="fa fa-plus-square"></i>
              </div>
              <div class="col-md-9">
                <a href="<?=base_url(). 'vitals/capture/' . $profile[0]['id']?>" class="text-dark" <?=$vital_recorded == 0 ? '': 'style="pointer-events: none"'?>>Capture Vitals</a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-1 offset-md-1">
                <i class="fa fa-plus-square"></i>
              </div>
              <div class="col-md-9">
                <a href="#" class="text-dark">Visit Notes</a>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </li>
      <li class="list-group-item">
        <div class="container">
          <div class="row">
            <div class="col-md-1">
              <i class="fa fa-plus-square"></i>
            </div>
            <div class="col-md-10">
              <a class="text-dark" href="<?=base_url() . 'patients/edit/' . $profile[0]['id'] ?>">Edit</a>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="container">
          <div class="row">
            <div class="col-md-1">
              <i class="fa fa-plus-square"></i>
            </div>
            <div class="col-md-10">
              <a class="text-dark" href="#" onClick="confirmDelete('<?=base_url().'patients/delete/'?>' , <?=$profile[0]['id']?>)">Delete</a>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item"><div class="container">
        <div class="row">
          <div class="col-md-1">
            <i class="fa fa-plus-square"></i>
          </div>
          <div class="col-md-10">
            <a class="text-dark" href="<?=base_url().'conditions/' . $profile[0]['id'] ?>">Conditions</a>
          </div>
        </div>
      </div></li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>
</div>
