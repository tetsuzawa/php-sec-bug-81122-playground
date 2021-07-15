<?php

if(filter_var($_GET['url'], FILTER_VALIDATE_URL)) {
    header("location: ".$_GET['url']);
}

echo 'この文が見えていれば<a href="https://bugs.php.net/bug.php?id=81122">脆弱性(リダイレクト)</a>を回避できている。';