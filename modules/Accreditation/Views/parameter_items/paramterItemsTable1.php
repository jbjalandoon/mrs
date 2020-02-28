<table class="table table-bordered">
 <thead class="thead-dark">
   <tr class="text-center">
     <th>#</th>
     <th>Parameter Item</th>
     <th>Description</th>
     <th>Document Needed</th>
     <th>Template</th>
     <th>Level</th>
     <th>Program</th>
     <th>Area</th>
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
               <th scope="row"><?= $cnt++ ?></th>
               <td><?= strtoupper($at['parameter_item']) ?></td>
               <td><?= strtoupper($at['description']) ?></td>
               <td>
                 <ul>
                   <li>
                     <?= str_replace(',', '</li><li>', strtoupper($at['document_needed_list'])) ?>
                   </li>
                 </ul>
               </td>
               <td><?= strtoupper($at['template_code'] .' - '. $at['template_name']) ?></td>
               <td><?= strtoupper($at['accreditation_level']) ?></td>
               <td><?= strtoupper($at['program_name']) ?></td>
               <td><?= strtoupper($at['area_name']) ?></td>
               <td class="text-center">
                 <?php foreach ($documents as $document): ?>
                   <?php
                     $tagged = substr($at['tagged_documents'], 0, -1);
                     $tagged = ltrim($tagged, '[');
                     $finalTagged = explode(',',$tagged);
                     if(in_array($document['id'], $finalTagged))
                     {
                       ?>
                         <a href="<?= base_url().'uploads/'.strtoupper($document['document_type_code']).'/'.$document['doc_attachment'] ?>" target="_blank"><i class="far fa-file-alt"></i>
                           <?= $document['doc_name']; ?>
                         </a>
                       <?php
                     }
                   ?>
                 <?php endforeach; ?>
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pa<?=$at['id']?>">
                   TAG
                 </button>
               </td>
             </tr>
             <div class="modal fade" id="pa<?=$at['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel"><?=ucwords($at['parameter_item'])?></h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                     </button>
                   </div>
                   <div class="modal-body">
                     <form class="" action="<?=base_url() . 'parameter-items/tag'?>" method="post">
                       <label for="tagged_documents">Documents</label>
                       <select class="js-example-basic-multiple form-control document-tagging" id="academic_document_ids" name="documents[]" multiple="multiple">
                         <?php foreach ($document_types as $document_type): ?>
                           <optgroup label="<?=strtoupper($document_type['document_type_name'])?>">
                             <?php foreach ($documents as $document): ?>
                               <?php if ($document_type['id'] == $document['document_type_id']): ?>
                                 <?php
                                   $tagged = substr($at['tagged_documents'], 0, -1);
                                   $tagged = ltrim($tagged, '[');
                                   $finalTagged = explode(',',$tagged);
                                 ?>
                                 <option value="<?=$document['id']?>" <?=in_array($document['id'], $finalTagged) ? 'selected': ''?>><?=$document['doc_name']?></option>
                               <?php endif; ?>
                             <?php endforeach; ?>
                           </optgroup>
                         <?php endforeach; ?>
                       </select>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input type="hidden" name="parameter_id" value="<?=$at['id']?>">
                     <button type="submit" class="btn btn-primary">Save changes</button>
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
