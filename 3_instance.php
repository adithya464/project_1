
<?php

class SimpleClass
{
    // property declaration
    public $var = '</br>a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

class AnotherClass
{
    // property declaration
    public $var_assign = '</br>another default variable';

    // method declaration
    public function showVar() {
        echo $this->var_assign;
    }
}

// ***************************************************************************************** //
$instance = new SimpleClass();  // this is the normal way to create an object for a class

echo $instance->displayVar();	// normal way to call a function of a class using object
// ***************************************************************************************** //


// *****************************************************************************************//

// This can also be done with a variable:
$className = 'SimpleClass';

$instance_2 = new $className(); // Assigning the Class to another instance from the variable

echo $instance_2->displayVar();
// *****************************************************************************************//



// *****************************************************************************************//
$className = 'AnotherClass';

$instance_2 = new $className();

echo $instance_2->showVar();
// *****************************************************************************************//
?>
