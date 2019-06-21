<?php

namespace MVC\Model;

class EmployeeModel extends Database{
    public $table = "employees";

    public function getAll() {
        $sqlSelect = "SELECT * FORM $this->table";

        /**
         * Thực hiện câu truy vấn và trả data cho biến $result
         */
        $result = $this->connection->query($sqlSelect);
        return $result;
    }

    public function getRow($id){
        $sqlSelect = "SELECT * FROM $this->tabe WHERE id=" .(int)$id;
        $result = $this->connection->query($sqlSelect);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function insert ($data){
        if (isset($data['name']) && isset($data['address']) && isset($data['salary'])) {
            $name = $data['name'];
            $address = $data['address'];
            $salary = $data['salary'];
            $sqlInsert = "INSERT INTO $this->table (name, address, salary) VALUES ('$name', '$address', $salary)";
            // Thực hiện câu SQL
            $result = $this->connection->query($sqlInsert);
            return $result;
        } else {
            return false;
        }
        return false;
    }

    public function update($data){
        if(isset($data["employee_id"])&&isset($data["name"])&& isset($data["address"]) && isset($data["salary"])){
            $id = (int) $data["employee_id"];
            $name = $data["name"];
            $address = $data["address"];
            $salary = $data["salary"];

            $sqlUpdate = "UPDATE $this->table SET name ='$name',address = '$address',salary = '$salary' WHERE id = $id";

            $result = $this->connection->query($sqlUpdate);
            return $result;
        }
        return false;
    }

    public function delete($id){
        $sql = "DELETE  FROM $this->table WHERE id=".(int)$id;
        $result = $this->connection->query($sql);
        return $result;
    }
}