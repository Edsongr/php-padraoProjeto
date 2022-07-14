<?php 

require_once "./IMethod.php";
require_once "./NewLib.php";

class AdapterTwo extends NewLib implements IMethod
{

    public function method1()
    {
        $this->saveDBSql();
    }

    public function method2($name)
    {
        $this->generateReportPDF($name);
    }

}