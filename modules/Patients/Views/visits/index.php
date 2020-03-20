</div>
</div>
</div>
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
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-vital-tab" data-toggle="tab" href="#nav-vital" role="tab" aria-controls="nav-vital" aria-selected="true">Vitals</a>
                  <a class="nav-item nav-link" id="nav-attachment-tab" data-toggle="tab" href="#nav-attachment" role="tab" aria-controls="nav-attachment" aria-selected="false">Attachments</a>
                  <a class="nav-item nav-link" id="nav-diagnoses-tab" data-toggle="tab" href="#nav-diagnoses" role="tab" aria-controls="nav-diagnoses" aria-selected="false">Diagnoses</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-vital" role="tabpanel" aria-labelledby="nav-vital-tab">
                  <div class="row">
                    <div class="col-md-6">
                      <br>
                      <?php if (empty($vitals)): ?>
                      <?php else: ?>
                        <table  style="width: 100%;">
                          <?php foreach ($vitals as $vital): ?>
                            <tr style="border-bottom: 1px solid #ddd">
                              <td>Weight</td>
                              <td><?=$vital['weight']?> kg.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd">
                              <td>Height</td>
                              <td><?=$vital['height']?> cm.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd">
                              <td>BMI</td>
                              <td><?= ($vital['weight'] / $vital['height'] / $vital['height']) * 10000 ?> </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd">
                              <td>Temperature</td>
                              <td><?=$vital['temperature']?> C.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd">
                              <td>Respiratory rate</td>
                              <td><?=$vital['respiratory_rate']?> / min</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd">
                              <td>Pulse Rate</td>
                              <td><?=$vital['pulse_rate']?> / min</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd">
                              <td>Blood Pressure</td>
                              <td><?=$vital['blood_pressure']?></td>
                            </tr>
                          <?php endforeach; ?>
                        </table>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-attachment" role="tabpanel" aria-labelledby="nav-attachment-tab">
                  <div class="row">
                    <div class="col-md-6">
                      <br>
                      <?php if (empty($attachments)): ?>
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
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-diagnoses" role="tabpanel" aria-labelledby="nav-diagnoses-tab">...</div>
              </div>
            </div>
            <?php $ctr++; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<hr>
