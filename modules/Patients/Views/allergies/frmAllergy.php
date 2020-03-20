</div>
</div>
</div>
<br>
 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<form action="<?= base_url() ?>patient-allergies/<?= isset($rec) ? 'edit/'.$rec['id'].'/'.$profile[0]['id'] : 'add/'.$profile[0]['id'] ?>" method="post">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="allergy_id"> Allergy </label>
        <select class="allergy_id form-control " id="allergy_id" name="allergy_id">
          <?php foreach ($allergy_types as $allergy_type): ?>
            <optgroup label="<?=ucwords($allergy_type['name'])?>">
              <?php foreach ($allergies as $allergy): ?>
                <?php if ($allergy['allergy_type_id'] == $allergy_type['id']): ?>
                  <option value="<?=$allergy['id']?>" <?= isset($rec['allergy_id']) ? $rec['allergy_id'] == $allergy['id'] ? 'selected': '' : ''?> ><?=ucwords($allergy['name'])?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </optgroup>
          <?php endforeach; ?>
          <optgroup label="Other">
            <?php foreach ($allergies as $allergy): ?>
              <?php if ($allergy['allergy_type_id'] == 0): ?>
                <option value="<?=$allergy['id']?>" <?= isset($rec['allergy_id']) ? $rec['allergy_id'] == $allergy['id'] ? 'selected': '' : ''?>><?=ucwords($allergy['name'])?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </optgroup>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="severity">Severity</label>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="mild" value="1" name="severity" class="custom-control-input" checked>
          <label class="custom-control-label" for="mild" >Mild</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="moderate" value="2" name="severity" class="custom-control-input" <?= isset($rec['severity']) ? $rec['severity'] == 2 ? 'checked': '' : ''?>>
          <label class="custom-control-label" for="moderate">Moderate</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="severe" value="3" name="severity" class="custom-control-input" <?= isset($rec['severity']) ? $rec['severity'] == 3 ? 'checked': '' : ''?>>
          <label class="custom-control-label" for="severe">Severe</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="reaction_id">Reactions</label>
        <select class="form-control" name="reaction_id[]" id="reaction_id" multiple="multiple">
          <?php foreach ($reactions as $reaction): ?>
            <?php if (isset($rec)): ?>
              <?php
                $patient_allergy_reactions = substr($rec['reaction_id'], 0, -1);
                $patient_allergy_reactions = ltrim($patient_allergy_reactions, '[');
                $finalAllowed = explode(',',$patient_allergy_reactions);
              ?>
              <?php if (in_array($reaction['id'], $finalAllowed)): ?>
                <option value="<?=$reaction['id']?>" selected><?=ucwords($reaction['name'])?></option>
              <?php else: ?>
                <option value="<?=$reaction['id']?>"><?=ucwords($reaction['name'])?></option>
              <?php endif; ?>
            <?php else: ?>
              <option value="<?=$reaction['id']?>"><?=ucwords($reaction['name'])?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary float-right">Submit</button>
  </div>
</form>
