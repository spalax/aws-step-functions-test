<?php
switch ($_REQUEST['q']) {
    case '/sleep':
         sleep(2);
         $content = time()." Called /sleep 10 seconds \n";
         $data = ['res'=>'sleep'];
         break;
    case '/formalno':
        $content = time()." Called /formalno \n";
        $data = ['res'=>'formalno'];
        break;
    default:
        $content = time()." Called [DEFAULT] \n";
        $data = ['res'=>'default'];
}

file_put_contents('/tmp/out.log', $content, FILE_APPEND);
header('Content-Type: application/json');
echo json_encode($data);
