<?php

/**
 * User Model
 */
class User extends Model
{

    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'rank',
        'date',
        'state',
        'phone',
        'dob',
        'image',
        'category',
        'session',
        'abb_sch_name',

    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password',
        'create_admission_no'
    ];
    protected $beforeUpdate = [
        'hash_password',
    ];


    public function validate($DATA)
    {
        $this->errors = array();

        //check for first name
        if (empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in first name";
        }

        //check for last name
        if (empty($DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in last name";
        }


        //check for email
        if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        //check if email exists
        // if(trim($id) == ""){
        //     if($this->where('email',$DATA['email']))
        //     {
        //         $this->errors['email'] = "That email is already in use";
        //     }
        // }else{
        //     if($this->query("select email from $this->table where email = :email && user_id != :id",['email'=>$DATA['email'],'id'=>$id]))
        //     {
        //         $this->errors['email'] = "That email is already in use";
        //     }
        // }

        if(isset($DATA['password'])){

            if(empty($DATA['password']) || $DATA['password'] !== $DATA['password2'])
            {
                $this->errors['password'] = "Passwords do not match";
            }

            //check for password length
            if(strlen($DATA['password']) < 8)
            {
                $this->errors['password'] = "Password must be at least 8 characters long";
            }
        }


        //check for session
        if (empty($DATA['session']) || !preg_match('/^[0-9]*$/', $DATA['phone'])) {
            $this->errors['session'] = "Only numbers allowed in session";
        }

        //check for session length
        if (strlen($DATA['session']) < 2) {
            $this->errors['session'] = "session must be at least 2 characters long";
        }

           //check for abb_sch_name
           if (empty($DATA['abb_sch_name']) || !preg_match('/^[a-zA-Z]+$/', $DATA['abb_sch_name'])) {
            $this->errors['abb_sch_name'] = "Only letters allowed in School name";
        }

        //check for abb_sch_name length
        // if (strlen($DATA['abb_sch_name']) < 4) {
        //     $this->errors['abb_sch_name'] = "Abb school name maximum 5 characters";
        // }

        $state = [
            'Abia', 'Adamawa', 'Akwa_Ibom', 'Anambra', 'Bauchi', 'Benue', 'Borno', 'Cross_Rivers',
            'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Gombe', 'Imo', 'Jigawa', 'Kaduna', 'Kano', 'Katsina',
            'Kebbi', 'Kogi', 'Kwara', 'Lagos', 'Nasarawa', 'Niger', 'Ogun', 'Ondo', 'Osun', 'Oyo', 'Plateau', 'Rivers',
            'Sokoto', 'Taraba', 'Yobe', 'Zamfara', 'FCT_Abuja'
        ];
        if (empty($DATA['state']) || !in_array($DATA['state'], $state)) {
            $this->errors['state'] = "state is not valid";
        }

        //check for phone
        if (empty($DATA['phone']) || !preg_match('/^[0-9]*$/', $DATA['phone'])) {
            $this->errors['phone'] = "Only numbers allowed in phone";
        }


        //check for gender
        $genders = ['female', 'male'];
        if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
            $this->errors['gender'] = "Gender is not valid";
        }

        //check for rank
        $ranks = ['student', 'reception', 'teacher', 'admin', 'super_admin'];
        if (empty($DATA['rank']) || !in_array($DATA['rank'], $ranks)) {
            $this->errors['rank'] = "Rank is not valid";
        }
        // check for category
        $category = ['BASIC','JSS','SSS','STF'];
        if(empty($DATA['category']) || !in_array($DATA['category'], $category))
        {
            $this->errors['category'] = "category is not valid";
        }


        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function make_user_id($data)
    {
        $data['user_id'] =  strtolower($data['firstname'] . "." . $data['lastname']);

        while ($this->where('user_id', $data['user_id'])) {
            $data['user_id'] .= rand(10, 9999);
        }
        return $data;
    }


    public function create_admission_no($data)
    {
        $data['admission_no'] = $data['abb_sch_name']."/"  . $data['category'] . "/" . $data['session'] . "/" . rand(0001, 9999);

        while ($this->where('admission_no', $data['admission_no'])) {
            $data['admission_no'] .= rand(10, 9999);
        
    }
        return $data;
    }

    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function hash_password($data)
    {
        if(isset($data['password'])){
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        } 
               return $data;
    }
}
