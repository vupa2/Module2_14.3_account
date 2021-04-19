<?php
$data = ['123abc_', '_abc123', '______', '123456', 'abcdefg', '.@', '12345', '1234_', 'abcde'];

function checkAccount($str)
{
    $regexp = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regexp, $str)) {
        echo ("$str is an valid account.") . '<br>';
    } else {
        echo ("$str is an invalid account.") . '<br>';
    }
}

foreach ($data as $account) {
    checkAccount($account);
}
