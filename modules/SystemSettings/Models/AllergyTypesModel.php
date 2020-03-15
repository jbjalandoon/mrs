<?php
namespace Modules\SystemSettings\Models;

use App\Models\BaseModel;

class AllergyTypesModel extends BaseModel
{
    protected $table = 'allergy_types';

    protected $allowedFields = ['name','description','status', 'created_at','updated_at', 'deleted_at'];

}
