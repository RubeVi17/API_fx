<?php

/**
 * Creamos configuracion general de nustra API
 */

 unset($config);
 $config[1] = "localhost"; //localhost default ip
 $config[2] = "root"; //database username
 $config[3] = ""; //database password
 $config[4] = "fenixmcs_user"; //database name


 $mysqli = mysqli_connect($config[1],$config[2],$config[3],$config[4]);
 if (mysqli_connect_errno()){
     echo "Failed to connect to MSQL";
 }

