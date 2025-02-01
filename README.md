# PHP Loose Comparison and Division by Zero

This repository demonstrates a subtle bug in PHP related to loose comparison (`==`) and division by zero.  Even when explicitly checking for zero values, loose comparison can fail to catch cases involving floating-point zero (`0.0`), leading to unexpected warnings and potentially incorrect results.

The `bug.php` file shows the problematic code, and `bugSolution.php` provides the corrected version using strict comparison (`===`).