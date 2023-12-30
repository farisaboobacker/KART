<?php 
class Category{
    var $_db;
    public function __construct($db) {
        $this->_db = $db->con;
    }

    public function addCategory($category_name,$category_Description) {
        $sql = $this->_db->prepare("INSERT INTO `category` (`category_name`,`category_Description`) VALUES (?, ?)");
        $sql->bind_param("ss",$category_name, $category_Description);
        return $sql->execute();
    }

    public function fecthCategory()  {
        $sql="SELECT * FROM `category`";
        return $this->_db->query($sql);
    }
    
    public function categoryById($id)  {
        $sql="SELECT * FROM `category` WHERE `id`=$id";
        return $this->_db->query($sql)->fetch_object();
    }

    public function updateCategory($id,$category_name,$category_Description)  {
        // $sql="UPDATE `category` SET `category_name`='$category_name' , `category_description`='$category_Description' WHERE `category`.`id`=$id";
        $sql="UPDATE `category` SET `category_name` = '$category_name', `category_description` = '$category_Description' WHERE `id` = $id";
        return $this->_db->query($sql);
    }

    public function deleteById($id)  {
        $sql="DELETE FROM `category` WHERE `id`=$id";
        return $this->_db->query($sql);
    }

}