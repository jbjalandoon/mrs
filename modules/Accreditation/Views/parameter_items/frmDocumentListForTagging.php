<!-- Modal -->
<div class="modal fade" id="documentListForTagging" tabindex="-1" role="dialog" aria-labelledby="parameterItemForm" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Available Documents for Tagging</h5>
      </div>
      <div class="modal-body" id="docList">
        <!-- <div class="container">
          <div class="row">
            <div class="col-12"> -->
              <form>
                <div class="form-group">
                  <!-- <input type="hidden" name="parameter_item_id" value="" id="parameter_item_id"> -->
                  <select class="js-example-basic-multiple form-control" style="width: 100%" id="academic_document_ids" name="academic_document_ids[]" multiple="multiple">
                    <?php foreach($documents as $document): ?>
                    <option value="<?=$document['id']?>"><?=strtoupper($document['doc_name'])?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
            <!-- </div>
          </div>
        </div> -->
      </div>
      <div class="modal-footer">
        <button id="btnTagging" type="submit" class="btn btn-primary">Tag the selected documents to an indicator</button>
        </form>
      </div>
    </div>
  </div>
</div>
