<?php
class push{
    public function pushMsg()
    {
        $uid = $_GET['uid'];
        $msg = $_GET['msg'];
        $type = $_GET['type'];
        // 在php中双引号中的\n代表一个换行符，例如"\n"
        $buffer2 = '{"type":"'.$type.'","data":"'.$msg.'", "uid":"'.$uid.'"}'."\n";

        // 与服务端建立socket连接
        $client =  stream_socket_client('tcp://127.0.0.1:5678');
        // 以text协议发送buffer2数据
        fwrite($client, $buffer2);
    }
}