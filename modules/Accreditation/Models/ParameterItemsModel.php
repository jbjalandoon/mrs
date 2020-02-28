<?php
namespace Modules\Accreditation\Models;

use CodeIgniter\Model;

class ParameterItemsModel extends \CodeIgniter\Model
{
    protected $table = 'parameter_items';

    protected $allowedFields = ['parameter_item', 'description', 'document_needed_list', 'tagged_documents', 'parameter_section_id', 'accreditation_template_id', 'template_parameter_id', 'parent_parameter_item_id', 'status', 'created_at','updated_at', 'deleted_at'];

  public function getParameterItemsWithAccreditationTemplateId($accreditation_template_id)
	{
    return $this->where(['accreditation_template_id'=>$accreditation_template_id, 'status'=>'a'])->findAll();
	}

  public function getParameterItems($conditions = [])
	{
    $conditions['status'] = 'a';
    // print_r($conditions);
    foreach($conditions as $key => $val)
    {
      $this->where($key, $val);
    }
    return $this->findAll();
	}



	public function getAccreditataionTemplateWithFunction($args = [], $search = [])
	{
    $this->select('parameter_items.*');
    $this->select('b.parameter_section_name');
    $this->select('b.description');
    $this->select('c.template_code');
    $this->select('c.template_name');
    $this->select('d.accreditation_level');
    $this->select('e.program_name');
    $this->select('f.area_name');
    $this->select('g.title');

    $this->join('parameter_sections b','parameter_items.parameter_section_id = b.id','left');
    $this->join('accreditation_templates c','parameter_items.accreditation_template_id = c.id','left');
    $this->join('accreditation_levels d','c.accreditation_level_id = d.id','left');
    $this->join('academic_programs e','c.academic_program_id = e.id','left');
    $this->join('areas f','c.area_id = f.id','left');
    $this->join('template_parameters g','parameter_items.template_parameter_id = g.id','left');

    $this->where('parameter_items.status', $args['status']);

    if (isset($args['template_parameter_id']) || isset($args['accreditation_template_id'])) {
      $this->where('parameter_items.template_parameter_id', $args['template_parameter_id']);
      $this->where('parameter_items.accreditation_template_id', $args['accreditation_template_id']);
    }
    if (!empty($search)) {
      foreach ($search as $field => $value) {
        if ($value != null) {
          $this->where('c.'.$field, $value);
        }
      }
    }

    return $this->findAll();
	}

    public function addParameterItem($val_array = [])
  	{
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
      // return $val_array;

      return $this->save($val_array);
  	}

    public function updateDocumentsTagged($tagged_document = [], $id)
  	{
      $data['tagged_documents'] = '['.implode(',',$tagged_document).']';
  		$data['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
      // return $data;
  		return $this->update($id, $data);
  	}

    public function tagDocuments($id, $value){
      $val_array['tagged_documents'] = $value;
      return $this->update($id, $val_array);
    }

  //
  //   public function editArea($val_array = [], $id)
  // 	{
  // 		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  // 		$val_array['status'] = 'a';
  // 		return $this->update($id, $val_array);
  // 	}

  //
  //   public function deleteArea($id)
	// {
	// 	$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	// 	$val_array['status'] = 'd';
	// 	return $this->update($id, $val_array);
	// }
}
