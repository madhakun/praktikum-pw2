<?php

unset($_COOKIE['nim']);
setcookie('nim', '', time()-3600, '/');
