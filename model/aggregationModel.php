<?php
class Adminnn {
    public $role_id;
    public $role_name;

    public function cetakkk() {
        echo "id : ".$this->role_id."<br>";
        echo "nama : ".$this->role_name."<br>";
    }
}

class SuperAdminnn {
    public $role_description;
    public $adminnn;

    public function __construct($adminnn, $role_description) {
        $this->adminnn = $adminnn;
        $this->role_description = $role_description;
    }

    public function cetakSuperAdminnn() {
        $this->adminnn->cetakkk();
        echo "desc : ".$this->role_description."<br>";
    }
}

$objAdminnn = new Adminnn();
$objAdminnn->role_id = 4;
$objAdminnn->role_name = "sungjin";

$objsuperAdmin = new SuperAdminnn( $objAdminnn, "day6" );
$objsuperAdmin->cetakSuperAdminnn();


?>
