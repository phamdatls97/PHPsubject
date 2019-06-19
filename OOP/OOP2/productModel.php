<?php

class productModel extends Database{
    public $table = "product";
    // Lấy tất cả các bản ghi từ bảng products
    public function __construct($ip, $user_name, $pass, $csdl)
    {
        parent::__construct($ip, $user_name, $pass, $csdl);
    }

    public function index(){
        //$this->>connection
        $sqlSelect = "SELECT * FROM".$this->table;
        $result = $this->connection->query($sqlSelect);
        return $result;
    }

    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * không cần cái key id array('product_name' => 'son môi')
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function create($data) {
        // $this->>connection
        if(isset($data["product_name"]) && isset($data["product_desc"]) && isset($data["created"])){
            $product_name = $data["product_name"];
            $product_desc = $data["product_desc"];
            $created = $data["created"];
            $sqlInsert = "INSERT INTO". $this->table."(product_name,product_desc,creted) VALUES ('$product_name','$product_desc','$created')";

            //thực hiện SQL
            return $this->connection->query($sqlInsert);
        }
    }

    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * $data cần đủ các cột trong CSDL của bảng products
     * Lấy ra tất các bản ghi từ bảng products
     */

    public function edit($data){
        //$this->>connection
        $sSelect = "SELECT * FROM".$this->table."WHERE id =" .$data["id"];
        $this->connection->query($sSelect);
        if(isset($data["id"]))
        {
            $id = $data["id"];
            $product_name = $data["product_name"];
            $product_desc = $data["product_desc"];
            $created = $data["created"];
            $sqlUpdate = "UPDATE".$this->table."SET product_name = $product_name, product_desc = $product_desc, created = $created WHERE id = $id";
            return $this->connection->query($sqlUpdate);
        }
    }

    /**
     * xóa
     * @param $product_id
     */
    public function delete($product_id){
        $sqlDelete = "DELETE FROM".$this->table."WHERE id=".$product_id;
        return $this->connection->query($sqlDelete);
    }
}