#!/bin/bash

clear;
./vendor/bin/phpunit -c tests/phpunit/phpunit.xml;
./vendor/bin/phpspec run -c tests/phpspec/phpspec.yml;
./vendor/bin/behat -c tests/behat/behat.yml;
