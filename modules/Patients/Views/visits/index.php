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
                  <a class="nav-item nav-link active" id="nav-vital-tab-<?=$visit['id']?>" data-toggle="tab" href="#nav-vital-<?=$visit['id']?>" role="tab" aria-controls="nav-vital-<?=$visit['id']?>" aria-selected="true">Vitals</a>
                  <a class="nav-item nav-link" id="nav-attachment-tab-<?=$visit['id']?>" data-toggle="tab" href="#nav-attachment-<?=$visit['id']?>" role="tab" aria-controls="nav-attachment-<?=$visit['id']?>" aria-selected="false">Attachments</a>
                  <a class="nav-item nav-link" id="nav-diagnosis-tab-<?=$visit['id']?>" data-toggle="tab" href="#nav-diagnosis-<?=$visit['id']?>" role="tab" aria-controls="nav-diagnosis-<?=$visit['id']?>" aria-selected="false">Diagnosis</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-vital-<?=$visit['id']?>" role="tabpanel" aria-labelledby="nav-vital-tab-<?=$visit['id']?>">
                  <div class="row">
                    <div class="col-md-6">
                      <br>
                      <?php $ctr = 0; ?>
                      <?php if (empty($vitals)): ?>
                        No Vitals Captured
                      <?php else: ?>
                        <table  style="width: 100%;">
                          <?php foreach ($vitals as $vital): ?>
                            <?php if ($vital['visit_id'] == $visit['id']): ?>
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
                              <tr>
                                <td> <br> </td>
                              </tr>
                              <tr>
                                <td> <?php users_action('vitals', $_SESSION['userPermmissions'], $vital['id'], $profile[0]['id']); ?></td>
                                <td>
                                </td>
                              </tr>
                              <?php $ctr++; ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </table>
                        <?php if ($ctr == 0): ?>
                          No Vitals Captured
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-attachment-<?=$visit['id']?>" role="tabpanel" aria-labelledby="nav-attachment-tab-<?=$visit['id']?>">
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <?php $ctr = 0; ?>
                      <?php if (empty($attachments)): ?>
                        No Files Attached
                      <?php else: ?>
                        <table  class="table" tyle="width: 100%;">
                          <tr>
                            <th>File Name</th>
                            <th>File Attached</th>
                            <th>Action</th>
                          </tr>
                          <?php foreach ($attachments as $attachment): ?>
                            <?php if ($attachment['visit_id'] == $visit['id']): ?>
                              <tr style="border-bottom: 1px solid #ddd">
                                <td><?= ucwords($attachment['name']) ?></td>
                                <td> <a target="_blank" href="<?=base_url().'uploads/'.$attachment['file']?>">Download Here</a> </td>
                                <td> <?php users_action('attachments', $_SESSION['userPermmissions'], $attachment['id'], $profile[0]['id']); ?></td>
                              </tr>
                              <?php $ctr++ ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </table>
                        <?php if ($ctr == 0): ?>
                          No Files Attached
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-diagnosis-<?=$visit['id']?>" role="tabpanel" aria-labelledby="nav-diagnosis-tab-<?=$visit['id']?>">
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <?php $ctr = 0; ?>
                      <?php if (empty($diagnosis)): ?>
                        No Diagnosis
                      <?php else: ?>
                        <table class="table" style="width: 100%;">
                          <tr>
                            <th>Diagnosis</th>
                            <th>Type</th>
                            <th>Is Confirmed?</th>
                            <th>Action?</th>
                          </tr>
                          <?php foreach ($diagnosis as $diagnose): ?>
                            <?php if ($diagnose['visit_id'] == $visit['id']): ?>
                              <tr style="border-bottom: 1px solid #ddd">
                                <td><?= ucwords($diagnose['condition_name']) ?></td>
                                <td><?= ucwords($diagnose['type_name']) ?></td>
                                <td><?= $diagnose['is_confirmed'] == 1 ? 'Confirmed' : 'Suspect' ?></td>
                                <td> <?php users_action('diagnosis', $_SESSION['userPermmissions'], $diagnose['id'], $profile[0]['id']); ?></td>
                              </tr>
                              <?php $ctr++ ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </table>
                        <?php if ($ctr == 0): ?>
                          No Diagnosis
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $ctr++; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<hr>
