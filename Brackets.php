<?php

class Brackets
{
    private array $stack = [];
    private array $openingBrackets = ['(' => ')', '[' => ']', '{' => '}'];

    public function __construct(private string $bracketsInput)
    {
    }

    public function isBalanced(): bool
    {
        foreach (str_split($this->bracketsInput) as $bracket) {
            if (array_key_exists($bracket, $this->openingBrackets)) {
                $this->stack[] = $bracket;
                continue;
            }

            $lastElement = array_pop($this->stack);

            if ($lastElement === null || $this->openingBrackets[$lastElement] !== $bracket) {
                return false;
            }
        }

        return empty($this->stack);
    }
}
