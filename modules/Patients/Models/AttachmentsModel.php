<?php
namespace Modules\Patients\Models;

use App\Models\BaseModel;

class AttachmentsModel extends BaseModel
{
    protected $table = 'attachments';

    protected $allowedFields = ['name','visit_id','file','user_id','contact_no','relation','address','status', 'created_at','updated_at', 'deleted_at'];

}
