<?php 

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author yourname
*/
class EnvSwitchTest extends PHPUnit_Framework_TestCase{
	 
  public function testEnvironment(){
      $var = new kimtooflex\EnvSwitch;
      $ans=true;
       $var->setEnv("localhost,127.0.0.1,kimtooflex",function() {
          global $ans;
          $ans=true;
       },
       function() {
          global $ans;
          $ans=false;
       }
      );
      
      $this->assertTrue( $ans==true);  //run tests locally
      unset($var);
  }
  
}