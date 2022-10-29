<?php

/*Destruir session: https://www.php.net/manual/es/function.session-destroy.php

session_destroy() destruye toda la información asociada con la sesión actual.
No destruye ninguna de las variables globales asociadas con la sesión, ni 
destruye la cookie de sesión. Para volver a utilizar las variables de sesión se 
debe llamar a session_start().
*/

session_start();
session_destroy();

echo "Se destruyó la sesión de usuario";

?>