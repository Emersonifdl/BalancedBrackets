<?php
class Brackets
{
    private array $stack = [];

    public function __construct(private string $bracketsInput)
    {
    }

    public function isBalanced(): bool
    {
        foreach (str_split($this->bracketsInput) as $bracket) {
            if ($bracket == '[' || $bracket == '{' || $bracket == '(') {
                array_push($this->stack, $bracket);
                continue;
            }

            $lastElement = array_pop($this->stack);

            if ($bracket == ']' && $lastElement != '[') {
                return false;
            }

            if ($bracket == '}' && $lastElement != '{') {
                return false;
            }

            if ($bracket == ')' && $lastElement != '(') {
                return false;
            }
        }

        return count($this->stack) === 0;
    }
}
