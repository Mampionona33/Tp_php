<?php
require __DIR__ . '/vendor/autoload.php';
use Spatie\Async\Pool;

$pool = Pool::create();

$fileName = 'myCsv.csv';

$list = array(
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

if (!is_file("$fileName")) {
    echo "file not exist";
    if (file_put_contents($fileName, "")) {
        $pool
            ->add(function ($fileName, $list) {
                echo "test";
                $fp = fopen($fileName, 'w');
                foreach ($list as $fields) {
                    fputcsv($fp, $fields);
                }
                fclose($fp);
            })
            ->then(function () {
                echo "file successfully created";
            })
            ->catch(function ($error) {
                echo "$error";
            });
    }
}


// $pool = Pool::create();

// foreach ($things as $thing) {
//     $pool->add(function () use ($thing) {
//         // Do a thing
//         echo "test 1";
//     })->then(function ($output) {
//         // Handle success
//         echo "test 2";
//     })->catch(function (Throwable $exception) {
//         // Handle exception
//         echo "test 3";
//     });
// }

// $pool->wait();