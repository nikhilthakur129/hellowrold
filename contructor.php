/* An Application for constructor and destructor*/
<?php
class employee
{
public $name;
public $profile;
public $bsal;
public $netsal;
function __construct($n,$p,$bs)
{
$this->name=$n;
$this->profile=$p;
$this->bsal=$bs;
echo"WELCOME TO BHC<br/>";
}
function netsalcalculate()
{
$pf=$this->bsal*.12;
$da=$this->bsal*.06;
$hra=$this->bsal*.045;
$it=$this->bsal*.07;
$this->netsal=$this->bsal+$da+$hra-$pf-$it;
}
function show()
{
echo"<br/>Your name is \n\n\n<B>".$this->name."</B><br/>";
echo"Your profile is \n\n\n<B>".$this->profile."</B><br/>";
echo"Your netsalary is \n\n\n<B>".$this->netsal."</B><br/>";
}
function __destruct()
{
echo"<br>**********THANK YOU***********";
}
}
$obj=new employee("Sam","Assistant professor",20000);
$obj->netsalcalculate();
$obj->show();
?>
