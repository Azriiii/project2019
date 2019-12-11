<?php
include dirname( __FILE__ ) . '/../ti.php';
include dirname( __FILE__ ) . '/../../entity/User.php';
include dirname( __FILE__ ) . '/../../entity/RequestFidelity.php';
include dirname( __FILE__ ) . '/../../entity/Fidelity.php';
include dirname( __FILE__ ) . '/../../core/Config.php';
include dirname( __FILE__ ) . '/../../core/UserController.php';
include dirname( __FILE__ ) . '/../../core/FidelityRequestController.php';
include dirname( __FILE__ ) . '/../../core/FidelityController.php';

$userController            = new UserController();
$subject = "bla blac";
$message = "bla blac";
$email="br.rassil@gmail.com";

$userController-> sendEmail($subject, $message, $email);

?>