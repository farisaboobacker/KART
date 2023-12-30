<?php 
class Product{
    var $_db;
    public function __construct($db) {
        $this->_db = $db->con;
    }

    public function addProduct($Product_name,$Product_price) {
        $sql = $this->_db->prepare("INSERT INTO `products` (`Product_name`,`Product_Description`) VALUES (?, ?)");
        $sql->bind_param("ss",$Product_name, $Product_price);
        return $sql->execute();
    }

    public function fecthProduct()  {
        $sql="SELECT * FROM `Product`";
        return $this->_db->query($sql);
    }
    
    public function ProductById($id)  {
        $sql="SELECT * FROM `Product` WHERE `id`=$id";
        return $this->_db->query($sql)->fetch_object();
    }

    public function updateProduct($id,$Product_name,$Product_Description)  {
        // $sql="UPDATE `Product` SET `Product_name`='$Product_name' , `Product_description`='$Product_Description' WHERE `Product`.`id`=$id";
        $sql="UPDATE `Product` SET `Product_name` = '$Product_name', `Product_description` = '$Product_Description' WHERE `id` = $id";
        return $this->_db->query($sql);
    }

    public function deleteById($id)  {
        $sql="DELETE FROM `Product` WHERE `id`=$id";
        return $this->_db->query($sql);
    }

}