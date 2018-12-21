<?php
//KHAI BÁO
interface InterfaceName
{
    //code
}




//Chỉ được khai báo phương thức chứ không được định nghĩa chúng trong interface.

interface DongVat
{
    //đúng vì chúng ta chỉ khai báo phương thức trong interface
    public function setName();

    //Sai vì chúng ta không được định nghĩa phương thức trong interface
    public function getName()
    {
        //
    }
}




//Trong interface chúng ta chỉ được khai báo hằng không thể khai báo biến.

interface DongVat
{
    //đúng vì trong interface có thể khai báo hằng
    const CONNGUOI = False;

    //Sai vì trong interface không thể khai báo biến
    public $name;

}



//Một interface không thể khởi tạo được.
interface DongVat
{
    //
}
//sai vì interface không thể khởi tạo được
$dongvat = new DongVat();


//Các lớp implement lại interface thì phải khai báo và định nghĩa lại các phương thức có trong interface.

interface DongVat
{
    public function getName();
}

//Class này đúng vì đã khai báo và định nghĩa lại phương thức getName
//trong interface
class ConTrau implements DongVat
{
    private $name;

    public function getName()
    {
        return $this->name;
    }
}

//Class này sai vì chưa khai báo và định nghĩa lại phương thức getName
//trong interface
class ConBo implements DongVat
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }
}


//interface có thể kế thừa lẫn nhau.

interface DongVat
{
    public function getName();
}

interface ConTrau extends Dongvat
{
    public function checkSung();
}

class ConNghe implements ConTrau
{
    private $name;
    const SUNG = false;

    public function getName()
    {
        return $this->name;
    }

    public function checkSung()
    {
        return self::SUNG;
    }
}
