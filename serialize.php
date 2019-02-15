<?php
$a = 'O:1:"A":1:{s:4:"name";s:6:"fly---";}';
$b = unserialize($a);
var_dump($b);
$b->ljl();
var_dump($b->name);

class A{
  public $name = 'adfa';
  public function ljl(){
    echo "ljl12341";
  }
}
* 二进制序列化保持类型保真度，这对于在应用程序的不同调用之间保留对象的状态很有用。
例如，通过将对象序列化到剪贴板，可在不同的应用程序之间共享对象。您可以将对象序列化到流、磁盘、内存和网络等等。
远程处理使用序列化“通过值”在计算机或应用程序域之间传递对象。
* XML 序列化仅序列化公共属性和字段，且不保持类型保真度。
当您要提供或使用数据而不限制使用该数据的应用程序时，这一点是很有用的。
由于 XML 是一个开放式标准，因此，对于通过 Web 共享数据而言，这是一个很好的选择。
SOAP 同样是一个开放式标准，这使它也成为一个颇具吸引力的选择。
