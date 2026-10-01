<?php
if (preg_match('7/\.(png|jpg|jpeg|gif|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}




function dump(...$vars){
echo '<pre>';
var_dump(...$vars);
echo'</pre>';

}

switch($_SERVER['REQUEST_URI']) {
    case '/':
        include __DIR__ . '/../views/index.php';
        break;
    case 'us.php':
        include __DIR__ . '/../views/us.php';
        break;
    default:
        echo 404;
}