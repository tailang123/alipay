<?php 
namespace Home\Controller;

use Think\Controller;

class AlipayController extends Controller 
{
    public function index()
    {
        $this->display();
    }

    // 支付
    public function pay()
    {
        $input = i('post.');
        
        $config = \C('alipay_config');
        //异步通知地址
        $config['notify_url'] = $config['notify_url'];
 
        //同步跳转
        $config['return_url'] = $config['return_url'];

        Vendor('Alipay.pagepay.service.AlipayTradeService');
        Vendor('Alipay.pagepay.buildermodel.AlipayTradePagePayContentBuilder');
 
        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = trim(I('post.WIDout_trade_no'));
 
        //订单名称，必填
        $subject = trim(I('post.WIDsubject'));
 
        //付款金额，必填
        $total_amount = trim(I('post.WIDtotal_amount'));
 
        //商品描述，可空
        $body = trim(I('post.WIDbody'));

        $ud = session('users.uid');
        $data = array(
            'uid' => $ud,                              //用户id
            'win_code' => $out_trade_no,               //商户订单号
            'winsubject' => $subject,                  //订单名称
            'wintotal_amount' => $total_amount,        //付款金额
            'winbody' => $body,                        //商品描述
            'state' => 'zfb',                          //支付方式
            'status' => '0',                           //是否支付
            'ordertime' => time()                      //交易时间
        );
        M("pay_record")->add($data); // 保存交易信息
 
        //构造参数
        $payRequestBuilder = new \AlipayTradePagePayContentBuilder();
        $payRequestBuilder->setBody($body);
        $payRequestBuilder->setSubject($subject);
        $payRequestBuilder->setTotalAmount($total_amount);
        $payRequestBuilder->setOutTradeNo($out_trade_no);

        $aop = new \AlipayTradeService($config);
        $response = $aop->pagePay($payRequestBuilder, $config['return_url'], $config['notify_url']);
 
        //输出表单
        // var_dump($response);
    }
}