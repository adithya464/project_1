<?php
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

	
    // method declaration
    public function displayVar() {
        echo $this->var;
    }	
}
	$object = new SimpleClass();	// setting an instance to a class is called an OBJECT. Here $instance is the Object
	$object->displayVar();			// calling a function (displayVar()) through object

?>