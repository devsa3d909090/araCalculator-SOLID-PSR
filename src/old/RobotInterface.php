<?php

namespace SRC;

interface RobotInterface
{
    public function moveRight(): void;
    public function moveLeft(): void;
    public function walk(int $steps): void;
    public function getX();
    public function getY();
    public function getDirection();
}
