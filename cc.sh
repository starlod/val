#!/bin/bash
php app/console cache:clear
php app/console assets:install
#rm -rf app/cache/dev
#rm -rf app/cache/prod
