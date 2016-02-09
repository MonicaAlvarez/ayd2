<?php
    session_start();
    //require_once 'PHPUnit/Autoload.php';
    
    class test_servisa_1 extends PHPUnit_Extensions_Database_TestCase{
        
        /** @test */
         public function getConnection() {
            $db = new PDO(
                "mysql:host=servisapp-monicaalvarez.c9users.io;dbname=c9", 
                "admin", "admin");
            return $this->createDefaultDBConnection($db, "c9");
        }
        
        /** @test */
        public function getDataSet() {
            return $this->createXMLDataSet("seed.xml");
        }
        

    }
    
?>