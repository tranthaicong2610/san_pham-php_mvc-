<?php
class Database{
    CONST HOST="localhost";
    CONST USERNAME="root";
    CONST PASSWORD="";
    CONST DB_NAME="phpclass";
    public function connect()
    {
        $connect=mysqli_connect(self::HOST,
        self::USERNAME,self::PASSWORD,self::DB_NAME);
        mysqli_set_charset($connect,'utf8');
        if(mysqli_connect_errno()===0)
        {
            return $connect;

        }
        return false;
    }
}