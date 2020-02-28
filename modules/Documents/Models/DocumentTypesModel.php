<?php
namespace Modules\Documents\Models;

use CodeIgniter\Model;

class DocumentTypesModel extends \CodeIgniter\Model
{

    protected $table = 'document_types';

    protected $allowedFields = ['document_type_code', 'document_type_name', 'description','status', 'created_at','updated_at', 'deleted_at'];

  public function getDocumentTypeWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getDocumentTypeWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM document_types WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		$query = $db->query($str);
	  return $query->getResultArray();
	}

    public function getDepartments()
  	{
  	    return $this->findAll();
  	}

    public function addDocumentType($val_array = [])
  	{
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  	    return $this->save($val_array);
  	}

    public function editDocumentType($val_array = [], $id)
  	{
  		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  		return $this->update($id, $val_array);
  	}

    public function deleteDocumentType($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
