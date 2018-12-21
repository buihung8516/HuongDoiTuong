<?php
//1, Khái quát chung.
//-Trong phương pháp lập trình hướng đối tượng các thuộc tính và phương thức được ràng buộc về mức độ truy cập, giúp cho dữ liệu được bảo mật hơn.Cụ thể thể là ba phạm vi: private, protected, public (Nếu không khai báo visibility thì mặc định nó sẽ là public).Khi khai báo kèm theo phạm vi thì chúng ta sẽ sử dụng cú pháp:
class className
{
    //khai báo thuộc tính
visibility $propertyName;
    //Khai báo phương thức
visibility function methodName()
{
}
}
//Trong đó: visibility là một trong 3 từ khóa private, protected, public.
//2, Private.
//-Private là giới hạn hẹp nhất của thuộc tính và phương thức trong hướng đối tượng. Khi các thuộc tính và phương thức khai báo với giới hạn này thì các thuộc tính phương thức đó chỉ có thể sử dụng được trong class đó, bên ngoài class không thể nào có thể sử dụng được nó kể cả lớp kế thừa nó cũng không sử dụng được.
//
//VD
class Person
{
    //khai báo thuộc tính name ở private
    private $name;
    //Khai báo phương thức run ở private
    private function run()
    {
        return 'Đây là hàm run';
    }
}
//Khởi tạo class
$person = new Person();
//gọi phương thức name
$person->name;
//-Sau đó các bạn chạy chương trình lên sẽ nhận được một dòng thông báo lỗi có nội dung: Fatal error: Cannot access private property Person::$name in ...
//VD tiếp:
class Person
{
    //khai báo thuộc tính name ở private
    private $name;
    //Khai báo phương thức run ở private
    private function run()
    {
        return 'Đây là hàm run';
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function getRunMethod()
    {
        return $this->run();
    }
}
//Khởi tạo class
$person = new Person();
//set thuộc tính name
$person->setName('Vũ Thanh Tài');
//Lấy ra thuộc tính name
echo $person->getName();
//Gọi giá trị của phương thức run
echo $person->getRunMethod();
//3, Protected.
//-Khác với private một chút thì các phương thức và  thuộc tính khi khai vào với visibility là protected thì chúng ngoài được sử dụng trong class đó ra thì class con kết thừa từ nó cũng có thể sử dụng được, như bên ngoài class không có thể sử dụng được.
//
//VD:
class Person
{
    //khai báo thuộc tính xe dạng protected
    protected $name;
}
class Male extends Person
{
    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this->name = $name;
    }
    function getName()
    {
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}
//khởi tạo lớp Person
$person = new Person();
//Sai vì biến name có visibility là protect nên không tác động từ ngoài class vào được
$person->name;
//khởi tạo lớp Male
$male = new Male();
//tác động vào biến name qua hàm setName
$male->setName('Vũ Thanh Tài');
echo $male->getName();
//4, Public.
//-Đây là visibility có mức độ truy cập rộng nhất trong hướng đối tượng, khi một thuộc tính hay phương thức sử dụng visibility này thì chúng ta có thể tác động vào thuộc tính hay phương thức đó từ cả trong lẫn ngoài class. Thông thường khi không khai báo visibility thì chương trình dịch tự nhận nó là public nhưng để cho đúng chuẩn thì mọi người lên khai báo từ khóa này vào thay vì bỏ trống.
//
//VD:
class Person
{
    //khai báo thuộc tính xe dạng protected
    public $name;
    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this->name = $name;
    }
    function getName()
    {
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}
//khởi tạo lớp Person
$person = new Person();
//tác động vào thuộc tính name
$person->name = 'Vũ Van A';
//tác động vào biến name qua hàm setName
$person->setName('Vũ Thanh Tài');
echo $person->getName();
?>