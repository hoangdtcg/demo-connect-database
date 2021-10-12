<?php
include_once "DBConnect.php";
include_once "CustomerRepository.php";

$customerRepository = new CustomerRepository("posts");
$customers = $customerRepository->getAllCustomer();
echo "<pre>";
var_dump($customers);
?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<table border="1px">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>customerNumber</th>-->
<!--        <th>customerName</th>-->
<!--        <th>phone</th>-->
<!--        <th>city</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($customers as $customer):?>
<!--    <tr>-->
<!--        <td>--><?php //echo $customer["customerNumber"]?><!--</td>-->
<!--        <td>--><?php //echo $customer["customerName"]?><!--</td>-->
<!--        <td>--><?php //echo $customer["phone"]?><!--</td>-->
<!--        <td>--><?php //echo $customer["city"]?><!--</td>-->
<!--    </tr>-->
<!--    --><?php //endforeach;?>
<!--    </tbody>-->
<!--</table>-->
<!--</body>-->
<!--</html>-->
