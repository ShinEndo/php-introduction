<?php

declare(strict_types=1);

class Task
{

    private $name;
    private $progress;
    private $secret;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProgress(): int
    {
        return $this->progress;
    }

    public function setProgress(int $progress): void
    {
        if ($progress < 0) {
            $this->progress = 0;
        } elseif ($progress > 100) {
            $this->progress = 100;
        } else {
            $this->progress = $progress;
        }
    }

    public function completedProgress(): void
    {
        $this->progress = 100;
    }

    public function clearProgress(): void
    {
        $this->progress = 0;
    }
}
