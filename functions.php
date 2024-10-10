<?php

function urlIs($value) {
    return basename($_SERVER['SCRIPT_NAME']) === $value;
}