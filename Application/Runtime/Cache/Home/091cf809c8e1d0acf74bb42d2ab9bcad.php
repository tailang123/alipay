<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo u('alipay/pay');?>" method="post">
        订单号: <input type="text" name="WIDout_trade_no" id="" value="2018918171125595"><br>
        订单名称: <input type="text" name="WIDsubject" id="" value="测试"><br>
        付款金额： <input type="text" name="WIDtotal_amount" id="" value="0.01"><br>
        商品描述： <input type="text" name="WIDbody" id="" value="这个商品很垃圾"><br>
                <input type="submit" value="提交">
    </form>
</body>
</html>