<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Name</span>
        <span class="field-value"><?= strtoupper($accreditation_template[0]['template_code'].' - '.$accreditation_template[0]['template_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($accreditation_template[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Academic Program</span>
        <span class="field-value"><?= strtoupper($accreditation_template[0]['program_name'].' - '.$accreditation_template[0]['program_description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Accreditation Level</span>
        <span class="field-value"><?= strtoupper($accreditation_template[0]['accreditation_level']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Area</span>
        <span class="field-value"><?= strtoupper($accreditation_template[0]['area_code'].' - '.$accreditation_template[0]['area_name']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('accreditation_templates','edit-accreditation-template', $permissions, $accreditation_template[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
<hr>
<div class="col-md-3">
 <?php user_add_link('parameter_items', $_SESSION['userPermmissions']) ?>
</div>
<br>

<div class="container" id="parameter_items">
  <div class="row">
    <div class="col-md-12">
      <!-- $data["item_parameters"] -->
      <ul class="nav nav-tabs">
        <?php if(!empty(isset($item_parameters))): ?>
          <?php foreach ($item_parameters as $item_parameter): ?>
            <li class="nav-item">
              <a class="ml-2 mt-2 btn btn-outline-secondary" onClick= "parameterItems(<?= $item_parameter['template_parameter_id'] ?>, <?= $item_parameter['accreditation_template_id'] ?>)"  href="#"><?= strtoupper($item_parameter['parameter_code']) ?><br><?= ucwords($item_parameter['title']) ?></a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <br>
  <div id="indicators" class="row">
    <div class="col-12">
      <h3 id="title"><?= strtoupper($parameterName['parameter_code']) ?><br><?= ucwords($parameterName['title']) ?></h3>
      <table id="indicators-table" class="table">
        <thead class="thead-dark table-bordered">
          <tr class="text-center">
            <th scope="col">Indicators</th>
            <th scope="col">Document Needed</th>
            <th scope="col">Attached Documents</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if(isset($parameter_items_views)): ?>
            <?php foreach ($parameter_items_views as $indicators): ?>
              <tr>
                <td scope="col"><?= ucwords($indicators['parameter_item']) ?></td>
                <?php
                if(!empty($indicators['document_needed_list']))
                  $arr_doc_list = explode('-', $indicators['document_needed_list']);
                ?>
                <td scope="col">
                  <ul>
                  <?php
                    $cnt = 1;
                    foreach ($arr_doc_list as $doc) {
                      if($cnt == 1)
                      {
                        $cnt++;
                        continue;
                      }
                      echo "<li align='left'>".ucwords($doc)."</li>";
                    }
                  ?>
                </ul>
                </td>
                <td scope="col">
                  <!-- <button id="document_tagging" data-parameterItem="<?= $indicators['id'] ?>" data-toggle="modal" data-target="#documentListForTagging" class="btn btn-info btn-sm"> -->
                  <?php if (empty($indicators['tagged_documents'])): ?>
                    [No Tagged Documents]
                  <?php else: ?>
                    <?php getdocuments($indicators['tagged_documents'], $documents) ?>
                  <?php endif; ?>
                  <br>
                  <?php if (!empty($indicators['document_needed_list'])): ?>
                    <button onClick= "getAllDocuments(<?=$indicators['id']?>,<?= $indicators['accreditation_template_id'] ?>, <?= $indicators['tagged_documents'] ?>)" class="btn btn-info btn-sm">
                      <i class="fas fa-tags"></i> Tag Document(s)
                    </button>
                  <?php endif; ?>
                </td>
                <td scope="col">Action</td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php  echo view('Modules\Accreditation\Views\parameter_items\frmParameterItemModal'); ?>
<?php  echo view('Modules\Accreditation\Views\parameter_items\frmDocumentListForTagging'); ?>
<?php  //echo view('parammeter_items/frmParameterItemModal'); ?>
