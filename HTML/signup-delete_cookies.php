<?php

require_once('signup-procesamiento.php');

if (session_status() !== PHP_SESSION_ACTIVE)
session_start();

$user = [
  "firstName" => $_COOKIE["firstName"],
  "lastName" => $_COOKIE["lastName"],
  "email" => $_COOKIE["email"]
];

// Defino array de cookies a eliminar

$camposCookies = [
  "firstName",
  "lastName",
  "birthDay",
  "birthMonth",
  "birthYear",
  // "sexo",
  // "localidad",
  "email"
  // "telefono",
  // "interes"
];

if (isset($_COOKIE['success']) || !empty($_COOKIE['success']) ) {
  foreach ($camposCookies as $value) {
    if (isset($_COOKIE[$value]))
      setcookie($value, null,time());
  }
}

if (!isset($_COOKIE['error']) && !isset($_COOKIE['success']) ) {
  foreach ($camposCookies as $value) {
    if (isset($_COOKIE[$value]))
      setcookie($value, null,time());
  }
}

RedirectSuccess();

?>
