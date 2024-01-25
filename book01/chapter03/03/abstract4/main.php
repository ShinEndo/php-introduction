<?php declare(strict_types=1) ?>
<body>
<?php
    abstract class Clock
    {
        public function setTime(string $time, $extraAguments = null)
        {
            // 何らかの処理
        }
    }

    class DigitalClock extends Clock
    {
        public function setTime(string $time, $extraAguments = null)
        {
            // デジタル時計特有の何らかの処理
        }
    }

    class AnalogClock extends Clock
    {
        public function setTime(string $time, $extraAguments = null)
        {
            // アナログ時計特有の何らかの処理
        }
    }

    // メインルーチン
    $digitalClock = new DigitalClock();
    $digitalClock->setTime('11:14', ['fontColot' => 'white']);
    $analogClock = new AnalogClock();
    $analogClock->setTime('11:14');
?>
</body>