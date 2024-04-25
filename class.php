<?php 
class claCulation{
    public $a, $b, $c;

    public function sum(){
        $c = $this->a + $this->b;
        return $c;
    }
    public function sub(){
        $c = $this->a - $this->b;
        return $c;
    }
}
$c1 = new claCulation();
   $c1->a = 5;
 $c1->b = 4;

echo "Sum C1"." ".$c1->sum();
echo "<br>";

echo "Sub C2"." ".$c1->sub();
echo "<br>";

// c2 
$c2 = new claCulation();
   $c2->a = 105;
 $c2->b = 64;

echo "Sum C1"." ".$c1->sum();
echo "<br>";

echo "Sub C2"." ".$c2->sub();

?>