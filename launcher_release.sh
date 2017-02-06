#!/bin/bash

phpdir=$(cd "$(dirname "$0")"; pwd)
while(true);
do
	/data/bin/php-7.0.11/bin/php $phpdir/console_release.php $@
done