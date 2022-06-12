
<?php

session_start();
class Authentication{
    static function login( $uid ){        
        //$_SESSION['authenticated'] = true;
        $_SESSION['uid'] = $uid;
    }
    static function check(){
        return isset( $_SESSION['uid'] );
    }
    static function uid(){
        return $_SESSION['uid'];
    }
    static function logout(){
        // session_unset();
        // session_destroy();
        unset( $_SESSION['uid'] );
    }
}
class Authorization{
	static private function getUserRole(){
		$uid = Authentication::uid();
		// todo: get user role from db and return
	}
    static function checkRole( $role ){ // Authorization :: checkRole('admin')
        if( ! Authentication :: check() )
        {
            return false;
        }
         $dbc = new mysqli ( 'localhost', 'root', '', 'bags');  
         $sql = "SELECT FROM user WHERE id = ? ";
         $result= $dbc > query($sql,Authentication :: uid());
         $row= $result -> fetchArray();
         $dbc -> close();
         if($row['role'] == $role)
         {
              return true;
         }
         else{
             return false;
             echo "sdasd" ; 
         }
    }
}
?>