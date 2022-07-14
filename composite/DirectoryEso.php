<?php 

require_once "./IFile.php";

class DirectoryEso implements IFile
{
    
    public $name; 
    public $listFiles = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add(IFile $file)
    {
        array_push($this->listFiles, $file);
    }

    public function ls()
    {
        echo "Number Files: " . count($this->listFiles) . "<br>";
        echo "Name Directory: {$this->name} <br>";

        foreach($this->listFiles AS $lf)
        {
            $nm = $lf->ls();
        }
    }


}