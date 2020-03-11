<?php
namespace Modules\Patients\Models;

use App\Models\BaseModel;

class PatientsModel extends BaseModel
{
    protected $table = 'patients';

    protected $allowedFields = ['last_name','first_name','middle_name','extension_name','birthdate','gender','cellphone_no','address','city','province','postal','relative_name','relative_contact','status', 'created_at','updated_at', 'deleted_at'];

}
