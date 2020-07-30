<?php
use TL\basetypes\StringType;

require_once __DIR__ . '/../vendor/autoload.php';

#'Hallo',
        print_r(
            ( new StringType('HalloWorld!'))->cutPostFix('World!123' )
        );
        print_r(PHP_EOL );

