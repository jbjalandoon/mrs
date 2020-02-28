<table class="table table-bordered">
 <thead class="thead-dark">
   <tr class="text-center">
     <!-- <th>#</th> -->
     <th>Parameter Item</th>
     <th>Description</th>
     <th>Document Needed</th>
     <th>Template</th>
     <!-- <th>Level</th>
     <th>Program</th>
     <th>Area</th> -->
     <th>Documents</th>
   </tr>
 </thead>
 <tbody>
   <?php if (empty($ats)): ?>
     <tr>
       <th colspan="9" class="text-center">No Entry</th>
     </tr>
   <?php else: ?>
     <?php $cnt = 1; ?>
     <?php foreach ($parameter_sections as $parameter_section): ?>
         <tr  class="table-dark">
           <th colspan="9"><?=strtoupper($parameter_section['parameter_section_name'])?></th>
         </tr>
       <?php foreach($ats as $at): ?>
           <?php if ($at['parameter_section_id'] == $parameter_section['id']): ?>
             <tr id="<?php echo $at['id']; ?>">
               <!-- <th scope="row"><?= $cnt++ ?></th> -->
               <td><?= strtoupper($at['parameter_item']) ?></td>
               <td><?= strtoupper($at['description']) ?></td>
               <?php
               if(!empty($at['document_needed_list'])){
                 $arr_doc_list = explode('-', $at['document_needed_list']);
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
               <td><?= strtoupper($at['template_code'] .' - '. $at['template_name']) ?></td>
               <!-- <td><?= strtoupper($at['accreditation_level']) ?></td>
               <td><?= strtoupper($at['program_name']) ?></td>
               <td><?= strtoupper($at['area_name']) ?></td> -->
               <td class="text-center">
                 <?php if (empty($at['tagged_documents'])): ?>
                   [No Tagged Documents]
                 <?php else: ?>
                   <?php getdocuments($at['tagged_documents'], $documents) ?>
                 <?php endif; ?>
                 <br>
                 <?php if (!empty($at['document_needed_list'])): ?>
                   <button onClick= "getAllDocuments(<?=$at['id']?>,<?= $at['accreditation_template_id'] ?>, <?= $at['tagged_documents'] ?>)" class="btn btn-info btn-sm">
                     <i class="fas fa-tags"></i> Tag Document(s)
                   </button>
                 <?php endif; ?>
               </td>
             </tr>
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

           <?php endif; ?>
       <?php endforeach; ?>
     <?php endforeach; ?>
   <?php endif; ?>
 </tbody>
</table>
