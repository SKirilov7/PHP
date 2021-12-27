<?php
$companies = [];
$companyAndEmployeeId = readline();

while ($companyAndEmployeeId !== 'End') {
    $companyAndEmployeeId = explode(' -> ', $companyAndEmployeeId);
    $companyName = $companyAndEmployeeId[0];
    $employeeId = $companyAndEmployeeId[1];
    if (!key_exists($companyName, $companies)) {
        $companies[$companyName] = [];
    }
    $companies[$companyName][] = $employeeId;
    $companies[$companyName] = array_unique($companies[$companyName]);
    $companyAndEmployeeId = readline();
}

ksort($companies);
foreach ($companies as $companyName => $employees) {
    echo "$companyName" . PHP_EOL;
    foreach ($employees as $employeeId) {
        echo "-- $employeeId" . PHP_EOL;
    }
}