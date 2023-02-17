<?php
require __DIR__ . '/vendor/autoload.php';
use Spatie\Async\Pool;

$pool = Pool::create();

$fileName = "myCsv.csv";

$list = array(
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('aaa', 'bbb')
);

// $fp = fopen($fileName, 'w');

// foreach ($list as $field) {
//     fputcsv($fp, $field);
// }

// if()

// fclose($fp);

if (!is_file($fileName)) {
    $fp = fopen($fileName, 'w');
    foreach ($list as $field) {
        fputcsv($fp, $field);
    }
    fsync($fp);
    fclose($fp);
    header("Location: page2.php");
    die();
} else {
    header("Location: page2.php");
    die();
}


// if (!is_file($fileName)) {
// // echo "file not exist";
// foreach ($things as $thing) {
// $pool
// ->add(function ($fileName) use ($thing) {
// file_put_contents($fileName, "");
// return $fileName;
// })->then(function ($output) {
// echo $output . 'test';
// // echo "test";
// // $fp = fopen($fileName, 'w');
// // foreach ($list as $fields) {
// // fputcsv($fp, $fields);
// // }
// // fclose($fp);
// })->catch(function (Throwable $exeption) {
// echo $exeption;
// });
// $pool->wait();
// }
// }
?>