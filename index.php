<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/sleep':
         file_put_contents('/tmp/out.log', time()." Called sleep \n");
         $data = ['res'=>'sleep'];
         break;
    case '/formalno':
        file_put_contents('/tmp/out.log', time()." Called formalno \n");
        $data = ['res'=>'formalno'];
        break;
    default:
        file_put_contents('/tmp/out.log', time()." Called [DEFAUALT] \n");
        $data = ['res'=>'default'];
}


header('Content-Type: application/json');
echo json_encode($data);
