<?php namespace App\Models;

use CodeIgniter\Model;

class MembersModel extends Model
{
    protected $table      = 'members';
    protected $primaryKey = 'member_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['pseudo', 'pass', 'email', 'regist_date'];

    protected $useTimestamps = true;
    protected $createdField  = 'post_created_at';
    protected $updatedField  = 'post_updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}