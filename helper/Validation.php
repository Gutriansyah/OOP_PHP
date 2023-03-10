<?php


require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";

function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException(" Username is Null");
    } elseif (!isset($request->password)) {
        throw new ValidationException("Error Processing Request");
    } elseif (trim($request->username) == "") {
        throw new Exception("username is empty", 1);
    } elseif (trim($request->password) == "") {
        throw new Exception("password is empty", 1);
    }
}
