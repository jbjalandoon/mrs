<?php
namespace Modules\Patients\Models;

use App\Models\BaseModel;

class DiagnosisModel extends BaseModel
{
    protected $table = 'diagnosis';

    protected $allowedFields = ['condition_id','visit_id','user_id','is_confirmed','diagnosis_type_id','status', 'created_at','updated_at', 'deleted_at'];

}
