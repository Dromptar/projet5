<?php namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        if (! $this->validate([]))
        {
            echo view('Signup', [
                'validation' => $this->validator
            ]);
        }
        else
        {
            echo view('Success');
        }
    }
}

	/*public function index()
	{
        helper(['form']);
        $data=[];
        $data['categories'] = [
            'Student',
            'Teacher',
            'Principle'
        ];

        if($this ->request ->getMethod() == 'POST'){

            $rules = [
                'email' => 'required'
            ];

            if($this->validate($rules)){
                // Then do database insertion
                // login user
            }else {
                $data['validation'] = $this->validator;

            }
        }


		return view('form', $data);
	}*/

	

