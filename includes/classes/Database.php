<?php

class Database
{
    function connection()
    {
        $servername = $_ENV['DB_HOST'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        $dbname = $_ENV['DB_DATABASE'];

        $db = new mysqli($servername, $username, $password, $dbname);
        if ($db->connect_error) {
            $result = "Connection failed: " . $db->connect_error;
        } else {
            $result = $db;
        }

        return $result;
    }

    function select($from_table, $select = '*', $where = '')
    {
        $db = $this->connection();
        $sql = "SELECT $select FROM $from_table WHERE $where";
        $result = $db->query($sql);

        if ($result) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            $return['msg'] = array(
                "success" => true,
                "message" => $result,
            );
        } else {
            $return['msg'] = array(
                "success" => false,
                "message" => $result,
            );
        }
        $db->close();
        if (count($data) < 2) {
            $return['data'] = $data[0];
        } else {
            $return['data'] = $data;
        }
        return $return;
    }
}
