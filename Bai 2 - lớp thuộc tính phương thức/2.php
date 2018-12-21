<?php
// cấu trúc hàm:
class Name
{
    //code
}



// THUỘC TÍNH
<?php
class Name
{
    //đối với thuộc tính động
    var $propertyName;
    //đối với thuộc tính cố định(hằng)
    const $constName = value;
}


//PHƯƠNG THỨC ( trong vd này là: methodName)
class Name
{
    function methodName()
    {
        //code
    }
}


//KHỞI TẠO LỚP:
new className;
//hoặc
new ClassName();
//Và có thể gán nó vào một biến với kiểu dữ liệu là object bằng phép gán
$variable = new className();



//TRUY XUẤT THUỘC TÍNH CỦA CLASS
//Để truy xuất các thuộc tính động trong class thì chúng ta dùng từ khóa this với cú pháp: $this->propertyName;
//VD: Truy xuất thông tin của thuộc tính name trong phương thức noi của class ConNguoi.
class ConNguoi
{
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;

    function an()
    {
        //code
    }

    function noi($caunoi)
    {
        return $this->name = $caunoi;
    }

    function di()
    {
        //code
    }
}
//Còn nếu muốn truy xuất thông tin của thuộc tính cố định trong class chúng ta sẽ sử dụng cú pháp sau
self::propertyName;








//TRUY XUẤT NGOÀI CLASS
