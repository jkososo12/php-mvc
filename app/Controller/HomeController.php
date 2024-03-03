<?php
namespace Jkososo12\PhpMvc\Controller;

class HomeController {
    function index() : void {
        include(__DIR__ . '/../view/index.php');
    }
    function login() : void {
        include(__DIR__ . '/../view/login.php');
    }
    function register() : void {
        include(__DIR__ . '/../view/register.php');
    }
    function about() : void {
        include(__DIR__ . "/../view/about.php");
    }
}