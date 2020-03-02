 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>patients/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <label><h3>PERSONAL INFORMATION</h3></label>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="<?= isset($rec['last_name']) ? $rec['last_name'] : ''?>" id="last_name" placeholder="Last Name">
            <?php if ($errors['last_name']): ?>
              <div class="text-danger">
                  <?= $errors['last_name']?>
              </div>
            <?php endif; ?>
          </div>
        </div>

      <!--<div class="row">-->
        <div class="col-md-3">
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" value="<?= isset($rec['first_name']) ? $rec['first_name'] : ''?>" id="first_name" placeholder="First Name">
            <?php if ($errors['first_name']): ?>
              <div class="text-danger">
                  <?= $errors['first_name']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>-->
      <!--<div class="row">edited-->
       <div class="col-md-3">
         <div class="form-group">
           <label for="middle_name">Middle Name</label>
           <input type="text" class="form-control" name="middle_name" value="<?= isset($rec['middle_name']) ? $rec['middle_name'] : ''?>" id="middle_name" placeholder="Middle Name">
           <?php if ($errors['middle_name']): ?>
             <div class="text-danger">
                 <?= $errors['middle_name']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
     <!--<div class="row">-->
       <div class="col-md-3">
         <div class="form-group">
           <label for="extension_name">Extension Name</label>
           <input type="text" class="form-control" name="extension_name" value="<?= isset($rec['extension_name']) ? $rec['extension_name'] : ''?>" id="extension_name" placeholder="Extension Name">
           <?php if ($errors['extension_name']): ?>
             <div class="text-danger">
                 <?= $errors['extension_name']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
    </div> <!--end row ng Name secton-->

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="birthdate">Birth Date</label>
          <input type="date" class="form-control" name="birthdate" value="<?= isset($rec['birthdate']) ? $rec['birthdate'] : ''?>" id="birthdate" placeholder="Birth Date">
          <?php if ($errors['birthdate']): ?>
            <div class="text-danger">
                <?= $errors['birthdate']?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="gender">Gender</label>
          <select type="text" class="form-control" name="gender" id="gender" placeholder="Gender">
            <option>Select</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
          </select>
          <?php if ($errors['gender']): ?>
            <div class="text-danger">
                <?= $errors['gender']?>
            </div>
          <?php endif; ?>
        </div>
      </div>

        <div class="col-md-4">
      <div class="form-group">
       <label for="cellphone_no">Contact No.</label>
       <input type="text" class="form-control" name="cellphone_no" value="<?= isset($rec['cellphone_no']) ? $rec['cellphone_no'] : ''?>" id="cellphone_no" placeholder="Contact No.">
       <?php if ($errors['cellphone_no']): ?>
         <div class="text-danger">
             <?= $errors['cellphone_no']?>
         </div>
       <?php endif; ?>
     </div>
   </div>
        </div><!--End ng row-->

     <div class="row">
       <div class="col-md-3">
         <div class="form-group">
           <label for="address">Address</label>
           <input type="text" class="form-control" name="address" value="<?= isset($rec['address']) ? $rec['address'] : ''?>" id="address" placeholder="Address">
           <?php if ($errors['address']): ?>
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
           <?php if ($errors['city']): ?>
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
           <?php if ($errors['province']): ?>
             <div class="text-danger">
                 <?= $errors['province']?>
             </div>
           <?php endif; ?>
         </div>
       </div>

       <div class="col-md-3">
         <div class="form-group">
           <label for="postal">Postal</label>
           <input type="text" class="form-control" name="postal" value="<?= isset($rec['postal']) ? $rec['postal'] : ''?>" id="postal" placeholder="Postal">
           <?php if ($errors['postal']): ?>
             <div class="text-danger">
                 <?= $errors['postal']?>
             </div>
           <?php endif; ?>
         </div>
       </div>

     <!--</div>-->
        </div><!--End ng row-->
       <br>
       <label><h3>ADDITINAL INFORMATION</h3></label>
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
           <label for="relative_name">Relative Name</label>
           <input type="text" class="form-control" name="relative_name" value="<?= isset($rec['relative_name']) ? $rec['relative_name'] : ''?>" id="relative_name" placeholder="Relative Name">
           <?php if ($errors['relative_name']): ?>
             <div class="text-danger">
                 <?= $errors['relative_name']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--<div class="row">-->
       <div class="col-md-6">
         <div class="form-group">
           <label for="relative_contact">Relative Contact Number</label>
           <input type="text" class="form-control" name="relative_contact" value="<?= isset($rec['relative_contact']) ? $rec['relative_contact'] : ''?>" id="relative_contact" placeholder="Relative Contact Number">
           <?php if ($errors['relative_contact']): ?>
             <div class="text-danger">
                 <?= $errors['relative_contact']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
        </div><!--End ng row-->

      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
