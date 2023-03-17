<?php

/* trait myHello{
    public function  hello(){
          echo "mai myHello ka `(hello())` traits hu";
    }
}

trait secoundTraits{
    public function  hello1(){
          echo "mai secound traits ka hello() function hu";
    }
}


class base{
    use myHello;
    use secoundTraits;
}

class base2{
    use myHello;
}

$mybase=new base();

 $mybase->hello(); 
 $mybase->hello1(); 
 */


//OVERRIDING in traits act like other overriding

// down to upward jaaayega

trait myHello{
    public function  hello(){
          echo "mai myHello ka `(hello())` traits hu";
    }
}

trait my1{
    public function  hello(){
          echo "mai my1 ka `(hello())` traits hu";
    }
}
// traits k functions same nhi ho sakte 
class myclass{
   use myHello, my1{
    my1 :: hello insteadOf myHello;
   }
}


$new =new myclass();

$new->hello(); 
?>