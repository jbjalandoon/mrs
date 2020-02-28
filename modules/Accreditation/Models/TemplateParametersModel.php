<?php
namespace Modules\Accreditation\Models;

use CodeIgniter\Model;

class TemplateParametersModel extends \CodeIgniter\Model
{
    protected $table = 'template_parameters';

    protected $allowedFields = ['parameter_code', 'title', 'description', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getTemplateParameters()
    {
        return $this->findAll();
    }

    public function getDistictParametersInParameterItem($accreditation_template_id)
    {
      $db = \Config\Database::connect();

      $str = "SELECT DISTINCT(`b`.`template_parameter_id`), `b`.`accreditation_template_id`, a.* ";
      $str .= "FROM parameter_items b ";
      $str .= "INNER JOIN template_parameters a ON b.template_parameter_id = a.id ";
      $str .=" WHERE b.accreditation_template_id = '".$accreditation_template_id."'";
      $str .=" ORDER BY a.parameter_code ASC";
      // print_r($str); die();
    	$query = $db->query($str);
      return $query->getResultArray();
    }

  // public function getParameterItemsWithAccreditationTemplateId($accreditation_template_id)
	// {
  //   return $this->where(['accreditation_template_id'=>$accreditation_template_id, 'status'=>'a'])->findAll();
	// }

	// public function getAccreditataionTemplateWithFunction($args = [])
	// {
	// 	$db = \Config\Database::connect();
  //
	// 	$str = "SELECT a.*, b.accreditation_level, c.program_name, c.description, d.area_code, d.area_name FROM accreditation_templates a ";
  //   $str .= "LEFT JOIN accreditation_levels b ON a.accreditation_level_id = b.id ";
  //   $str .= "LEFT JOIN academic_programs c ON a.academic_program_id = c.id ";
  //   $str .= "LEFT JOIN areas d ON a.area_id = d.id ";
  //   $str .=" WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
  // 	$query = $db->query($str);
	//   return $query->getResultArray();
	// }
  //
  //
  //   public function addAccreditationTemplate($val_array = [])
  // 	{
  // 		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  // 		$val_array['status'] = 'a';
  // 	  return $this->save($val_array);
  // 	}
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
