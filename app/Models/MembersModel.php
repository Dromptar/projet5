<?php namespace App\Models;

use CodeIgniter\Model;

class MembersModel extends Model
{
    protected $table      = 'members';
    protected $primaryKey = 'member_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['pseudo', 'is_admin', 'pass', 'email', 'phone', 'registed_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'registed_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}