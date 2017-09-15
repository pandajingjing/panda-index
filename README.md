# panda-index

框架入口调度文件

将请求分发到对应环境和请求类型的入口文件上,入口文件再将请求分发到相应的版本或者分支的文件上.

##文件夹及对应存放内容

文件夹|存放内容
----|----
inc|各种环境和请求类型的函数文件
loader|不同业务和请求类型的载入文件配置
.|不同环境和请求类型的入口文件

注意:
- 待项目成熟后,需要进行文件合并,避免大量的include操作

## 关于作者

```php
date_default_timezone_set('Asia/Shanghai');

class me extends 码畜
{

    public $_sNickName = 'pandajingjing';

    public $_sWebSite = 'http://pandajingjing.jxulife.com';

    protected $_iQQ = 18073848;
}
```