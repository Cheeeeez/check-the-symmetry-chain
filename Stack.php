<?php

namespace check_the_symmetry_chain;

class Stack
{
    protected $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($item)
    {
        array_unshift($this->stack, $item);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new \RuntimeException('Stack is empty');
        } else {
            return array_shift($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function getStack()
    {
        return $this->stack;
    }
}