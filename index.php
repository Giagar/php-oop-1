<?php 

class Fridge {
    private $model;
    
    private $position;
    
    private $content = [];

    public function __construct($model, $position){
        $this->model = $model;
        $this->position = $position;
        
    }

    // getter model
    public function get_model(){
        return $this->model;
    }

    // getter position
    public function get_position(){
        return $this->position;
    }

    // setter position
    public function set_position($newPosition) {
        $this->position = $newPosition;
    }

    // getter content
    public function get_content() {
        if (count($this->content) === 0) {
            return "No food in the fridge.";
        }

        $result = "";

        foreach($this->content as $obj) {
            // var_dump($obj);
            // $result .= "<ul>";
            foreach($obj as $key=>$value) {
                var_dump($value);
                // $result .= "<li>{$key}</li>";
            }
            // $result .= "</ul>";
        }


        // var_dump($result);
        return $result;
        // return "ok";

        // var_dump($this->content);
    }

    // add items to content (only objects are allowed)
    public function add_food(Food $food) {
        $this->content[] = $food;
    }
    
};

$fridge1 = new Fridge("model1", "position1");
$fridge2 = new Fridge("model2", "position2");
$fridge3 = new Fridge("model3", "position3");

echo "fridge1 position: {$fridge1->get_position()}";

echo "<br>";

// changing fridge 2 position and displaying new value
$fridge2->set_position("newPosition2");
$fridge2->get_position();

echo "fridge2 new position:{$fridge2->get_position()}";

echo "<br>";

// creating some classes for food
class Food {
    private $brand;
    private $name;
    private $category;
    private $expiringDate;
    private $weight;
    private $buyer;
    private $perishable;
    private $quantity;

    public function __construct($brand, $name, $category, $expiringDate, $weight, $buyer, $perishable, int $quantity)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->category = $category;
        $this->expiringDate = $expiringDate;
        $this->weight = $weight;
        $this->buyer = $buyer;
        $this->perishable = $perishable;
        $this->quantity = $quantity;
    }

    // getter
    public function get_quantity() {
        return $this->quantity;
    }

    // setter
    public function set_quantity($newQuantity) {
        $this->quantity = $newQuantity; 
    }

    public function displayAllData() {
        return "Brand: {$this->brand}, name: {$this->name}, category: {$this->category}, expiring date: {$this->expiringDate}, weight: {$this->weight}Kg, buyer: {$this->buyer}, perishable: {$this->perishable}, quantity: {$this->quantity}.";
    }
}

$food1 = new Food("brand1", "name1", "pasta", "99/99/9999", "9999", "buyer1", "false", 1);
$food2 = new Food("brand2", "name2", "rice", "99/99/9999", "9999", "buyer2", "false", 9);
$food3 = new Food("brand3", "name3", "meat", "99/99/9999", "9999", "buyer3", "false", 14);

echo $food3->displayAllData();

echo "<br>";

$food3->set_quantity(15);

echo "food3 new quantity: {$food3->get_quantity()}";

echo "<br>";

echo "original content from fridge3: {$fridge3->get_content()}";

echo "<br>";

$fridge3->add_food($food1);

echo "new content from fridge3: {$fridge3->get_content()}";
// $fridge3->get_content();
