<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class AreasModel extends \CodeIgniter\Model
{
    protected $table = 'areas';

    protected $allowedFields = ['area_code', 'area_name', 'description', 'area_head_id','status', 'created_at','updated_at', 'deleted_at'];

  public function getAreaWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getAreaWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.lastname, b.firstname FROM areas a LEFT JOIN users b ON a.area_head_id = b.id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		$query = $db->query($str);
	  return $query->getResultArray();
	}

    public function getArea()
  	{
  	    return $this->findAll();
  	}

    public function addArea($val_array = [])
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
