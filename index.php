<?php

if(filter_var($_GET['url'], FILTER_VALIDATE_URL)) {
    header("location: ".$_GET['url']);
}