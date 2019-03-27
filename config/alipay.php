<?php

      return  $config = array (
		//应用ID,您的APPID。
		'app_id' => "2016092600601630",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCWq/rKmu40dyWMW2E0l6bbiWTSl06PJYVTlJRZ1Lh6ud/VDqk9MP0gxyJ3lCJ5TqC2TzGIgjx3tXVzkQyQeq8A2CNjH0bfcrZimu/WRWDYHf90i+4D7UXlkQ+6Nu13f0Uqq5d7V2SqUVy4vg/zMuEgGl/7WiohEy2YHIarxMuOCkSVhoBWqykeung4pVtoPCtLFeZpLOhxKMtpgLpyRxe4Vu5mWVQB6qgAXNUiUXhRi3Arpp5POaVRsRGJ/9BYiomD5SA0s8Z2DfYtNqr6Bwg5OvV/abvOlY4bTzNtHrrL/16lmgYQMy+Nu1N9LdpnCE5VmZQkEFiWasU0rvG8xs/ZAgMBAAECggEANAsRZFwhfVPOT23c5JqhUuFhRvBmfUFbjSQcHe9BDXsYmnIm+PDr7h96g01Snw4OqwottNYvZrXx7MokSd9mhWciygEqrNHlt6eGwj9SlTO/YhVXUFnrs8DoaszAN29ph7SfbUYhikbyPQnBXqKrajhSAPMC7EvAivMHfVtLaDMPSDKSYwYxIjHgKzjskwv7ZZjVztz7HH/1HLCdphjaY4giypcJ8K38Ef4M1UQgzQBWaXs7gxbcJlNf/sTfhtACcBsSXGjb3GNB3/qCX4NPGYoBPtT5Ye8YJoE3eK4m3mN++fakOiHid26/4cppSj5eK+HgWPaMw8aSlJoD+igx0QKBgQDwd050NUFKNMC55RoE0NWtL4sB6Mmnn0vXT6ubkVPRylh+9o0XigI6hsR4in4LXcJv4tVj3HF87wZYVvzv9JMbfo0EMDXZL+6ygvFoaZmkvNC4u60PASSZbjmzSBp/ObZR7ILNnHD7NVII4zsBBg3dErAI/rkvTLxWTiEs7QZCJQKBgQCgZ7S4u1gRmJ582Lp2/eXqnxXUUmWPfZDNu9X57KY7Nzxe30takIoi/qSq8vE5TZCqrY+oxkhgJcj4njilp9BgksGmen98AyY9K89TniYLhuWtOOrkYwqht+ntdTCRmoOdTWZy2p+O+LCuWeoJ4BgrO9UVRlo02mi7eKiE5yMWpQKBgCnLouBB7WI3fxQQhRA3OByM+e1QB9TRtD3tRBebD+WT9QPEWMuxmieQCxAkijnxhv0pgQuFYlhjt0edfwM6EGOkAGCs/H8OfL+cUNdkG2dtxh2FyVOlUDY22WKW8rwQTOc6Y5XXTi/rmaGf1T6dTcWSHPTDSW62OLoLhGqpm//dAoGBAIZ5ywHgVhoSaDRkghbGDx3ely90kJ52d5JzOhWX91jHmv4yl3rqmFR0RVrn56HRzEm6ziiBayXoJ49/HiCLCuAbyOun4P73qPQ5qUwB1wVs51qM0Cf+fGhNxnkD+V7oOhUDUbNSY9g51+2jhdkXnUuJkr+ORovu20ToB+e72yfdAoGAVOlv2ZIEUVm1HAH3PqHdsziEJ/NSMO9kc3N3v7IZQcBl/juTOntHsCtchdhx+1Xe4YV3ZQ+JnVislsuM1dOj/J9YowWiBHx1+lNgMxVTBKafL0HSTEPnwAjINHZsWEpPFBqqMAHs0o6FC53Z9AXTyVFUsSu0vbGLEjtJh8vbaM0=",
		
		//异步通知地址
		'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlqv6ypruNHcljFthNJem24lk0pdOjyWFU5SUWdS4ernf1Q6pPTD9IMcid5QieU6gtk8xiII8d7V1c5EMkHqvANgjYx9G33K2Yprv1kVg2B3/dIvuA+1F5ZEPujbtd39FKquXe1dkqlFcuL4P8zLhIBpf+1oqIRMtmByGq8TLjgpElYaAVqspHrp4OKVbaDwrSxXmaSzocSjLaYC6ckcXuFbuZllUAeqoAFzVIlF4UYtwK6aeTzmlUbERif/QWIqJg+UgNLPGdg32LTaq+gcIOTr1f2m7zpWOG08zbR66y/9epZoGEDMvjbtTfS3aZwhOVZmUJBBYlmrFNK7xvMbP2QIDAQAB",
		
	
);

