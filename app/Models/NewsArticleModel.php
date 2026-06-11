<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsArticleModel extends Model
{
    protected $table = 'news_articles';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = ['id','slug','title_en','title_id','excerpt_en','excerpt_id','content_en','content_id','image','published_at','status','meta_title_en','meta_title_id','meta_description_en','meta_description_id'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
