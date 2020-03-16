<?php
namespace Modules\Patients\Models;

use App\Models\BaseModel;

class RelativesModel extends BaseModel
{
    protected $table = 'patient_relatives';

    protected $allowedFields = ['patient_id','name','contact_no','relation','address','status', 'created_at','updated_at', 'deleted_at'];

}
