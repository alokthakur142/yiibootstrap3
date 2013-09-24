<?php

header("Content-Type: text/plain; Charset: utf-8");

chdir(dirname(__FILE__).DIRECTORY_SEPARATOR.'..');

echo "########################" . PHP_EOL;
echo "  D e p l o y" . PHP_EOL;
echo "########################" . str_repeat(PHP_EOL, 3);
echo `/usr/bin/git pull 2>&1`;