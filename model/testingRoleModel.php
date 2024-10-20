<?php
session_start();
session_destroy();

require_once "role_model.php";

echo "== default data role =="."<br>";
$objRole = new modelRole();
foreach ($objRole->getAllRoles() as $role) {
    echo "role ID : ".$role->role_id."<br>";
    echo "role nama : ".$role->role_name."<br>";
    echo "role description : ".$role->role_description."<br>";
    echo "role status : ".$role->role_status."<br><br>";
}

// echo "== testing add new role =="."<br>";
// $objRole->addRole("new role","testing new role", 0);
// $objRole->addRole("very new role", "testing new new role", 1);
// foreach ($objRole->getAllRoles() as $role) {
//     echo "role id : ".$role->role_id."<br>";
//     echo "role name : ".$role->role_name."<br>";
//     echo "role desc : ".$role->role_description."<br>";
//     echo "role status : ".$role->role_status."<br><br>";
// }

// echo "== update data role =="."<br>";
// $objRole->UpdateRole(1,"update role", "role terupdate", 1);
// foreach ($objRole->getAllRoles() as $role) {
//     echo "role id : ".$role->role_id."<br>";
//     echo "role name : ".$role->role_name."<br>";
//     echo "role desc : ".$role->role_description."<br>";
//     echo "role status : ".$role->role_status."<br><br>";
// }

echo "== delete data role =="."<br>";
$objRole->deleteRole(1);
foreach ($objRole->getAllRoles() as $role) {
    echo "role id : ".$role->role_id."<br>";
    echo "role name : ".$role->role_name."<br>";
    echo "role desc : ".$role->role_description."<br>";
    echo "role status : ".$role->role_status."<br><br>";
}

?>
