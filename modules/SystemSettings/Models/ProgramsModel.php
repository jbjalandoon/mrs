<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class ProgramsModel extends \CodeIgniter\Model
{
    protected $table = 'academic_programs';

    protected $allowedFields = ['program_name',  'description', 'program_head_id', 'status', 'created_at','updated_at', 'deleted_at'];

  public function getProgramWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getProgramWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM academic_programs WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		$query = $db->query($str);
	  return $query->getResultArray();
	}

    public function getArea()
  	{
  	    return $this->findAll();
  	}

    public function addAcademicProgram($val_array = [])
  	{
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  	    return $this->save($val_array);
  	}

    public function editAcademicProgram($val_array = [], $id)
  	{
  		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  		return $this->update($id, $val_array);
  	}

    public function deleteAcademicProgram($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
