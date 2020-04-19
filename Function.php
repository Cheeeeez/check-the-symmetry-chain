<?php
function isSymmetryChain($str)
{
    $queue = new check_the_symmetry_chain\Queue();
    $stack = new check_the_symmetry_chain\Stack();

    for ($i = 0; $i < strlen($str); $i++) {
        $queue->enqueue($str[$i]);
        $stack->push($str[$i]);
    }

    for ($j = 0; $j < count($stack->getStack()); $j++) {
        if ($stack->getStack()[$j] != $queue->readQueue()[$j]) {
            return false;
        }
    }
    return true;
}

function checkSymmetryChain($str)
{
    if (isSymmetryChain($str)) {
        echo "<b>$str</b> là chuỗi đối xứng";
    } else {
        echo "<b>$str</b> không phải chuỗi đối xứng";
    }
}