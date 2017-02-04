# panda-index

框架入口调度文件

web容器将请求分发到对应的调度文件上,调度文件根据不同的环境分发到响应的文件上.

##文件夹及对应存放内容

文件夹|存放内容
----|----
inc|各种情况下的包含文件
loader|不同业务和应用类型的载入文件配置
.|不同业务和应用类型的调度文件

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