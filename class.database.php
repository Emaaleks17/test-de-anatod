<?php
/*
 * anatod ® - ©
 */
?>
<?php
//class class_db {
//    PUBLIC  $conn=NULL;
    
    //CONST 
        $dbuser      =   "root"; //'test',
        $dbpass      =   "";//'test5678',
        $db        =   'test_anatod';
        $dbserver  =   "127.0.0.1" ; //'anatod-test.c75o4mima6rb.us-east-1.rds.amazonaws.com';
        $conexion = mysqli_connect($dbserver,$dbuser) ; // a la variable $conexion esta la conexion a la bd
        mysqli_select_db($conexion,$db) ;

   // public function __construct(){
       // if(!$this->conn){
           // try {
           //     $this->conn = new mysqli($dbserver,$dbuser,$dbpass,$db); 
            //    $this->conn->set_charset("utf8");
           //     if (!$this->conn) {die('No se pudo conectar.');}
          //  } catch (Exception $exc) {
          //      echo $exc->getTraceAsString();
         //   }
       // }
   // }
//}
