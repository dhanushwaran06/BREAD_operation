<?PHP

        // includes
        include('../lib/db.php');
        include('../lib/general.php');
        include('../lib/template.php');
        
        include('../data/student.php');
        

        // page variables
        $PV = ['debug'=>0];

        $PV['db_table_data'] = [];
        
        $PV['debug']   =  (@$_GET['debug'])?1:0;
        
        // connect db
        $dbh = db_connect();
      
      
        $DESK_DATA['data'] = fetch_assoc_array([
                                                  'dbh'   => $dbh,
                                                  'table' => 'student_info',
                                                  'fields'=> ['full_name as name','roll_no','date_of_birth as dob']
                                                  
                                                  ]);
        
        if($PV['debug']){ var_dump($PV['db_table_data']); }
                
        // close db
        mysqli_close($dbh);
        
        // Template
        $T =new Template("../template/student.html");
        
        $T->AddParam('title',$DESK_DATA['title']);
        $T->AddParam('student_info',$DESK_DATA['data']);
        
        $T->EchoOutput();
        
        
?>        

