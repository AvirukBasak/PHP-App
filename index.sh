#!/usr/bin/env bash
cd ./Public
php -S 0.0.0.0:$PORT | tee server.log
