# PHP Pass by Reference Gotcha
This example demonstrates a common pitfall in PHP when dealing with pass by reference and arrays.

## The Issue
PHP uses pass by reference by default for arrays.  When a function modifies an array passed as an argument, the original array is also changed.  This can lead to unexpected behavior if the intent is to return a modified copy of the array.

## How to Reproduce
1. Run `bug.php`.
2. Observe the unexpected behavior of the first print_r showing the original array modified in place, while the second demonstrates that return provides an independent copy.