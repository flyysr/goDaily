 <?php
 
 /**
 * this is the facrory method pattern.
 */
 class Origin{
 
     public function __construct($name){
         $this->name = $name;
     }
 
     public function say(){
         echo "origint product." . $this->name;
     }
 }
 
 class Factory{
     public function create(){
         return new Origin("i am an origin!");
     }
 }
 
 $factory = new Factory();
 $origin = $factory->create();
 $origin->say();
 /**
 * @reference https://www.phptherightway.com/pages/Design-Patterns.html
 * @reference https://www.tutorialspoint.com/design_pattern/abstract_factory_pattern.htm
 *
 * This code uses a factory to create the Automobile object. 
 * There are two possible benefits to building your code this way; the first is that if you need to change, rename, 
 * or replace the Automobile class later on you can do so and you will only have to modify the code in the factory, 
 * instead of every place in your project that uses the Automobile class. 
 * 
 * The second possible benefit is that if creating the object is a complicated job you can do all of the work in the factory, 
 * instead of repeating it every time you want to create a new instance.
 * 
 * Using the factory pattern isn’t always necessary (or wise). 
 * The example code used here is so simple that a factory would simply be adding unneeded complexity. 
 * However if you are making a fairly large or complex project you may save yourself a lot of trouble down the road by using factories.
 */

