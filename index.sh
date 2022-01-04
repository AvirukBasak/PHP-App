#!/usr/bin/env bash
cd ./Public
php -c ./php.ini -S 0.0.0.0:$PORT | tee server.log
