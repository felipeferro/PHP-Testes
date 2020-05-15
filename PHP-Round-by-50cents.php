<?php

echo "5.01 = " .round-by-50cents(5.01) . "\n";
echo "--------------\n";
echo "5.24 = " .round-by-50cents(5.24) . "\n";
echo "5.25 = " .round-by-50cents(5.25) . "\n";
echo "5.26 = " .round-by-50cents(5.26) . "\n";
echo "--------------\n";
echo "5.49 = " .round-by-50cents(5.49) . "\n";
echo "5.50 = " .round-by-50cents(5.50) . "\n";
echo "5.51 = " .round-by-50cents(5.51) . "\n";
echo "--------------\n";
echo "5.74 = " .round-by-50cents(5.74) . "\n";
echo "5.75 = " .round-by-50cents(5.75) . "\n";
echo "5.76 = " .round-by-50cents(5.76) . "\n";
echo "--------------\n";
echo "5.99 = " .round-by-50cents(5.99) . "\n";

function round-by-50cents($value) {
	return round($value / 0.5, 0) * 0.5;
}
