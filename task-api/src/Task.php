<?php

namespace Kolani\TaskApi;

class Task
{
    private ?int      $id = null;

    private string   $title;

    private string   $description;

    private bool    $isCompleted;

    public function __construct(
        string $title,
        string $description,
        ?int $id = null
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->isCompleted = false;
        $this->id = $id;
    }

    public function   getId(): ?int
    {
        return $this->id;
    }

    public function   getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIsCompleted(): bool
    {    
        return $this->isCompleted;
    }

    public function setIsCompleted(bool $completed): void
    {
        $this->isCompleted = $completed;
    }

    public static function fromDB(
        int $id,
        string $title,
        string $description,
        bool $completed
    ): Task
    {
        $taskFromDB = new Task($title, $description, $id);
        $taskFromDB->setIsCompleted($completed);

        return $taskFromDB;
    }
}
