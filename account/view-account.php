<?php
    require_once('../classes/account.class.php');

    $accountObj = new Account();

    $categories = $accountObj->fetchUsers();

    header('Content-Type: application/json');
    echo json_encode($categories);
?>