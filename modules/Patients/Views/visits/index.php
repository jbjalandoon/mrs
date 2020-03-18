<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url());?>
  <div class="row">
    <div class="col-md-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <?php $ctr = 0; ?>
        <?php foreach ($visits as $visit): ?>
          <a class="nav-link <?= $ctr == 0 ? 'active': '' ?>" id="v-pills-home-tab" data-toggle="pill" href="#link<?=$visit['id']?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><?=date('F d, Y', strtotime($visit['created_at']))?> <?= $visit['updated_at'] == '' ? ' - Active': ''?></a>
          <?php $ctr++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-md-8">
      <div class="tab-content" id="v-pills-tabContent">
        <?php $ctr = 0; ?>
        <?php foreach ($visits as $visit): ?>
            <div class="tab-pane fade show <?= $ctr == 0 ? 'active': '' ?>" id="link<?=$visit['id']?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <h5>Visits Log</h5>

              <h6>Vital</h6>
                <?php if (empty($vitals)): ?>
                  Capture Vitals
                <?php else: ?>
                  <?php foreach ($vitals as $vital): ?>
                    <?php if ($vital['visit_id'] == $visit['id']): ?>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-7">
                            <strong>Weight</strong>
                          </div>
                          <div class="col-md-5">
                            <?=$vital['weight'] . ' kg.'?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <strong>Height</strong>
                          </div>
                          <div class="col-md-5">
                            <?=$vital['height'] . ' cm.'?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <strong>BMI</strong>
                          </div>
                          <div class="col-md-5">
                            <?=$vital['height'] . ' cm.'?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <strong>Temperature</strong>
                          </div>
                          <div class="col-md-5">
                            <?=$vital['temperature'] . ' C.'?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <strong>Respiratory Rate</strong>
                          </div>
                          <div class="col-md-5">
                            <?=$vital['respiratory_rate'] . ' / Min.'?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <strong>Pulse Rate</strong>
                          </div>
                          <div class="col-md-5">
                            <?=$vital['pulse_rate'] . ' / Min.'?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <strong>Blood Pressure</strong>
                          </div>
                          <div class="col-md-5">
                            <?=$vital['blood_pressure']?>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php endif; ?>

              <h6>Diagnosis</h6>

              <br>

              Attachments

              <br>

            </div>
            <?php $ctr++; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<hr>
