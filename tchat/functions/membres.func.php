<?php

    function get_membres(){
        global $db;
        $req = $db->query("SELECT * FROM users");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }