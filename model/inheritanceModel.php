<?php
  class Admin {
    protected $role_id;
    protected $role_name;

    public function cetak(){
        echo "id : ".$this->role_id."<br>";
        echo "nama : ".$this->role_name."<br>";
    }
  }

  class superAdmin extends Admin {
    public $role_description;

    public function __construct($role_id, $role_name, $role_description) {
        $this->role_id = $role_id;
        $this->role_name = $role_name;
        $this->role_description = $role_description;
    }

    public function cetakAdmin(){
        $this->cetak();
        echo "desc : ".$this->role_description."<br>";
    }
  }

  $objsuperAdmin = new superAdmin(1, "mada", "mahasiswa");
  $objsuperAdmin->cetakAdmin();

?>