<?php

namespace MasumPackagist\PhpMathOperations;

class MathOperations
{
    // Basic arithmetic operations
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            return "Division by zero error!";
        }
        return $a / $b;
    }

    public function modulus($a, $b)
    {
        return $a % $b;
    }

    public function power($a, $b)
    {
        return pow($a, $b);
    }

    public function squareRoot($a)
    {
        return sqrt($a);
    }

    // Exponential and logarithmic functions
    public function exp($a)
    {
        return exp($a);
    }

    public function log($a, $base = M_E)
    {
        return log($a, $base);
    }

    public function log10($a)
    {
        return log10($a);
    }

    public function log2($a)
    {
        return log($a, 2);
    }

    // Trigonometric functions (input in radians)
    public function sin($a)
    {
        return sin($a);
    }

    public function cos($a)
    {
        return cos($a);
    }

    public function tan($a)
    {
        return tan($a);
    }

    public function asin($a)
    {
        return asin($a);
    }

    public function acos($a)
    {
        return acos($a);
    }

    public function atan($a)
    {
        return atan($a);
    }

    // Hyperbolic functions
    public function sinh($a)
    {
        return sinh($a);
    }

    public function cosh($a)
    {
        return cosh($a);
    }

    public function tanh($a)
    {
        return tanh($a);
    }

    // Degree and Radian conversions
    public function degToRad($degrees)
    {
        return deg2rad($degrees);
    }

    public function radToDeg($radians)
    {
        return rad2deg($radians);
    }

    // Rounding and absolute functions
    public function ceil($a)
    {
        return ceil($a);
    }

    public function floor($a)
    {
        return floor($a);
    }

    public function round($a, $precision = 0)
    {
        return round($a, $precision);
    }

    public function abs($a)
    {
        return abs($a);
    }

    // Min, Max, and Average
    public function min(...$values)
    {
        return min($values);
    }

    public function max(...$values)
    {
        return max($values);
    }

    public function average(...$values)
    {
        return array_sum($values) / count($values);
    }

    // Factorial
    public function factorial($n)
    {
        if ($n < 0) {
            return "Undefined for negative numbers!";
        }
        return ($n == 0 || $n == 1) ? 1 : $n * $this->factorial($n - 1);
    }

    // Greatest Common Divisor (GCD)
    public function gcd($a, $b)
    {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return abs($a);
    }

    // Least Common Multiple (LCM)
    public function lcm($a, $b)
    {
        return abs($a * $b) / $this->gcd($a, $b);
    }

    // Pythagorean Theorem (calculating hypotenuse)
    public function pythagoras($a, $b)
    {
        return sqrt($a * $a + $b * $b);
    }

    // Permutations and Combinations
    public function permutation($n, $r)
    {
        return $this->factorial($n) / $this->factorial($n - $r);
    }

    public function combination($n, $r)
    {
        return $this->factorial($n) / ($this->factorial($r) * $this->factorial($n - $r));
    }

    // Random number generation
    public function random($min, $max)
    {
        return rand($min, $max);
    }

    // Sum of an array
    public function sum(array $values)
    {
        return array_sum($values);
    }

    // Product of an array
    public function product(array $values)
    {
        return array_product($values);
    }
}

?>
