<?php 

require_once "./IDb.php";

class PostgreSql implements IDb
{

    public function connect()
    {
        echo "Connected PostgreSql...";
    }

    public function select()
    {
        echo "Selected PostgreSql...";
    }

    public function save()
    {
        echo "Save PostgreSql...";

    }
    
}
