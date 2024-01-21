<body>
    <?php
    class someClass
    {
        public $propertyA;
        private $propertyB;

        public function methodA(): void
        {
            echo 'methodA called.', PHP_EOL;
            $this->methodB(); // 自クラス内からであればアクセス可能
        }

        private function methodB(): void
        {
            echo 'methodB called.', PHP_EOL;
        }
    }
    $someInstance = new someClass();

    $someInstance->propertyA = 'A';
    $someInstance->methodA();

    // $someInstance->propertyB = 'B'; // エラー
    // $someInstance->methodB(); // エラー
    ?>
</body>