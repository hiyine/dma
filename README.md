#dma
代刷网后门解决方案

打开后门文件，可以设置自己的加密密钥dKEY。
原理：
上传到代刷网后，访问后门文件会自动INCLUDE代刷网的文件CONFIG.PHP，这里面包括了代刷网数据库信息，文件会将其数据库信息加上代刷网的域名等信息，进行特殊算法加密，显示出信息加密后的字符串。将字符串复制到解密程序中，输入密钥dkey，即可自动解密。
听不懂的小白可以直接看下面的使用教程。
使用教程：1下载php后门程序。
2
