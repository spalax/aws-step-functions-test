<?php
switch ($_REQUEST['q']) {
    case '/sleep':
         file_put_contents('/tmp/out.log', time()." Called sleep \n", FILE_APPEND);
         $data = ['res'=>'sleep'];
         break;
    case '/formalno':
        file_put_contents('/tmp/out.log', time()." Called formalno \n", FILE_APPEND);
        $data = ['res'=>'formalno'];
        break;
    default:
        file_put_contents('/tmp/out.log', time()." Called [DEFAUALT] \n", FILE_APPEND);
        $data = ['res'=>'default'];
}


header('Content-Type: application/json');
echo json_encode($data);
