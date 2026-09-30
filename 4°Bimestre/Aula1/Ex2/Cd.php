<?php

require_once("Midia.php");

class Cd extends Midia {

    public function getTipo()
    {
        return "CD";
    }
}