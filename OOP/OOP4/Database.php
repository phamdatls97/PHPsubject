<?php

/**
 * Class trừu tượng
 */

abstract class Database{
    abstract public function connect();
    abstract public function disconnect();
    public function test(){
        echo "<br>".__METHOD__;
    }
}