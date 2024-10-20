<?php
class Adminn {
    public $role_id;
    public $role_name;
    
    public function __construct($role_id, $role_name) {
        $this->role_id = $role_id;
        $this->role_name = $role_name;
    }

    public function cetakk() {
        echo "id : ".$this->role_id."<br>";
        echo "nama : ".$this->role_name."<br>";
    }
}

class SuperAdminn {
    public $admin;  
    public $role_description;

    public function __construct(Adminn $admin, $role_description) {
        $this->admin = $admin; 
        $this->role_description = $role_description;
    }

    public function cetakSuperAdminn() {
        $this->admin->cetakk();
        echo "desc : ".$this->role_description."<br>";
    }
}

$adminn = new Adminn(7, "jeno");
$superAdminn = new SuperAdminn($adminn, "dream");
$superAdminn->cetakSuperAdminn();
?>
