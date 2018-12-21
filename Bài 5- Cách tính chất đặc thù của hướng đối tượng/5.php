<?php
//1, Tính kế thừa.
//-Tính chất này cho phép một đối tượng có thể có được các đặc tính (thuộc tính, phương thức) mà đối tượng khác đã có thông qua kế thừa(extends). Điều này cho phép các đối tượng chia sẻ hay mở rộng các đặc tính sẵn có mà không phải tiến hành định nghĩa lại. Và tính chất này các bạn đã được học
//2, Tính đa hình.
//-Đối với tính chất này, nó được thể hiện rõ nhất qua việc gọi phương thức của đối tượng. Các phương thức hoàn toàn có thể giống nhau, nhưng việc xử lý luồn có thể khác nhau.
//
//VD: ta có 3 lớp Hình, Hình vuông, Hình tròn. Trong đó lớp hình là lớp cha của 2 lớp còn lại có phương thức là tính diện tích.
class Hinh
{
    protected function tinhDienTich()
    {
        //code
    }
}
class HinhVuong extends Hinh
{
    private $canh;
    public function setCanh($canh)
    {
        $this->canh = $canh;
    }
    public function getCanh()
    {
        return $this->canh;
    }
    //xử lý tính diện tích của hình vuông
    public function tinhDienTich()
    {
        return pow($this->canh, 4);
    }
}
class HinhTron extends Hinh
{
    private $bankinh;
    public function setBanKinh($bankinh)
    {
        $this->bankinh = $bankinh;
    }
    public function getBanKinh()
    {
        return $this->bankinh;
    }
    //xử lý tính diện tích của hình tròn
    public function tinhDienTich()
    {
        return (pow($this->bankinh, 2) * pi());
    }
}
$hinhvuong = new HinhVuong();
$hinhvuong->setCanh(4);
echo $hinhvuong->tinhDienTich();
echo '<br/> ___________________________________________________ <br/>';
$hinhtron = new HinhTron();
$hinhtron->setBanKinh(4);
echo $hinhtron->tinhDienTich();
//3, Tính đóng gói.
//-Tính chất này không cho phép người sử dụng các đối tượng thay đổi trạng thái nội tại của một đối tượng. Chỉ có các phương thức nội tại của đối tượng cho phép thay đổi trạng thái của nó. Việc cho phép môi trường bên ngoài tác động lên các dữ liệu nội tại của một đối tượng theo cách nào là hoàn toàn tùy thuộc vào người viết mã. Đây là tính chất đảm bảo sự toàn vẹn, bảo mật của đối tượng
//4, Tính trừu tượng.
//-Đây là khả năng của chương trình bỏ qua hay không chú ý đến một số khía cạnh của thông tin mà nó đang trực tiếp làm việc lên, nghĩa là nó có khả năng tập trung vào những cốt lõi cần thiết.
//
//-Mỗi đối tượng phục vụ như là một “động tử” có thể hoàn tất các công việc một cách nội bộ, báo cáo, thay đổi trạng thái của nó và liên lạc với các đối tượng khác mà không cần cho biết làm cách nào đối tượng tiến hành được các thao tác. Tính chất này thường được gọi là sự trừu tượng của dữ liệu.
//-Tính trừu tượng còn thể hiện qua việc một đối tượng ban đầu có thể có một số đặc điểm chung cho nhiều đối tượng khác như là sự mở rộng của nó nhưng bản thân đối tượng ban đầu này có thể không có các biện pháp thi hành. Tính trừu tượng này thường được xác định trong khái niệm gọi là lớp trừu tượng hay lớp cơ sở trừu tượng (phần này mình sẽ nói ở bài sau).
?>