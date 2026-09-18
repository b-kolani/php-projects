<?php

require 'vendor/autoload.php';

use Kolani\TaskApi\Task;

$task1 = new Task("Apprendre PHP", "PHP & Laravel");
$task2 = new Task("Apprendre Java", "Java & Spring Boot", 42);

var_dump($task1->getId());
echo "Task 1 title: " . $task1->getTitle() . PHP_EOL;
echo "Task 1 description: " . $task1->getDescription() . PHP_EOL;
if ($task1->getIsCompleted())
    echo "Task 1 completed before: " . "Yes" . PHP_EOL;
else
    echo "Task 1 completed before: " . "No" . PHP_EOL;
$task1->setIsCompleted(true);
if ($task1->getIsCompleted())
    echo "Task 1 completed after: " . "Yes" . PHP_EOL;
else
    echo "Task 1 completed after: " . "No" . PHP_EOL;
echo PHP_EOL;
var_dump($task2->getId());
echo "Task 2 title: " . $task2->getTitle() . PHP_EOL;
echo "Task 2 description: " . $task2->getDescription() . PHP_EOL;
if ($task2->getIsCompleted())
    echo "Task 2 completed before: " . "Yes" . PHP_EOL;
else
    echo "Task 2 completed before: " . "No" . PHP_EOL;
$task2->setIsCompleted(true);
if ($task2->getIsCompleted())
    echo "Task 2 completed after: " . "Yes" . PHP_EOL;
else
    echo "Task 2 completed after: " . "No" . PHP_EOL;
