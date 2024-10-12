<?php
require_once 'domain_object/node_role.php';

$obj_role = [];
$obj_role[] = new Role(1,"kasir", "dibuat untuk kasir", 1);
$obj_role[] = new Role(2, "admin", "dibuat untuk admin", 1);
$obj_role[] = new Role(3, "owner", "dibuat untuk yang punya", 0);
$obj_role[] = new Role(4, "customer", "dibuat untuk pelanggan", 1);

include 'views/role_list.php';
?>