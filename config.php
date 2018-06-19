<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2018051960157913",

		//商户私钥
		'merchant_private_key' => "MIIEogIBAAKCAQEAxgjDKeN/x3BXc6Ras1B+vwFXKlIciAzUtWaKryzNCEfFIEtLyM1YJmsJlub/05G8cLxsllwCqs7SzQ2sNzGFACvwPf4svwk8CvuJbsieOvgUWsTkaETb+7LlVYs3FsPIBYe1m5fu5JmNC6MDh5LQKULwyyQHGaDAJRWZLRRXl4wepiqa1rh37rO4lkQ905W42NL/aGye7esJkRtn4CzOLn0zCUzujwz3n8llNrU3XTlrx0mdeYotwpN0Y0UQnGkGuPkigPYs9+LYEcD5W+6LFL2WS++iaGoeaAssocr2hSABYkGv9QhJBtROcxtsgf2FUV9oQd+BmXjRo8jTH/qo6wIDAQABAoIBAD2RRdPFFdnUdGvQgh5TfUQ2z3mp05L8ojjPa3hwrkHPxlp27lW8eZZgGrgekxScr4BBJGVOr8mYyXLUuGDkdVwLTQKI/jJaVZ94ek7F8mOU8wcRRY2hMt86zA/fWz4pmgsWGQEJqEzL7Ezc3mEM5MifNiuBxO9Tycj9wQSB2YWUj29iDK3EiwOH0P48odZW7Pbhg3CTCy/ECEMe286/cuWloz3+hrfclTNraLAhfa77GHSkOH3pG410k03awW/g1y+VGkNCCuj3dOEgnEnOAiS7NwTkEOCOClb5RvOHYUYUjYtqcH73lWo92gUU5JQOSOIagwU0LXXM6e0fDMDRxjECgYEA6UzKtxPNWrmF1RbEUeZlcRJF67SU5/5aD5j9Q1TQYpyUzopeD17S/m6veYZTRDO/j/hWuWupoq1I219V+KgN6riFvWBJnhLN3rCkGAAKqaqtqhY2I8b7DXo0GCILFu/vPluLW89d0kztKXU3NyRTOFBjXoDQ8qUMaAKy6Js5EOkCgYEA2U2LnPNdMG4sb+rUZCfhRYD9DAmAMaE2PGH/H0J78uM0lacHcFpQP9Q0cVrkXu8EPNWJX4kgY8y686ZQ1BlERDcTxOoKRijJdsPQDmWskpai4RbKOIaijnKJq/C8tal/KyKn2wiadud+7pN8B1FkOtSwozHB2CSNlgtEjok/ZrMCgYBP7bxBzun7HDaK09r8yDeW7pC/+UVO2iiW0W5rhAJE1qpwvJ0PHQiinN9HfkrGwgfuVkG4EveyQTYF2nrEzya9dOx0/ikanAymL9R4WINOr6gB7swro79dVbHFVtx/xkIsFgb/tGLLawmRu5PoM2zDjV8OAIoVp5BBjjMnWA7MCQKBgEDjiRc7DM7Td22MIBQwXHKWy/l2NNOdIkbxtG8vOTgUZLVzhSMltOT6hxZ6X8uBcDCCS10943ApyIHNXkGXsez0zXB1us+sikxuuIg0EE5NsSGp3oT2n0AOL9IqNw/AJ3tIA/vCG+35vsubOuQsh9ORg5WX3Byg/a6aesRdc5NFAoGARtDUjZYKBei4uEXfCDYeOeNBt9B0mG9QjQurSiW6ja5gNJggL4/7CFWLGdIIqyiZA4cJo1kxSd+b8kFFfCkp1lFALTIOyprhrThOwDHhUoT+4QeV21gkhJWWduQzybALp4YRk1iMvjY5dVo1ychrbbNC67cnfHbL5n+WQxqAa04=",
		
		//异步通知地址
		'notify_url' => "http://alipay.strongculture.cn/notify_url.php",
		
		//同步跳转
		'return_url' => "http://alipay.strongculture.cn/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.Alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAi5pCeMLdmRpBkXVnv1LNI5ig+IyKWXDLWFt8nNozdvUukS/6MtvQAu6tHnNb1FeP1yZ85FWXureikRJ7haf4dVqMbwSTAQFhFnxR4z9CTTILcgtimH30+OWcJurEoIHwQ84WIVjLo+2qq+D6LNQYZMJloVDxnzLuAMovYIYl7Yz4Y6uK+2a8TlYnkUuuStTKZYc4qVk9bMr/SCyTC3DUdx356ME+1rmSxVrVOlss691bL9ybo1EfdBDG9TICNb4/Ahut8G2B/91+GZ64NM/7n9Qsb19HI4RJtJrsopkJ3+p/3ZEEV7d68kZzzxWgZei0r/aJXtQ3zACyypSkyRwfpwIDAQAB",
);