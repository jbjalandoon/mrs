<?php
namespace Modules\Documents\Controllers;

use Modules\Documents\Models\AcademicDocumentsModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\UserDetailsModel;
use Modules\Documents\Models\DocumentTypesModel;
use App\Controllers\BaseController;

class AcademicDocuments extends BaseController
{
	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);

		$user_details_model = new UserDetailsModel();
		$user_credentials = $user_details_model->where('user_id', $_SESSION['uid'])->find();
		//print_r($user_credentials); die();

		if(!isset($_SESSION['user_area_id']))
		{
			if(!empty($user_credentials['area_id']))
			{
				$_SESSION['user_area_id'] = $user_credentials['area_id'];
			}

			if(!empty($user_credentials['academic_program_id']))
			{
					$_SESSION['user_academic_program_id'] = $user_credentials['academic_program_id'];
			}
			// $_SESSION['user_details'] = [
			// 	'area_id' => $user_credentials['area_id'],
			// 	'academic_program_id' => $user_credentials[0]['academic_program_id'],
			// ];
		}

	  // print_r($_SESSION['user_details']['academic_program_id']); die();
	}

    public function index($offset = 0)
    {
			// print_r($_SESSION['user_details']); die();
			$model_document_types = new DocumentTypesModel();
			$data['document_types'] = $model_document_types->where('status', 'a')->findAll();

    	$this->hasPermissionRedirect('list-academic-document');
    	$model = new AcademicDocumentsModel();

     	$data['all_items'] = $model->getAcademicDocumentWithCondition(['status'=> 'a']);
     	$data['offset'] = $offset;

      $data['academic_documents'] = $model->getAcademicDocumentWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
			// die("here");

			// print_r($data['academic_documents']); die();

      $data['function_title'] = "Academic Document List";
      $data['viewName'] = 'Modules\Documents\Views\academic_documents\index';
      echo view('App\Views\theme\index', $data);
    }

    public function showAllDocuments($offset = 0)
    {
			// print_r($_SESSION['user_details']); die();
			$model_document_types = new DocumentTypesModel();
			$data['document_types'] = $model_document_types->where('status', 'a')->findAll();

    	//$this->hasPermissionRedirect('list-academic-document');
    	$model = new AcademicDocumentsModel();

     	$data['all_items'] = $model->getAcademicDocumentWithCondition(['status'=> 'a']);
     	$data['offset'] = $offset;

      $data['academic_documents'] = $model->getAcademicDocumentWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
			// die("here");

			// print_r($data['academic_documents']); die();

      $data['function_title'] = "Academic Document List";
      //$data['viewName'] = 'Modules\Documents\Views\academic_documents\index';
      echo view('Modules\Documents\Views\academic_documents\show_all', $data);
    }

    public function show_academic_document($id)
	 {

		$this->hasPermissionRedirect('show-academic-document');
		$data['permissions'] = $this->permissions;
		// $user_model = new UsersModel();
		// $data['users'] = $user_model->findAll();

		$model = new AcademicDocumentsModel();
		// die("here");

		$data['document'] = $model->getAcademicDocuemntById($id);
		$data['function_title'] = "Academic Document Details";
    $data['viewName'] = 'Modules\Documents\Views\academic_documents\documentDetails';
    echo view('App\Views\theme\index', $data);
	}

    public function upload_academic_document()
    {
    	$this->hasPermissionRedirect('upload-academic-document');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$model_document_types = new DocumentTypesModel();
			$data['document_types'] = $model_document_types->where('status', 'a')->findAll();

    	helper(['form', 'url']);
    	$model = new AcademicDocumentsModel();

    	if(!empty($_POST))
    	{

				$validated = $this->validate([
            'doc_attachment' => [
                'rules' => 'uploaded[doc_attachment]|ext_in[doc_attachment,doc,docx,ppt,pptx,odp,odt,pdf,pps]',
								'label' => 'Document Attachment'
            ],
						'doc_name' => ['label' => 'Document Name', 'rules' => 'required'],
    				'document_type_id' => ['label' => 'Document Type', 'rules' => 'required']
        ]);

	    	if (!$validated)
		    {
		    	  $data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Upload Academic Program Document";
						$data['viewName'] = 'Modules\Documents\Views\academic_documents\frmDocumentUpload';
  	        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
						$file_array = [
							'doc_attachment' => $_FILES['doc_attachment']['name'],
							'doc_name' => $_POST['doc_name'],
							'description' => $_POST['description'],
							'uploader_id' => $_SESSION['uid'],
							'document_type_id' => $_POST['document_type_id']
							];

		        if($model->addAcademicDocument($file_array))
		        {
							$doc_type = $model_document_types->where('status', 'a')->find($_POST['document_type_id']);

							$file = $this->request->getFile('doc_attachment');
            	$file->move(ROOTPATH."uploads/".strtoupper($doc_type['document_type_code']));

		        	$_SESSION['success'] = 'You have uploaded a new academic document';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('academic-documents'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in uploading a new academic document';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('academic-documents'));
		        }
		    }
    	}
    	else
    	{
	    	  $data['function_title'] = "Upload Academic Program Document";
	        $data['viewName'] = 'Modules\Documents\Views\academic_documents\frmDocumentUpload';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_academic_document($id)
    {
    	$this->hasPermissionRedirect('edit-academic-document');
    	helper(['form', 'url']);
    	$model = new AcademicDocumentsModel();
    	$valResult = $model->getAcademicDocuemntById($id);
			$data['rec'] = $valResult[0];
    	$data['permissions'] = $this->permissions;

			$model_document_types = new DocumentTypesModel();
			$data['document_types'] = $model_document_types->where('status', 'a')->findAll();

    	if(!empty($_POST))
    	{
				$arrFile = [];
				if(!empty($_FILES['doc_attachment']['name']))
				{
					$arrFile = [
							'rules' => 'ext_in[doc_attachment,doc,docx,ppt,pptx,odp,odt,pdf,pps]',
							'label' => 'Document Attachment'
					];
				}
				// print_r($arrFile)."<br>";
				// print_r($_FILES); die();
				$validated = $this->validate([
						'doc_attachment' => $arrFile,
						'doc_name' => ['label' => 'Document Name', 'rules' => 'required'],
						'document_type_id' => ['label' => 'Document Type', 'rules' => 'required']
				]);

				if (!$validated)
				{
						$data['errors'] = \Config\Services::validation()->getErrors();
						$data['function_title'] = "Modify Academic Document";
		        $data['viewName'] = 'Modules\Documents\Views\academic_documents\frmDocumentUpload';
		        echo view('App\Views\theme\index', $data);
				}
				else
				{
						if(!empty($_FILES['doc_attachment']['name']))
						{
							$file_array = [
								'doc_attachment' => $_FILES['doc_attachment']['name'],
								'doc_name' => $_POST['doc_name'],
								'description' => $_POST['description'],
								'uploader_id' => $_SESSION['uid'],
								'document_type_id' => $_POST['document_type_id']
								];
						}
						else {
							$file_array = [
								'doc_name' => $_POST['doc_name'],
								'description' => $_POST['description'],
								'uploader_id' => $_SESSION['uid'],
								'document_type_id' => $_POST['document_type_id']
								];
						}


						if($model->editAcademicDocument($file_array, $id))
						{
							$doc_type = $model_document_types->where('status', 'a')->find($_POST['document_type_id']);
							$origFile = ROOTPATH."uploads/".strtoupper($doc_type['document_type_code']).'/'.$data['rec']['doc_attachment'];
							// echo $origFile; die("here");
							if(!empty($_FILES['doc_attachment']['name']))
							{
								$newFile = ROOTPATH."uploads/".strtoupper($doc_type['document_type_code']).'/'.$_FILES['doc_attachment']['name'];

								if (!file_exists($newFile) && $origFile != $newFile) {
									$file = $this->request->getFile('doc_attachment');
									$file->move(ROOTPATH."uploads/".strtoupper($doc_type['document_type_code']));
									unlink($origFile);
								}

								if (!file_exists($newFile) && $origFile == $newFile) {
									unlink($origFile);
									$file = $this->request->getFile('doc_attachment');
									$file->move(ROOTPATH."uploads/".strtoupper($doc_type['document_type_code']));
								}
							}

							$_SESSION['success'] = 'You have uploaded a new academic document';
							$this->session->markAsFlashdata('success');
							return redirect()->to(base_url('academic-documents'));
						}
						else
						{
							$_SESSION['error'] = 'You have an error in uploading a new academic document';
							$this->session->markAsFlashdata('error');
							return redirect()->to(base_url('academic-documents'));
						}
				}
    	}
    	else
    	{
	    		$data['function_title'] = "Modify Academic Document";
					// print_r($data['rec']); die("here");
	        $data['viewName'] = 'Modules\Documents\Views\academic_documents\frmDocumentUpload';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    // public function delete_document_type($id)
    // {
    // 	$this->hasPermissionRedirect('delete-document-type');
		//
    // 	$model = new DocumentTypesModel();
    // 	$model->deleteDocumentType($id);
    // }
}
