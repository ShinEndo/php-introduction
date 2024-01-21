<body>
<?php
    require_once dirname(__FILE__) . '/ShoppingPoint.php';

    class WeekDayPoint
    {
        public function addWeekDayPoint(string $youbi)
        {
            if($youbi === 'Fri') {
                ShoppingPoint::countPoint();
            }
        }
    }

    function addPricePoint(int $price)
    {
        if($price >= 100) {
            ShoppingPoint::countPoint();
        }
    }

    ShoppingPoint::$point = 0;

    ShoppingPoint::countPoint();

    $weekDayPoint = new WeekDayPoint();
    $weekDayPoint->addWeekDayPoint('Fri');

    addPricePoint(5000);

    echo '購入ポイント：', ShoppingPoint::$point;
?>
</body>