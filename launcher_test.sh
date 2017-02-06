#!/bin/bash

phpdir=$(cd "$(dirname "$0")"; pwd)
/data/bin/php-7.0.11/bin/php $phpdir/console_test.php $@