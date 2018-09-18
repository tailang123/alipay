<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016091300502851",

		//商户私钥
		'merchant_private_key' => "MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQC0MvQExOTmUxlfmXN8l6jMAiRbGSGEzbSRhjpRw4XN+MVeCBwtWWlfx+0e0hxaY1RwFQd5C9n0XEiV49ZAyRvp3LdwnxvSJMZpTQcgmU3HcNtUq5zIqfdG2ovWu8/x+hWHJKt4THkVp7P0J1CCTnTxj2aZwH8730wKSlv5cdC2eaWIpvUc7+tBZNvLr2qlUjbXuzQ5Ry0yjr8folL0YrIwHrrUOJsmtIaJ3wR/ukA/75sHmMOpm1Q5Yyl/H9hca4/763EbnL4Eh7E6RUb/EL7yEfI787FUWkVU95FOI3wboP+C8Q6MSJ1lZO6J8nJ3XJOhepmFnCEx4XvlwnzewVhdAgMBAAECggEAL9N+NG3VmtPfXiIqJp1R7aN75rnKzaaTEDSh8eWE89/c8lIQuHCMqSE07AM0B0Fpvb23GAdvN43uremkidlWkUFFZpy0E5gzGOuawqotnIt1iwlpOVDzElka2ElMrZqEcDPpVqplULwL5PcyRQNxwlMfFhujKU7grbKCqrfsfyFjk/eJ2quX1CXoHAYY+HfnHe0EJLGPz0RaEDkKY91KjskymH7ifVRk1sCWwO7umJA7KJmAODCY5Y7SQT4fWG5SPt2fzyyfIyp/G044Rl1fG0DItnaVE7fbt5tULRhI3RLlaceXmpCX7q9wX0SDGOKEKSCIjRDlZAlsfXBudHy5QQKBgQDt8GkAcFLCKWTpoqnJWYJ+J9HbrZGmBE0xIuwT1/rzw1gyxNoPTA+aebp03OLEc1UTMLqm2hTIdliGuJk4e3y6lFD4NfCudnblWGUK42ojvaaAss1wBrnlV1/4u/I3b8b48HtHStCnXKl5Azgssu2f0ORoxjedlMoK0SYjnu4XtQKBgQDB4IxnYY/KHAHEY5/5kI9LGf6vgJY7E/A8AEHhFLKmnEm0dARIYojeH4vE3MZ6EelzfLoDPF2k5cAFDznRncutgJELAL8SS6omqgRyUcmr8cADE1vzvIaCcBwtJ6ios82CKVxa7lcLgM8EoYfBhdR1t/frujhar0VLXGttsYRXCQKBgQCIhY+Jy+kANMYM8+Mdf3lLL0fPFvjh28f6sIHqJNt9sBDUGHTRoB+3z653TSHj/BTNTQFbqPeRya2jpxlq+hen6l/G+xQc1iYEE8LuC2wkE7YMVAtiAsn42DhdvGEPA9iTj0/8qOWtkZI/t+QsaYHEWBQmNc1FYlDHAhgzCgasnQKBgQCkoaw4QXVbd4rcnIiE4Id9i5Zkq3lms1ilasaGfg/yQPapgHb+jIWSsRD720nC8KDfi4NdKg6O7vWuli5P3IHPVERWJo0Z2Rykdm0OMnthQgj905uajnVeIBsdEPc8Qmp5Y+vj304VG40vboccAyvVxqGFD325K+pYwyMKY9pwGQKBgQDVYRW9iuSzkGKdHyNx5I8cLJmdw7igB9BjNJmLB2qGR5X6RrMki7WRsY96DwRS0U2RuwJbxAb4n4Xp8hDZYG91qLI2e+yYZ0b7NCz//MtoOSDcAZ16FJ0xxdNyicfFX8v/cdnMxC1mXislE66BwYG5HMyAPuFYwcROvrJcvBmWjw==",
		
		//异步通知地址
		'notify_url' => "http://www.shongfei.top/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://www.shongfei.top/alipay.trade.page.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA8r8n+Ug1ybNw5+hnU9XSW4WyJPYiYE38qK59btBnOhu7D24XsxF96784+cSACRKVp4SiU6D3VALXTmbVQpawAgiehzmNov4ATfubc12zW6AYQTnZG38blS+tCaTjF/9tBVJAWEV2D0aSXl2QAAX1kEkGLfkrLAMFpwaTDrKi8uFq/8zKeZIb7djauMTxBYnUxv0nsJLcqzYt1DvWanTjxOgUmJ3/XTyV9qx+FeF4ppBK7yd7ayNlb3wvN3BZOSA42dIZSkt6ImY0OpiCmUCLIlUAgO+eg0krd2NKd7djNfc2ORPX6om7pys0aHEFCZ8nO942YqxWvTQbGWJ/zDoLwQIDAQAB",
);