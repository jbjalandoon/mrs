<?php
namespace Modules\Accreditation\Models;

use CodeIgniter\Model;

class AccreditationLevelsModel extends \CodeIgniter\Model
{
    protected $table = 'accreditation_levels';

    protected $allowedFields = ['template_code', 'template_name', 'description', 'accreditation_level_id', 'area_id', 'is_finalized', 'status', 'created_at','updated_at', 'deleted_at'];

  public function getAccreditationTemplateWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getAccreditataionTemplateWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.accreditation_level, c.program_name, c.description, d.area_code, d.area_name FROM accreditation_templates a ";
    $str .= "LEFT JOIN accreditation_levels b ON a.accreditation_level_id = b.id ";
    $str .= "LEFT JOIN academic_programs c ON a.academic_program_id = c.id ";
    $str .= "LEFT JOIN areas d ON a.area_id = d.id ";
    $str .=" WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
  	$query = $db->query($str);
	  return $query->getResultArray();
	}


    public function addAccreditationTemplate($val_array = [])
  	{
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  	  return $this->save($val_array);
  	}

    public function editArea($val_array = [], $id)
  	{
  		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  		return $this->update($id, $val_array);
  	}

    public function deleteArea($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
