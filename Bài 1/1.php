<?php
// Personnel là 1 lớp, name-age là thuộc tính của lớp
class Personnel
{
    private $name = 'Vu Van A';
    private $age = 32;

    public function getPersonnel()
    {
        return $this->name . '-' . $this->age;
    }
}