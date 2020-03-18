<hr>
<div class="row">
  <div class="col-md-12">
    <div class="card border-success" style="border-radius: 0px;">
      <div class="card-body">
      <form action="<?= base_url() ?>patients/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
        <label class="card-title"><h3><i class="far fa-id-badge"></i> Personal Information</h3></label>

        <div class="card bg-light ">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" name="last_name" value="<?= isset($rec['last_name']) ? $rec['last_name'] : ''?>" id="last_name" placeholder="Last Name">
                  <?php if (isset($errors['last_name'])): ?>
                    <div class="text-danger">
                        <?= $errors['last_name']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" name="first_name" value="<?= isset($rec['first_name']) ? $rec['first_name'] : ''?>" id="first_name" placeholder="First Name">
                  <?php if (isset($errors['first_name'])): ?>
                    <div class="text-danger">
                        <?= $errors['first_name']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="middle_name">Middle Name</label>
                  <input type="text" class="form-control" name="middle_name" value="<?= isset($rec['middle_name']) ? $rec['middle_name'] : ''?>" id="middle_name" placeholder="Middle Name">
                  <?php if (isset($errors['middle_name'])): ?>
                    <div class="text-danger">
                        <?= $errors['middle_name']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="extension_name">Extension Name</label>
                  <input type="text" class="form-control" name="extension_name" value="<?= isset($rec['extension_name']) ? $rec['extension_name'] : ''?>" id="extension_name" placeholder="Extension Name">
                  <?php if (isset($errors['extension_name'])): ?>
                    <div class="text-danger">
                        <?= $errors['extension_name']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="birthdate">Birth Date</label>
                  <input type="date" class="form-control" name="birthdate" value="<?= isset($rec['birthdate']) ? $rec['birthdate'] : ''?>" id="birthdate" placeholder="Birth Date">
                  <?php if (isset($errors['birthdate'])): ?>
                    <div class="text-danger">
                        <?= $errors['birthdate']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select type="text" class="form-control" name="gender" id="gender" placeholder="Gender">
                    <option>Select</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                  </select>
                  <?php if (isset($errors['gender'])): ?>
                    <div class="text-danger">
                        <?= $errors['gender']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                 <label for="cellphone_no">Contact No.</label>
                 <input type="text" class="form-control" name="cellphone_no" value="<?= isset($rec['cellphone_no']) ? $rec['cellphone_no'] : ''?>" id="cellphone_no" placeholder="Contact No.">
                 <?php if (isset($errors['cellphone_no'])): ?>
                   <div class="text-danger">
                       <?= $errors['cellphone_no']?>
                   </div>
                 <?php endif; ?>
               </div>
             </div>
          </div>
          </div>
        </div>
        <br>

        <div class="card bg-light">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" value="<?= isset($rec['address']) ? $rec['address'] : ''?>" id="address" placeholder="Address">
                  <?php if (isset($errors['address'])): ?>
                    <div class="text-danger">
                        <?= $errors['address']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name="city" value="<?= isset($rec['city']) ? $rec['city'] : ''?>" id="city" placeholder="City">
                  <?php if (isset($errors['city'])): ?>
                    <div class="text-danger">
                        <?= $errors['city']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="province">Province</label>
                  <input type="text" class="form-control" name="province" value="<?= isset($rec['province']) ? $rec['province'] : ''?>" id="province" placeholder="Province">
                  <?php if (isset($errors['province'])): ?>
                    <div class="text-danger">
                        <?= $errors['province']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="postal">Postal</label>
                  <input type="text" class="form-control" name="postal" value="<?= isset($rec['postal']) ? $rec['postal'] : ''?>" id="postal" placeholder="Postal">
                  <?php if (isset($errors['postal'])): ?>
                    <div class="text-danger">
                        <?= $errors['postal']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
             </div>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-success float-right" style="width:15%;"><i class="fas fa-paper-plane"></i> Submit</button>
          </div>
        </div>
      </form>



      </div>
    </div>
  </div>
</div>
<br>
