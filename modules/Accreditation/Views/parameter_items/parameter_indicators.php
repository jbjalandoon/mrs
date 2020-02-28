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
            if(!empty($indicators['document_needed_list'])){
              $arr_doc_list = explode('-', $indicators['document_needed_list']);
            }
            else {
                $arr_doc_list = [];
              }
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
