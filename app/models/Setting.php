<?php 

class Setting {
    
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getUserSettings($user_id){
        $this->db->query("SELECT * FROM users INNER JOIN user_settings ON users.id = user_settings.user_id WHERE users.id = $user_id");
        return $this->db->single();
    }


    public function updatePlan($data) {
        $this->db->query("UPDATE user_settings SET wake_up = :wake_up ,go_sleep = :go_sleep ,eating_count = :eating_count WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':wake_up', $data['wake_up']);
        $this->db->bind(':go_sleep', $data['go_sleep']);
        $this->db->bind(':eating_count', $data['eating_count']);
          
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function updateBreakfast($data){
        $this->db->query("UPDATE user_settings SET breakfast = :breakfast WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':breakfast', $data['randomChangeBreakfast']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateBrunch($data){
        $this->db->query("UPDATE user_settings SET brunch = :brunch WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':brunch', $data['brunch']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateLunch($data){
        $this->db->query("UPDATE user_settings SET lunch = :lunch WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':lunch', $data['lunch']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateAfternoon($data){
        $this->db->query("UPDATE user_settings SET afternoon_meal = :afternoon WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':afternoon', $data['afternoon']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateDinner($data){
        $this->db->query("UPDATE user_settings SET dinner = :dinner WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':dinner', $data['dinner']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateEvening($data){
        $this->db->query("UPDATE user_settings SET evening_meal = :evening WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':evening', $data['evening']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}