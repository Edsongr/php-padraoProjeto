<?php 

require_once "./IDb.php";

class Mysql implements IDb
{

    public function connect()
    {
        echo "Connected Mysql...";
    }

    public function select()
    {
        echo "Selected Mysql...";
    }

    public function save()
    {
        echo "Save Mysql...";

    }
    
}
