<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/sleep':
         file_put_contents('/tmp/out.log', time()." Called sleep \n");
         break;
    case '/formalno':
        file_put_contents('/tmp/out.log', time()." Called formalno \n");
        break;
    default:
        file_put_contents('/tmp/out.log', time()." Called [DEFAUALT] \n");
}
