<?php
//-Trong PHP để khai báo kế thừa từ một lớp cha chúng ta sử dụng từ khóa extends theo cú pháp:
class childClass extends parentClass
{
    //code
}
//childClass là class mà các bạn đang muốn khởi tạo, parentClass là class cha mà childClass đang muốn kế thừa nó.
//VD
class ConNguoi
{
    var $chan;
    var $tay;
    var $mat;
    var $mui;
    function an()
    {
    }
}
class NguoiLon extends ConNguoi
{
    var $longnach;
    function di()
    {
    }
    function noi()
    {
    }
}
class TreCon extensds ConNguoi
{
    function bo()
    {
    }
}
//3. Kế thừa bắc cầu: -Và đương nhiên trong hướng đối tượng các bạn cũng có thể sử dụng tính chất bắc cầu đối với kế thừa. Khi kế thừa như thế thì class con sẽ kế thừa được tất cả các thuộc tính, phương thức từ lớp cha của nó và lớp cha của lớp cha nó...
class A
{
    //class A
}
class B extends A
{
}
class C extends B
{
    //class C
}
//4.Gọi thuộc tính và phương thức của lớp cha: Đối với cách gọi thuộc tính và phương thức của class cha  thì không khác gì bài trước (xem bài trước). Nó chỉ khác khi lớp con của chúng ta cũng tồn tại một thuộc tính hay phương thức mà lớp cha của nó đã tồn tại rồi. Trong trường hợp này chúng ta sử dụng từ khóa parent::methodName() hoặc parent::propertyName để xử lý.
class ParentClass
{
    function getClass()
    {
        return 'ParentClass';
    }
}
class ChildClass extends ParentClass
{
    var $name = 'ChildClass';
    function getclass()
    {
        return 'ChildClass';
    }
    function getMethod()
    {
        echo 'Đây là phương thức ăn của lớp ' . $this->getclass();
    }
    function getMethodParent()
    {
        echo 'Đây là phương thức ăn của lớp ' . parent::getclass();
    }
}
$class = new ChildClass();
$class->getMethod();
//kết quả: Đây là phương thức ăn của lớp Trẻ con
$class->getMethodParent();
//kết quả: Đây là phương thức ăn của lớp Người lớn
?>