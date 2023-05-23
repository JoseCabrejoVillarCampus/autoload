<?php
class User
{
    function __construct()
    {

    }
    public function saludar()
    {
        return __CLASS__."Hola";
    }
    static public function getUser(): string
    {
        return "User";
    }
}

?>