<?php
include_once "./db.php";
function handleSearch($txt)
{
    if (strlen($txt)  > 0) {
        $db = readDb();
        $result = [];
        foreach ($db as $key => $value) {
            if (preg_match_all("/$txt/i", explode(";", $value)[0]) || preg_match_all("/$txt/i", explode(";", $value)[1])) {
                array_push($result, $db[$key]);
            }
        }
        return $result;
    } else {
        header("Location: .");
    }
}
