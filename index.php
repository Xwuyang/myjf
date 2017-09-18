<?php
include_once 'Antfin.class.php';
/*
 * 以下参数为沙箱测试环境下参数
 */
$config['appId'] = '2016092100561603';
$config['gatewayUrl'] = 'https://openapi.alipaydev.com/gateway.do';
//密钥 暂时只支持RSA加密，不支持RSA2     RSA签名验签工具生成密钥时请使用【PKCS1非JAVA】    密钥暂时不支持读取文件   有需要可以改类里的  sign签名方式
$config['alipayPublicKey'] = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDIgHnOn7LLILlKETd6BFRJ0GqgS2Y3mn1wMQmyh9zEyWlz5p1zrahRahbXAfCfSqshSNfqOmAQzSHRVjCqjsAw1jyqrXaPdKBmr90DIpIxmIyKXv4GGAkPyJ/6FTFY99uhpiq0qadD/uSzQsefWo0aTvP/65zi3eof7TcZ32oWpwIDAQAB';
$config['rsaPrivateKey'] = 'MIICWwIBAAKBgQC8BjgvYWVdlkaPpfVI1sVBzVt/+AS1iLrdkS8J7R6kBWR49bONXYAJ7yvcQB9omXFGp4nUOD0y89ghCx+WSjQOU2deYAZ93N3RnWp4olfIgdvdwQ/JZYf1BhKNu/zpSCgNDNFBoPaP7gpyFWyDVD+49zY8JJ+davo0FMiSW/zOeQIDAQABAoGAMbvXarjxbgLM4Tw9mCmu/YvLMxswa7Ah9W9sqMx+uVXv0Ir1FmRv9LC9wkF3zVwg+VZhf6/siCi1t2/QyBkSkW8N2Avd2/xNKBM8OVeFxvmHANL9f7lxIA9PEXWoZUoo81zrgPipyabhcAreQmmhU02b70wN+IMHs69VGReaVjECQQDt7mBlv7WUlZJLKo8i0taHRaVY6ZdBEj8Hud2WT4TCJZfe9ALtt2BqvKjHMGowkwPVuXPvjX6gY9x6g98k0uGtAkEAyk2aUF/NG+rowuirjQe09CnCpf31MlBxvr1ViTMheCsqNHPg0ZklfY7PZnMTGdfYZbYRWjj+3QOsKZ9plmyxfQJAebZIX6RbCeAdjw/9Wq4KCfbJp5sOwb3IunYM8VhKLFq4vteKK/pzewZ5PDP7DlAWVR1iPjfef8O1xIJzAs5RnQJARbnRgfpC+2hPqT4AQq9xUuZBzGxnYlwPmCoxnQQeeQiHl2SJDDS4kznxieIHp1SZpRTHjk0uqoZlhEMJZWs5EQJAT6KnC8ZqvhG+dHFNewrmGf4rzpFwOg65JZ+JWXu2XUEaiT/a6QBp5Ge5C8tyN6HTtiPkJTASdLk/IYP2P00W2A==';
$antfin = new Antfin($config);//$config 可以传蚂蚁金服参数，不传默认查询数据库里的参数（数据库查询用的是thinkphp框架查询）
//查询口碑门店详情
$data = array(
    'page_no'=>'1'
);
$s = $antfin->shopBatchquery($data);
print_r($s);die;//Array ( [code] => 10000 [msg] => Success [current_pageno] => 1 [total_pageno] => 1 [shop_ids] => Array ( [0] => 2016111400077000000000013841 ) )




?>