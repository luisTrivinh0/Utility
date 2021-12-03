<?php
require_once 'D:/xampp/htdocs/testes/Utility/vendor/asad/benchmark/src/Benchmark.php';

use Asad\Bench\Benchmark;
$bench = new Benchmark;

$bench->start();

// Execute some code

$bench->end();

// Get elapsed time and memory
echo $bench->getTime(),'<br>'; // 156ms or 1.123s
echo 'elapsed microtime in float ', $bench->getTime(true),' '; // elapsed microtime in float
echo $bench->getTime(false, '%d%s','<br>'); // 156ms or 1s

echo $bench->getMemoryPeak(),'<br>'; // 152B or 90.00Kb or 15.23Mb
echo 'Memory peak in bytes ', $bench->getMemoryPeak(true),' '; // memory peak in bytes
echo $bench->getMemoryPeak(false, '%.3f%s','<br>'); // 152B or 90.152Kb or 15.234Mb

// Returns the memory usage at the end mark
echo '<br>','Returns the memory usage at the end mark ', $bench->getMemoryUsage(),'<br>'; // 152B or 90.00Kb or 15.23Mb

// Runs `Ubench::start()` and `Ubench::end()` around a callable
// Accepts a callable as the first parameter.  Any additional parameters will be passed to the callable.
$result = $bench->run(function ($x) {
    return $x;
}, 1);
echo $bench->getTime(),'<br>';
?>