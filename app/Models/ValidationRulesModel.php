<?php namespace App\Models;

use CodeIgniter\Model;

class ValidationRulesModel extends Model
{
    protected $validationRules    = [
        'username'     => 'required|alpha_numeric_space|min_length[3]',
        'email'        => 'required|valid_email|is_unique[users.email]',
        'password'     => 'required|min_length[8]',
        'pass_confirm' => 'required_with[password]|matches[password]'
    ];

    protected $validationMessages = [
        'username'        => [
            'is_unique' => 'Sorry. That username has already been taken. Please choose another.',
            'min_length' => 'Too short man!'
        ],
        'email'        => [
            'is_unique' => 'Sorry. That email has already been taken. Please choose another.'
        ],
        'password'        => [
            'min_length' => 'Too short man!'
        ],
        'pass_confirm'        => [
            'matches' => 'Incorrect passwords.'
        ]
    ];
}