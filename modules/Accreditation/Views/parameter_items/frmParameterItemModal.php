<!-- Modal -->
<div class="modal fade" id="frmParameterItems" tabindex="-1" role="dialog" aria-labelledby="parameterItemForm" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="parameterItemForm">Add New Parameter Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- start of form for parameter items -->
      <div class="row">
        <div class="col-md-12">
        <form id="formParameterItems" action="" method="post">
        <!-- <form id="formParameterItems" method="post"> -->
            <div class="form-group">
              <label for="parameter_item">Parameter Item</label>
              <input type="text" class="form-control" id="parameter_item" name="parameter_item">
            </div>
            <div class="form-group">
              <label for="description">Additional Details / Description</label>
              <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
              <label for="document_needed_list">Needed Documents</label>
              <textarea rows="10" class="form-control" id="document_needed_list" name="document_needed_list"></textarea>
            </div>
            <div class="form-group">
              <label for="template_parameter_id">Template Parameter</label>
              <select id="template_parameter_id" class="form-control" name="template_parameter_id">
                <option value="">Choose Template Parameter</option>
                <?php if(isset($template_parameters)): ?>
                  <?php foreach ($template_parameters as $template_parameter): ?>
                    <option value="<?= $template_parameter['id'] ?>"><?= ucwords($template_parameter['parameter_code'].' - '.$template_parameter['title']) ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="parameter_section_id">Parameter Section</label>
              <select id="parameter_section_id" class="form-control" name="parameter_section_id">
                <option value="">Choose Parameter Section</option>
                <?php if(isset($parameter_sections)): ?>
                  <?php foreach ($parameter_sections as $parameter_section): ?>
                    <option value="<?= $parameter_section['id'] ?>"><?= ucwords($parameter_section['parameter_section_name']) ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="parent_parameter_item_id">Parent Parameter Item</label>
              <select id="parent_parameter_item_id" class="form-control" name="parent_parameter_item_id">
                <option value="">Choose Parent Parameter Item</option>
                <?php if(isset($parameter_items)): ?>
                  <?php foreach ($parameter_items as $parameter_item): ?>
                    <option value="<?= $parameter_item['id'] ?>"><?= ucwords($parameter_item['parameter_item']) ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <input type="hidden" id="accreditation_template_id" name="accreditation_template_id" value="<?= $accreditation_template[0]['id']?>">
            <input type="hidden" id="baseurl" value="<?php echo base_url(); ?>">
        </div>
      </div>
      <!-- end of form for parameter item -->
      </div>
      <div class="modal-footer">
        <button id="submit_parameter_item" type="submit" class="btn btn-primary">Save Parameter</button>
        </form>
      </div>
    </div>
  </div>
</div>
