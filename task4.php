<?
Class task4{
  public function f($a){
    if (method_exists($this,$a)){
      return $this->$a();
    }
      return "error";
    
  }
  public function test(){
    $result = "test1";
    return $result;
  }
  
  public function test2(){
    $result = "test2";
    return $result;

  }

}

$newCl = new task4;
echo($newCl->f("test")." </br>");
echo($newCl->f("test2")." </br>");
echo($newCl->f("tqeqweest2")." </br>");
