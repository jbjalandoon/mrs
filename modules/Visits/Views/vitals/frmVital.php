    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-6 offset-md-3">
    <h1>Capture Vitals</h1>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>vitals/<?= isset($rec) ? 'edit/'.$rec['id'].'/'.$profile[0]['id'] : 'capture/'.$profile[0]['id'] ?>" method="post">
      <div class="row">
        <div class="col-md-3 offset-md-3">
          <div class="form-group">
            <label for="weight">Weight</label>
            <div class="input-group mb-3">
              <div class="input-group mb-3">
                <input name="weight" type="number" step="0.01" min="" max="" value="<?= isset($rec['weight']) ? $rec['weight'] : ''?>" class="form-control <?= isset($errors['weight']) ? 'is-invalid':'is-valid' ?>" id="weight" placeholder="Weight">
                <div class="input-group-append">
                  <span class="input-group-text">kg.</span>
                </div>
              </div>
            </div>
              <?php if(isset($errors['weight'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['weight'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="height">Height</label>
            <div class="input-group mb-3">
              <div class="input-group mb-3">
                <input name="height" type="number" step="0.01" value="<?= isset($rec['height']) ? $rec['height'] : ''?>" class="form-control <?= isset($errors['height']) ? 'is-invalid':'is-valid' ?>" id="height" placeholder="Height">
                <div class="input-group-append">
                  <span class="input-group-text">cm.</span>
                </div>
              </div>
            </div>
              <?php if(isset($errors['height'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['height'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="temperature">Temperature</label>
            <div class="input-group mb-3">
              <div class="input-group mb-3">
                <input name="temperature" type="number" step="0.01" value="<?= isset($rec['temperature']) ? $rec['temperature'] : ''?>" class="form-control <?= isset($errors['temperature']) ? 'is-invalid':'is-valid' ?>" id="temperature" placeholder="Temperature">
                <div class="input-group-append">
                  <span class="input-group-text">C</span>
                </div>
              </div>
            </div>
              <?php if(isset($errors['temperature'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['temperature'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 offset-md-3">
          <div class="form-group">
            <label for="respiratory_rate">Respiratory Rate</label>
            <div class="input-group mb-3">
              <div class="input-group mb-3">
                <input name="respiratory_rate" type="number" value="<?= isset($rec['respiratory_rate']) ? $rec['respiratory_rate'] : ''?>" class="form-control <?= isset($errors['respiratory_rate']) ? 'is-invalid':'is-valid' ?>" id="Respiratory Rate" placeholder="Respiratory Rate">
                <div class="input-group-append">
                  <span class="input-group-text"> /min</span>
                </div>
              </div>
            </div>
              <?php if(isset($errors['respiratory_rate'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['respiratory_rate'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="pulse_rate">Pulse Rate</label>
            <div class="input-group mb-3">
              <div class="input-group mb-3">
                <input name="pulse_rate" type="number" value="<?= isset($rec['pulse_rate']) ? $rec['pulse_rate'] : ''?>" class="form-control <?= isset($errors['pulse_rate']) ? 'is-invalid':'is-valid' ?>" id="pulse_rate" placeholder="Pulse Rate">
                <div class="input-group-append">
                  <span class="input-group-text"> /min</span>
                </div>
              </div>
            </div>
              <?php if(isset($errors['pulse_rate'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['pulse_rate'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <?php
      if (isset($rec['blood_pressure'])) {
        $blood_pressure = explode('/', $rec['blood_pressure']);
        // die($rec['blood_pressure']);
        // print_r($blood_pressure);
      }
      ?>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="blood_pressure">Blood Pressure</label>
            <div class="input-group">
              <input name="blood_pressure_denominator" type="number" value="<?=isset($rec['blood_pressure']) ? $blood_pressure[1]: ''?>" class="form-control <?= isset($errors['blood_pressure_denominator']) ? 'is-invalid':'is-valid' ?>" id="blood_pressure_denominator" placeholder="Blood Pressure">
              <div class="input-group-prepend">
                <span class="input-group-text" id="">/</span>
              </div>
              <input name="blood_pressure_numerator" type="number" value="<?=isset($rec['blood_pressure']) ? $blood_pressure[0]: ''?>" class="form-control <?= isset($errors['blood_pressure_numerator']) ? 'is-invalid':'is-valid' ?>" id="blood_pressure_numerator" placeholder="Blood Pressure">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <input type="hidden" name="visit_id" value="<?=$visit_id?>">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
