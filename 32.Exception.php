<?php

require_once "helper/Validation.php";
require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";


$loginRequest = new LoginRequest;
$loginRequest->username = "Giri";
$loginRequest->password = "Giri";



try {
    validateLoginRequest($loginRequest);
    echo "Valid" . PHP_EOL;
} catch (ValidationException $exception) {
    echo "Vlidation error : " . $exception->getMessage() . PHP_EOL;
} catch (Exception $exception) {
    echo "error : " . $exception->getMessage() . PHP_EOL;
} finally {
    echo " eror atau tidak akan tetap di eksekusi" . PHP_EOL;
}
