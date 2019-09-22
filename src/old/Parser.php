<?php

namespace Src;

/**
*This class is responsible for Parsing inputs into tokens
*/
class Parser implements ParserInterface
{

    private $token;
/**
*This parse function accept the string and return tokens based on REGEX
*return void
*/
    public function parse(string $input): void
    {
        $flag = PREG_SET_ORDER;
        preg_match_all('/R|L|W[0-9]+|.+/i', trim($input), $tokens, $flag);
        $this->token = $tokens;
    }
/**
*This fucntion return all tokens array when called
*/
    public function getTokens() :array
    {
        return $this->token;
    }
}
