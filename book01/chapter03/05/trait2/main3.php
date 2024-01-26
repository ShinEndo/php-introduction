<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/SomeTraitA.php';
    require_once dirname(__FILE__) . '/SomeTraitB.php';

    // traitMethod重複のためエラー
    class SomeClass
    {
        use SomeTraitA,SomeTraitB{
            SomeTraitB::traitMethod insteadof SomeTraitA;
            SomeTraitA::traitMethod as setA;
        }

        public function setTraitProperty()
        {
            $this->traitMethod(null,null);
            echo $this->traitProperty, PHP_EOL;
            $this->setA(null,null);
            echo $this->traitProperty, PHP_EOL;
        }
    }

    $someClass = new SomeClass();
    $someClass->setTraitProperty();
?>
</body>