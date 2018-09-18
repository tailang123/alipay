<?php
return array(
	//支付宝配置参数
	'alipay_config' => array(
		'partner' => '2088221351152516',   //这里是你在成功申请支付宝接口后获取到的PID；
		'seller_email' => '3201913472@qq.com',//这里是卖家的支付宝账号，也就是你申请接口时注册的支付宝账号
		'key' => 'g9f62pso1r0w1chxgn9fwur69tn92460',//这里是你在成功申请支付宝接口后获取到的Key
		'sign_type' => strtoupper('MD5'),
		'input_charset' => strtolower('utf-8'),
		'cacert' => getcwd() . '\\cacert.pem',
		'transport' => 'http',
	),
	'alipay' => array(
    	//支付类型
		'payment_type' => "1",

        //这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法； chuli
		'notify_url' => 'http://dabdelion.case.zonecool.cn/index.php/Home/Pay1/notifyurl',
    
        //这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
		'return_url' => 'http://dabdelion.case.zonecool.cn/index.php/Home/Pay1/returnurl',
	),
);