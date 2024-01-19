<?php declare(strict_types=1); ?>
<body>
<?php

    require_once dirname(__FILE__) . '/Task.php';

    // TODOタスク「パスポートの更新」を作る
    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task1->progress = 100;
    if($task1->isCompleted() === true) {
        echo $task1->name, 'は完了しました。', PHP_EOL;
    }  else {
        echo $task1->name, 'は未完了です。', PHP_EOL;
    }

?>
</body>