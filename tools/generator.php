<?php

$codes = array();
$const = array();

while ($row = fgets(STDIN)) {
    if (preg_match('/^Section: (Class .*)$/', $row, $matches)) {
        $const[] = '';
        $const[] = "    // {$matches[1]}";
    } elseif (preg_match('/^([0-9A-Z]{5}) +[SWE] +[^ ]+? +([a-z_]+)$/', $row, $matches)) {
        $key = strtoupper($matches[2]);
        if (isset($codes[$key])) {
            $key .= '_EXCEPTION';
        }
        $codes[$key] = '';
        $const[] = "    const {$key} = '{$matches[1]}';";
    }
}

$const = trim(implode(PHP_EOL, $const), PHP_EOL);

echo <<<EOD
<?php

namespace Sunaoka\PostgresError;

class PostgresError
{
$const
}

EOD;
