<?PHP

        // includes
        include('../lib/db.php');
        include('../lib/general.php');
        
        // page variables
        $PV             = ['content' => 'No Content',
                           'debug'   => 0 ];

        $PV['debug']    =  (@$_GET['debug'])?1:0;
        
        // connect db
        $dbh            = db_connect();
        
        # recieve ger param   
        $action         = @$_GET['action'];
        
        # set data path
        $PV['path']     = "../data/$action.php";
        
        # check file existence
        if(file_exists($PV['path'])){
                
                $PV['db_table_data'] = [];
        
                
                # include data
                include($PV['path']);
                
                
                $PV['db_table_data'] = fetch_assoc_array([
                                                  'dbh'   => $dbh,
                                                  'table' => 'student_info',
                                                  'fields'=> ['full_name as name','roll_no',"date_format(date_of_birth,'%d-%b-%Y') as dob"]
                                        ]);
        
                if($PV['debug']){ var_dump($PV['db_table_data']); }
                
                // close db
                mysqli_close($dbh);
        
                // db to array
                $DESK_DATA['data'] = $PV['db_table_data'];
        
                // table fetch
                $PV['content']     = table_builder_v2($DESK_DATA);
        }
        
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <div style="width:100%;text-align:right">
                        <a href="?action=student_db">Student</a>&nbsp;&nbsp;|&nbsp;&nbsp;                        
                </div>
                <h2>DB to Array of Array</h2>
                <?PHP echo $PV['content']; ?>              
        </body>
</html>
