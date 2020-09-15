<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'blog_posts';
    protected $primaryKey = 'post_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['author', 'title', 'content'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}