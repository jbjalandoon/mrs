<?php
namespace Modules\Documents\Models;

use CodeIgniter\Model;

class AcademicDocumentsModel extends \CodeIgniter\Model
{

    protected $table = 'academic_documents';

    protected $allowedFields = ['doc_name', 'doc_attachment', 'document_type_id', 'description',  'uploader_id', 'status', 'created_at','updated_at', 'deleted_at'];

  public function getAcademicDocumentWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getAcademicDocumentWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str  = "SELECT a.*, b.document_type_code, b.document_type_name, f.lastname, f.firstname FROM academic_documents a ";
    $str .= "LEFT JOIN document_types b ON a.document_type_id = b.id ";
    $str .= "LEFT JOIN users f ON a.uploader_id = f.id ";
    $str .=" WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];

		$query = $db->query($str);
	  return $query->getResultArray();
	}

	public function getAcademicDocuemntById($id)
	{
		$db = \Config\Database::connect();

		$str  = "SELECT a.*, b.document_type_code, b.document_type_name, f.lastname, f.firstname FROM academic_documents a ";
    $str .= "LEFT JOIN document_types b ON a.document_type_id = b.id ";
    $str .= "LEFT JOIN users f ON a.uploader_id = f.id ";
    $str .=" WHERE a.id = ".$id;

		$query = $db->query($str);
	  return $query->getResultArray();
	}

	// public function getAcademicDocumentWithFunction($args = [])
	// {
	// 	$db = \Config\Database::connect();
  //
	// 	$str = "SELECT * FROM document_types WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
	// 	$query = $db->query($str);
	//   return $query->getResultArray();
	// }


    public function addAcademicDocument($val_array = [])
  	{
      // print_r($val_array); die();
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  	  return $this->save($val_array);
  	}

    public function editAcademicDocument($val_array = [], $id)
  	{
      // print_r($val_array); die();
  		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  		return $this->update($id, $val_array);
  	}

  //   public function deleteDocumentType($id)
	// {
	// 	$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	// 	$val_array['status'] = 'd';
	// 	return $this->update($id, $val_array);
	// }
}
