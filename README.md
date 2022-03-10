# psr16

psr16实现

## 安装

``` cmd
composer require digphp/psr16
```

## 用例

``` php
$cache = new \DigPHP\Psr16\NullAdapter;
$cache = new \DigPHP\Psr16\LocalAdapter('./cache');

$cache->...
```
