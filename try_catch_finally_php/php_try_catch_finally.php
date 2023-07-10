<?php

function divide($numerator, $denominator)
{
    if ($denominator === 0) {
        throw new Exception("Cannot divide by zero.");
    }

    return $numerator / $denominator;
}

try {
    $result = divide(10, 5);
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
} finally {
    echo "Finally block";
}
?>
