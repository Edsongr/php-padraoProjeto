<?php 

require_once "./IDb.php";

class SqlServer implements IDb
{

    public function connect()
    {
        echo "Connected SqlServer...";
    }

    public function select()
    {
        echo "Selected SqlServer...";
    }

    public function save()
    {
        echo "Save SqlServer...";

    }
    
}
