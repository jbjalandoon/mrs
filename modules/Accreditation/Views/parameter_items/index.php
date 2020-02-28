 <form class="" action="<?=base_url() . 'msi'?>" method="get">
   <div class="row">
       <div class="col-md-3">
         <select name="academic_program_id" class="form-control <?= isset($errors['academic_program_id']) ? 'is-invalid':'is-valid' ?>" required>
           <option value="" <?= isset($rec['academic_program_id']) ? '' : 'disabled selected'?>>-- Academic Program --</option>
           <?php if(isset($rec['academic_program_id']) && $rec['academic_program_id'] != ''): ?>
             <option value="<?= $rec['academic_program_id'] ?>" selected><?= strtoupper(name_on_system($rec['academic_program_id'], $academic_programs, 'academic_programs')) ?></option>
           <?php endif; ?>
           <?php foreach($academic_programs as $academic_program): ?>
             <?php if ($rec['academic_program_id'] != $academic_program['id']): ?>
               <option value="<?= $academic_program['id'] ?>"><?= strtoupper($academic_program['program_name']) ?></option>
             <?php endif; ?>
           <?php endforeach; ?>
         </select>
       </div>
       <div class="col-md-3">
         <select name="accreditation_level_id" class="form-control <?= isset($errors['accreditation_level_id']) ? 'is-invalid':'is-valid' ?>" required>
           <option value="" <?= isset($rec['accreditation_level_id']) ? '' : 'disabled selected'?>>-- Accreditation Level --</option>
           <?php if(isset($rec['accreditation_level_id']) && $rec['accreditation_level_id'] != ''): ?>
             <option value="<?= $rec['accreditation_level_id'] ?>" selected><?= strtoupper(name_on_system($rec['accreditation_level_id'], $accreditation_levels, 'accreditation_levels')) ?></option>
           <?php endif; ?>
           <?php foreach($accreditation_levels as $accreditation_level): ?>
             <?php if ($rec['accreditation_level_id'] != $accreditation_level['id']): ?>
               <option value="<?= $accreditation_level['id'] ?>"><?= strtoupper($accreditation_level['accreditation_level']) ?></option>
             <?php endif; ?>
           <?php endforeach; ?>
         </select>
       </div>
       <div class="col-md-3">
         <select name="area_id" class="form-control <?= isset($errors['area_id']) ? 'is-invalid':'is-valid' ?>" required>
           <option value="" <?= isset($rec['area_id']) ? '' : 'disabled selected'?>>-- Area --</option>
           <?php if(isset($rec['area_id']) && $rec['area_id'] != ''): ?>
             <option value="<?= $rec['area_id'] ?>" selected><?= strtoupper(name_on_system($rec['area_id'], $areas, 'areas')) ?></option>
           <?php endif; ?>
           <?php foreach($areas as $area): ?>
             <?php if ($area['id'] != $rec['area_id']): ?>
               <option value="<?= $area['id'] ?>"><?= strtoupper($area['area_code'].' - '.$area['area_name']) ?></option>
             <?php endif; ?>
           <?php endforeach; ?>
         </select>
       </div>
       <div class="col-md-3">
         <input type="submit" class="btn btn-primary" name="" value="Search">
       </div>
   </div>
   <br>
   <div class="row">
     <div class="col-md-12">
       <!-- $data["item_parameters"] -->
       <ul class="nav nav-tabs">
         <?php if(!empty($item_parameters)): ?>
           <?php foreach ($item_parameters as $item_parameter): ?>
             <li class="nav-item">
               <a class="ml-2 btn btn-outline-secondary" onClick= "msiTest(<?= $item_parameter['template_parameter_id'] ?>, <?= $item_parameter['accreditation_template_id'] ?>)"  href="#"><?= strtoupper($item_parameter['parameter_code']) ?><br><?= ucwords($item_parameter['title']) ?></a>
             </li>
           <?php endforeach; ?>
           <?php else: ?>
             <?php if (isset($rec)): ?>
               <h3>No Parameters Available Or Template Available</h3>
             <?php else: ?>
               <h3>Please fill out the fields</h3>
             <?php endif; ?>
         <?php endif; ?>
       </ul>
     </div>
   </div>
 </form>
<br>
 <div class="table-responsive" id="parameterTable">
   
 </div>
<hr>

<div class="row">
  <div class="col-md-6 offset-md-6">
    <!-- <?php paginater('areas', count($all_items), PERPAGE, $offset) ?> -->
  </div>
</div>
