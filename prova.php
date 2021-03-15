<?php 

class Example {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$example = new Example("nome", 9999);
$result = "<ul>";
foreach($example as $key=>$prop) {
    $result .= "<li>$prop</li>";
}
$result .= "</ul>";

echo $result;

?>