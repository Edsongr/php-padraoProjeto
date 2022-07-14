<?php 

require_once "./IMethod.php";
require_once "./OldLib.php";

class AdapterOne extends OldLib implements IMethod
{

    public function method1()
    {
        $this->saveDB();
    }

    public function method2($name)
    {
        $this->generateReportTxt($name);

    }

}