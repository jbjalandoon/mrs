<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class DepartmentsModel extends \CodeIgniter\Model
{
    protected $table = 'departments';

    protected $allowedFields = ['department_name', 'description', 'dept_head_id','status', 'created_at','updated_at', 'deleted_at'];

  public function getDepartmentWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getDepartmentWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.lastname, b.firstname FROM departments a LEFT JOIN users b ON a.dept_head_id = b.id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		$query = $db->query($str);
	  return $query->getResultArray();
	}

    public function getDepartments()
  	{
  	    return $this->findAll();
  	}

    public function addDepartment($val_array = [])
  	{
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  	    return $this->save($val_array);
  	}

    public function editDepartments($val_array = [], $id)
  	{
  		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  		return $this->update($id, $val_array);
  	}

    public function deleteDepartment($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
