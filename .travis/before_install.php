#!/usr/bin/env php
<?php

include_once 'common.php';

// Disable XDebug
run('phpenv config-rm xdebug.ini');
// Load general php configuration
run('phpenv config-add ./.travis/travis.php.ini');
