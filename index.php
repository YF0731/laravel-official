<?php

$input_line = preg_split('//', trim(fgets(STDIN)), -1, PREG_SPLIT_NO_EMPTY); // ['1', '6']

const SELF = ['0', '2', '3', '5', '6', '9'];
const PLUS = ['0', '1', '4', '5', '6', '9'];
const MINUS = ['6', '7', '8', '9'];

$notCanChange = !in_array($input_line, SELF)
    || !(in_array($input_line, PLUS) || in_array($input_line, MINUS));

if ($notCanChange) {
    echo "none\n";
    exit();
}

$arr = [
    '0' => [
        'self' => ['6', '9'],
        'plus' => ['8'],
        'minus' => null,
    ],
    '1' => [
        'self' => null,
        'plus' => ['7'],
        'minus' => null,
    ],
    '2' => [
        'self' => ['3'],
        'plus' => null,
        'minus' => null,
    ],
    '3' => [
        'self' => ['2', '5'],
        'plus' => null,
        'minus' => null,
    ],
    '4' => [
        'self' => null,
        'plus' => ['9'],
        'minus' => null,
    ],
    '5' => [
        'self' => ['3'],
        'plus' => ['6', '9'],
        'minus' => null,
    ],
    '6' => [
        'self' => ['0', '9'],
        'plus' => ['8'],
        'minus' => ['5'],
    ],
    '7' => [
        'self' => null,
        'plus' => null,
        'minus' => ['1'],
    ],
    '8' => [
        'self' => null,
        'plus' => null,
        'minus' => ['0', '6', '9'],
    ],
    '9' => [
        'self' => ['0', '6'],
        'plus' => ['8'],
        'minus' => ['5'],
    ],
];

$result = [];
$result2 = [];
$result3 = [];
foreach ($input_line as $key => $value) {
    if (in_array($value, SELF)) {
        $result = $arr[$value]['self']; // ['0', '9']
    }

    if (in_array($value, PLUS)) {
        array_push($result2, $arr[$value]['plus']); // ['7']
    }

    if (in_array($value, MINUS)) {
        $result3 = $arr[$value]['minus']; // ['5']
    }
}

$num1 = $input_line[0] . $result[0];
$num2 = $input_line[0] . $result[1];
$num3 = $result2[0][0] . $result3[0];

echo $num1 . "\n";
echo $num2 . "\n";
echo $num3 . "\n";
