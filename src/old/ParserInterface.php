<?php

namespace Src;

interface ParserInterface
{
    public function parse(string $input): void;
    public function getTokens() :array;
}
