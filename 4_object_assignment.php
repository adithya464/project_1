
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

// ***************************************************************************************** //
$instance = new SimpleClass();

$assigned   =  $instance;

$reference  =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; 		// $instance and $reference become null

var_dump($instance); 	// as per the above statement NULL will be the output
var_dump($reference);	// since reference is the address of the instance, this will also be NULL
var_dump($assigned); 	// 'assigned' value will have the last updated $instance->var value
// *****************************************************************************************//
?>
