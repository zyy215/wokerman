<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<div>

    <script>
        var uid = 9999;
        console.log(uid);
        var ws = new WebSocket('ws://127.0.0.1：1234');
        ws.onopen = function(){
            ws.send(uid);
        };
        ws.onmessage = function(e){
            console.log(e.data);
            var data = JSON.parse(e.data);
            alert(e.data);
        };
    </script>

</body>
</html>
