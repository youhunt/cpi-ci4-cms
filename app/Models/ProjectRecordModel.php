<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectRecordModel extends Model
{
    protected $table = 'project_records';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = ['id','slug','title_en','title_id','location','application_type','client_name','project_year','description_en','description_id','image','gallery_json','sort_order','status','meta_title_en','meta_title_id','meta_description_en','meta_description_id'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
