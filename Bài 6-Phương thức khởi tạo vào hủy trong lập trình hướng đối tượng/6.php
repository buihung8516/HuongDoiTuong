<?php
//1, Phương thức khởi tạo.
//-Phương thức khởi tạo là một phương thức mà khi chúng ta khởi tạo một class thì nó luôn được gọi kèm theo. Phương thức khởi tạo cũng sử dụng được đầy đủ chức năng của các phương thức bình thường khác trong class và trong một class có thể có hoặc không có phương thức khởi tạo.
//
//-Trong PHP có hỗ trợ chúng ta 2 cách khai báo phương thức khởi tạo:
//
//Cách 1: Khai báo trùng với tên của class
//VD:
class Foo
{
    //Khai báo phương thức khởi tạo
    public function Foo()
    {
        echo 'Class Foo được khởi tạo';
    }
}
new Foo();
//kết quả: Class Foo được khởi tạo
//Cách 2: Khai báo phương thức có tên  __construct()
//
//VD:
class Foo
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo';
    }
}
new Foo();
//kết quả: Class Foo được khởi tạo
//2, Phương thức hủy.
//-Phương thức hủy trong class sẽ được gọi khi class đó được hủy. Nó thường dùng để giải phóng tài nguyên của một class và trong một class có thể có hoặc không có phương thức hủy.
//
//-Để khai báo phương thức hủy trong class thì chúng ta chỉ cần khai báo phương thức có name là __destruct().
//
//VD:
class Foo
{
    public function __destruct()
    {
        echo 'Class Foo được hủy';
    }
}
$foo = new Foo();
//kết quả: Class Foo được hủy
//Khi mà một class có đầy đủ phương thức khởi tạo và phương thức hủy thì sẽ như sau:
class Foo
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo';
    }
    public function getMessage()
    {
        echo 'Đây là class Foo';
    }
    public function __destruct()
    {
        echo 'Class Foo được hủy';
    }
}
$foo = new Foo();
//kết quả: Class Foo được khởi tạo
$foo->getMessage();
//kết quả: Đây là class Foo
//kết quả: Class Foo được hủy
//3, Phương thức khởi tạo và hủy trong kế thừa.
//-Khi một class có phương thức khởi tạo và phương thức hủy kế thừa từ một class cũng có phương thức khởi tạo và phương thức hủy thì phương thức khởi tạo và phương thức hủy sẽ nhận của class được kế thừa.
//
//VD:
class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }
    public function __destruct()
    {
        echo 'Class Bar được hủy';
    }
}
class Foo extends Bar
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo';
    }
    public function __destruct()
    {
        echo 'Class Foo được hủy';
    }
}
$foo = new Foo();
//Kết quả: Class Foo được khởi tạo
//kết quả: Class Foo được hủy
//-Nếu như bạn muốn sử dụng được phương thức khởi tạo và phương thức hủy trong class cha thì bạn chỉ cần gọi lại phương thức đó của lớp cha.
//
//VD:
class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }
    public function __destruct()
    {
        echo 'Class Bar được hủy';
    }
}
class Foo extends Bar
{
    public function __construct()
    {
        //gọi phương thức khởi tạo của class cha
        parent::__construct();
        echo 'Class Foo được khởi tạo';
    }
    public function __destruct()
    {
        //gọi phương thức hủy của class cha
        parent::__destruct();
        echo 'Class Foo được hủy';
    }
}
$foo = new Foo();
//Kết quả: Class Bar được khởi tạo
//Kết quả: Class Foo được khởi tạo
//kết quả: Class Bar được hủy
//kết quả: Class Foo được hủy
?>