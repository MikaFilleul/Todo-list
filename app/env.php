<?php

use Dotenv\Dotenv;

return function () {
  $dotenv = DotEnv::createImmutable(__DIR__);
  $dotenv->load();
};
