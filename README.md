# QZAPI
强智教务系统API PHP封装

根据[GDUF-QZAPI][1]列出的API封装的PHP类。由智校园APP抓包得出，兼容可使用智校园APP的其它学校的强智教务系统。

[1]: https://github.com/TLingC/GDUF-QZAPI

## 例程
获取当前周的课程表
```php
$site = "YOUR_SITE";
$xh = "YOUR_USERNAME";
$password = "YOUR_PASSWORD";
include("qzjw.class.php");
$qz = new QZAPI("http://" . $site . "/app.do");
$auth = $qz->authUser($xh,$password);
$token = $auth['token'];
if($token == -1) exit("用户名或密码错误");
$curtime = $qz->getCurrentTime($token, date("Y-m-d"));
$timetable = $qz->getKbcxAzc($token, $xh, $curtime['xnxqh'], $curtime['zc']);
print_r($timetable);
