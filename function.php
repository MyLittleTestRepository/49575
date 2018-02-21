<?php
function declOfNum($number, array $fields)
{
    $one=$fields[0];
    $two=$fields[1];
    $tree=$fields[2];

    echo $number . ' ';

    $last_number = $number % 10;

    if ($last_number == 0) echo $tree;
    if ($number > 10 and $number < 20)
        echo $tree;
    else {
        if ($last_number == 1) echo $one;
        if ($last_number > 1 and $last_number < 5) echo $two;
        if ($last_number > 4 and $last_number < 10) echo $tree;
    }

    echo "\n";
}

function test()
{
    for ($i = 0; $i < 36; $i += 1) {
        declOfNum($i, ['элемент', 'элемента', 'элементов']);
    }
}

test();
?>
