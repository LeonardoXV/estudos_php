<?php

require_once("config.php");

session_unset(); //apaga as variaveis de sessão

echo $_SESSION["nome"];

session_destroy();

?>