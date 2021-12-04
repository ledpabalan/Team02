<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    private $table = "users";

    public function __construct()
    {
        parent::__construct();
    }

    public function createUser($data){


        if(!$this -> checkUsernameIfExists($data['user_username'])){
            $data['user_password'] = md5($data['user_password']); //hashing password using m5 algo
           // $data['user_pwdRepeat'] = md5($data['user_password']); //hashing password using m5 algo
             $data['user_acc_status'] = "Active";
             $data['user_acc_createddate'] = date("F j, Y, g:i a");  
             $data['user_profpic_URL'] = "https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg";
     
             $this -> db -> insert($this -> table, $data);

        }
        else {
            $data['user_password'] = md5($data['user_password']); //hashing password using m5 algo
            $data['user_acc_status'] = "Active";
            $data['user_acc_createddate'] = time();
            unset($data['user_pwdRepeat']);
            $this -> db -> insert($this -> table, $data);
        }

        return;
    }

    public function checkUsernameIfExists($user_username){
        if(isset($user_username) && $user_username != null){
            $this->db->where('user_username', $user_username);
        }

        $query = $this -> db -> get($this -> table); 
        $return = $query -> result_array();
        echo"Registered Failed!";

        print_r($return);

        if(count($return) > 0 )
            return true;
            echo"Registered Successfully!";

        return false;
        
    }

    public function login($user_username, $user_password) {
        $this->db->where( 'user_username', $user_username);
        $this->db->where( 'user_password', md5($user_password));
        $query = $this->db->get ($this->table);
        $return = $query->result_array();
        if(count($return) > 0)
            return $return;
        return false;
    }


    public function getUsers($id = null){
        if(isset($id) && $id != null){
            $this->db->where('id', $id);
        }

        $query = $this -> db -> get($this -> table); 

        return $query -> result_array();
    }


}
