<?php
$index = [2, 3, 4, 5, 6, 7, 6, 5, 4, 3, -2, 1];
$min = $index[0];
for ($i = 0; $i < count($index); $i++) {
    if ($index[$i] < $min) {
        $min = $index[$i];
    }
}
echo "so be nhat trong day la ; " . $min;
?>