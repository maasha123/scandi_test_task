<?php

if (file_exists('C://password'))
    $password = file_get_contents('C://password');
else
    $password = '';