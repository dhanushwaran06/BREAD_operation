<?PHP

        // includes
        include('../lib/db.php');
        include('../lib/general.php');
        include('../lib/template.php');
        
        // page variables
        $PV = ['debug'=>0];

        $PV['db_table_data'] = [];
        
        $PV['debug']   =  (@$_GET['debug'])?1:0;

        # recieve ger param   
        $action         = @$_GET['action'];

        # set data path
        $PV['path']     = "../data/$action.php";

        if(is_file($PV['path'])){

                // file include                
                include($PV['path']);
        
                // connect db
                $dbh = db_connect();
                
                $PV['db_table_data'] = fetch_assoc_array([
                                                        'dbh'   => $dbh,
                                                        'table' => $DESK_DATA['table'],
                                                        'fields'=> $DESK_DATA['fields']
                                                        
                                                        ]);
                
                if($PV['debug']){ var_dump($PV['db_table_data']); }
                        
                // close db
                mysqli_close($dbh);
                
                
                // Template
                $T =new Template("../template/$DESK_DATA[template].html");
                
                $T->AddParam('title',$DESK_DATA['title']);
                $T->AddParam('student_info',$PV['db_table_data']);
                
                $T->EchoOutput();

        }else{
                $T =new Template("../template/basic.html");
                
                $T->AddParam('TITLE','DB Config Routing');

                $T->AddParam('TABLE_CONTENT','<div style="width:100%;text-align:right">
                                                        <a href="?action=student_db">Student</a>&nbsp;&nbsp;|&nbsp;&nbsp;                        
                                                        </div>');
                $T->EchoOutput();
        }
        
        
?>        

