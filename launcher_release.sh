#!/bin/bash

phpdir=$(cd "$(dirname "$0")"; pwd)
while(true);
do
	/data/bin/php-5.6.0/bin/php $phpdir/console_release.php $@
done