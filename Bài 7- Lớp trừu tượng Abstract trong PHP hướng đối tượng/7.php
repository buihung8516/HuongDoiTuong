<?php
//1, Lớp Abstract.
//-Một lớp được khai báo là abstract thì đó là lớp trừu tượng.
//
//- Đối với lớp này thì nó sẽ có các điểm khác sau:
//
//Các phương thức ( hàm ) khi được khai báo là abstract thì chỉ được định nghĩa chứ không được phép viết code xử lý trong phương thức.
//Trong abstract class nếu không phải là phương thức abstract thì vẫn khai báo và viết code được như bình thường.
//Phương thức abstract chỉ có thể khai báo trong abstract class.
//Các thuộc tính trong abstract class thì không được khai báo là abstract.
//Không thể khởi tạo một abstract class.
//Vì không thể khởi tạo được abstract class nên các phương thức chỉ được khai báo ở mức độ protected và public.
//Các lớp kế thừa một abstract class phải định nghĩa lại tất cả các phương thức trong abstract class đó ( nếu không sẽ bị lỗi).
//-Và để khai báo một abstract class ta dùng cú pháp sau:
abstract class ClassName
{
    // class body
}
//-Trong đó: ClassName là tên của class chúng ta cần khai báo.
//
//-Cú pháp khai báo một phương thức abstract:
abstract visibility function methodName();
//-Trong đó: visibility là một trong 2 từ khóa public, protected hoặc có thể bỏ trống (bỏ trống thì là public), methodName là tên của phương thức chúng ta cần khai báo.
//2, Các ví dụ.
//-Để cho dễ hiểu thì mình sẽ nêu ra các ví dụ cho 6 điểm khác của lớp abstract ở phía trên.
//
//VD1: Khai báo một phương thức abstract trong abstract class.
abstract class Person
{
    //khai báo một abstract method đúng
    abstract public function getName();
    //Sai vì abstract class không thể viết code xử lý được
    abstract public function getHeight()
    {
        //
    }
}
// VD2: Khai báo một phương thức bình thường trong abstract class.
abstract class Person
{
    // đúng
    //khai báo một phương thức
    protected function getName()
    {
        //code
    }
}
//VD3: Không thể khai báo một phương thức abstract trong class bình thường.
class People
{
    //sai vì không thể khai báo một phương thức absract trong class bình thường.
    abstract public function getA();
}
//VD4: Trong abstract class thuộc tính không được khai báo với từ khóa abstract.
{
    //sai
    abstract public $name;
	//đúng
	public $name;
}
//VD5: Không thể khai khởi tạo một abstract class.
abstract class Person
{
    //body
}
//Sai
$person= new Person();
//VD6: Phải định nghĩa lại các phương thức abstract của abstract class đó khi kế thừa.
abstract class Dongvat
{
    protected $name;
    abstract protected function getName();
}
//class này sai vì chưa định nghĩa lại phương thức abstracs getName
class ConTrau extends Dongvat
{
    //
}
//class này đúng vì đã định nghĩa lại đầy đủ các phương thức abstract
class ConBo extends Dongvat
{
    public function getName()
    {
        return $this->name;
    }
}
?>