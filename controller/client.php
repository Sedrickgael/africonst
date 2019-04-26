<?php
    class Client{
        private $_db;

        public function __construct($db){
            $this->_db = $db;
        }

        public function ajouterClient($id_client){
            if($this->attributionVerify($id_client)){
                return false;
            }
            $client = $this->_db->prepare("INSERT INTO Client(id_client) VALUES(?)");
            $client->execute(Array($id_client));
            if($client->rowCount()>0){
                return 1;
            }
            else{
                return 0;
            }
        }


        
    }
?>