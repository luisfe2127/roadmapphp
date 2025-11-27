<?php 
//Nullsafe operator ( ?-> ) e Null coalescing operator ( ?? )
class People {
    public function __construct(
        private string $name,
        private ?Child $child = null
    ){      
    }
    
        public function getName(): String {
            return $this->name;
        }

        public function getChild(): ?Child {
            return $this->child;
        }
}
class Child extends People{}

$people = new People("João", new Child("Maria"));

if (!empty($people)) {
    if(!empty($people->getChild())) {
        if(!empty($people->getChild()->getName())) {
            echo "Nome do filho: " . $people->getChild()->getName() . "</br>";
        } else {
            echo "Nome do filho: Nome não informado </br>";
        }
    }
}

$childName = $people->getChild()?->getName() ?? "Nome não informado";
echo "Nome do filho: " . $childName . "</br>";

?>