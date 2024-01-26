<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/LoggerTrait.php';

class MemberModel
{
    use LoggerTrait;

    public function __construct()
    {
        
    }

    public function create(string $memberId): void
    {
        $this->log("created {$memberId} ." . PHP_EOL);
    }

    public function delete(string $memberId): void
    {
        $this->log("deleted {$memberId} ." . PHP_EOL);
    }
}