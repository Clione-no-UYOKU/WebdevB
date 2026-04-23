<?php
$a = $_POST['a'];
if($a === "１") {
    echo "aは１です。";
}elseif($a === "２") {
    echo "aは２です。";
}else{
    echo "aは1でも2でもありません。";
}
//if($a !== "１") {
//    echo "aは1ではありません。";
//}