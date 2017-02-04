#!/bin/bash

phpdir=$(cd "$(dirname "$0")"; pwd)
/data/bin/php-5.6.0/bin/php $phpdir/console_test.php $@