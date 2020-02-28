<?php
namespace Modules\Accreditation\Controllers;
//
// use Modules\Accreditation\Models\AccreditationTemplatesModel;
use Modules\Accreditation\Models\AccreditationLevelsModel;
use Modules\Accreditation\Models\ParameterItemsModel;
use Modules\Documents\Models\AcademicDocumentsModel;
use Modules\Documents\Models\DocumentTypesModel;
use Modules\Accreditation\Models\ParameterSectionsModel;
use Modules\Accreditation\Models\TemplateParametersModel;
use Modules\SystemSettings\Models\AreasModel;
use Modules\SystemSettings\Models\ProgramsModel;
use Modules\UserManagement\Models\PermissionsModel;
// use Modules\UserManagement\Models\UsersModel;
use App\Controllers\BaseController;

class ParameterItems extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();
		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

	 public function getItems($itemParameter, $accreditation_template_id)
	 {
		 $model_documents = new AcademicDocumentsModel();
 		$data['documents'] = $model_documents->getAcademicDocumentWithCondition(['status'=> 'a']);

		 $model = new ParameterItemsModel();
		 $data['parameter_items_views'] = $model->getParameterItems(['template_parameter_id'=>$itemParameter, 'accreditation_template_id'=>$accreditation_template_id]);

		 $template_parameter_model = new TemplateParametersModel();
		 $data['parameterName'] = $template_parameter_model->find($itemParameter);

		 $data['function_title'] = "Create New Accreditation Template";
		 echo view('Modules\Accreditation\Views\parameter_items\parameter_indicators', $data);
	 }

	 public function tagdocuments()
	 {
		 $model = new ParameterItemsModel();
		 return json_encode($model->updateDocumentsTagged($_POST['tagged_documents'], $_POST['id']));
	 }

	   public function index($offset = 0)
	   {
	   	$this->hasPermissionRedirect('list-accreditation-template');
	   	$model = new ParameterItemsModel();
	   	 //kailangan ito para sa pagination
	     $data['all_items'] = $model->getParameterItems(['status'=> 'a']);
	     $data['offset'] = $offset;
			 $accre_level_model = new AccreditationLevelsModel;
			 $data['accreditation_levels'] = $accre_level_model->where(['status'=>'a'])->findAll();

			 $area_model = new AreasModel;
			 $data['areas'] = $area_model->where(['status'=>'a'])->findAll();

			 $document_type = new DocumentTypesModel;
			 $data['document_types'] = $document_type->where(['status' => 'a'])->findAll();

			 $parameter_section_model = new ParameterSectionsModel;
			 $data['parameter_sections'] = $parameter_section_model->where(['status' => 'a'])->findAll();
			 $document_model = new AcademicDocumentsModel;
			 $data['documents'] = $document_model->getAcademicDocumentWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' => $offset]);
			 // echo "<pre>";
			 // print_r($data['documents']);
			 // die();
			 $program_model = new ProgramsModel;
			 $data['academic_programs'] = $program_model->where(['status'=>'a'])->findAll();
			 if ($_GET) {
						 $data['rec'] = $_GET;
  					 $data['ats'] = $model->getAccreditataionTemplateWithFunction(['status'=> 'a'], $_GET);
			 }
			 else {
				 $data['ats'] = null;
			 }
			 // echo "<pre>";
			 // print_r($data['ats']);
			 // die();
			 $template_parameter_model = new TemplateParametersModel;
			 $data["item_parameters"] = $template_parameter_model->getDistictParametersInParameterItem($data['ats'][0]['parameter_section_id']);
	     $data['function_title'] = "Parameter Item";
	     $data['viewName'] = 'Modules\Accreditation\Views\parameter_items\index';
	     echo view('App\Views\theme\index', $data);
	   }

		 public function tag_documents(){
			 // echo "<pre>";
			 // print_r($_POST['documents']);
			 // die();
			 $model = new ParameterItemsModel();
			 if (isset($_POST['documents'])) {
				 $str = '[';
  			 foreach ($_POST['documents'] as $index => $value) {
  			 	$str .= $value.',';
  			 }
  			 $str = rtrim($str, ',');
  			 $str .= ']';
  			 $isTagged = 0;
			 }

			 if ($model->tagDocuments($_POST['parameter_id'], $str)) {
			 	$isTagged = 1;
			 }
			 if($isTagged == 1)
			 {
	 	 	 	 $_SESSION['success'] = 'You have tagged the documents';
	 			 $this->session->markAsFlashdata('success');
				 return redirect()->to(base_url('parameter-items'));
	 		 }
			 else
			 {
				$_SESSION['error'] = 'You have an error in tagging the documents';
				$this->session->markAsFlashdata('error');
				return redirect()->to(base_url('parameter-items'));
			 }
		 }

		 public function displayItems($itemParameter, $accreditation_template_id){
			$model = new ParameterItemsModel();
			$data['all_items'] = $model->getParameterItems(['status'=> 'a']);
 			$accre_level_model = new AccreditationLevelsModel;
 			$data['accreditation_levels'] = $accre_level_model->where(['status'=>'a'])->findAll();

 			$area_model = new AreasModel;
 			$data['areas'] = $area_model->where(['status'=>'a'])->findAll();

 			$document_type = new DocumentTypesModel;
 			$data['document_types'] = $document_type->where(['status' => 'a'])->findAll();

 			$parameter_section_model = new ParameterSectionsModel;
 			$data['parameter_sections'] = $parameter_section_model->where(['status' => 'a'])->findAll();
 			$document_model = new AcademicDocumentsModel;
 			$data['documents'] = $document_model->where(['status'=>'a'])->findAll();
			$data['ats'] = $model->getAccreditataionTemplateWithFunction(['status'=> 'a','template_parameter_id' =>$itemParameter ,'accreditation_template_id' => $accreditation_template_id]);
 			// echo "<pre>";
 			// print_r($data['documents']);
 			// die();
 			// $program_model = new ProgramsModel;
			echo view('Modules\Accreditation\Views\parameter_items\paramterItemsTable', $data);
		 }
 }
