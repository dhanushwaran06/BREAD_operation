<?PHP
        // load lib
        include("../lib/general.php"); // ../ -> for out ward path
        
        // variable
        $PV = ['content'  => '',
               'data'     =>[],
               'data_keys'=>[],
               'title'    =>''];
        
        $PARAM = [];
        
        // store get values
        $PARAM = $_GET;
        
         print_r($_GET); // access get values
        
        // data decision
        if(@$PARAM['action']=='student'){
                
                $PV['title']     = 'Student Info';
                $PV['data_keys'] =  array('name'=>'Name','roll_no'=>'Roll No.','dob'=>'DOB');                
                $PV['data']      =  array(['name'=>'Arun', 'roll_no'=>'19MCA18','dob'=>'20-Jan-1998'],
                                              ['name'=>'Anand','roll_no'=>'19MCA19','dob'=>'22-Jun-1998'],
                                              ['name'=>'Bala', 'roll_no'=>'19MCA20','dob'=>'10-Feb-1999']
                                        );
                
        }else if(@$PARAM['action']=='staff'){
                
                $PV['title']     = 'Staff Info';
                
                // staff info        
                $PV['data_keys']  = array('name'=>'Name','emp_no'=>'Employee No.','edu'=>'Education');
                
                $PV['data']       = array( ['name'=>'Amar',   'emp_no'=>'EMP0045', 'edu'=>'MCA, M.Phil'],
                                           ['name'=>'Akbar',  'emp_no'=>'EMP0051', 'edu'=>'MCA'],
                                           ['name'=>'Antony', 'emp_no'=>'EMP0065', 'edu'=>'MCA, M.Phil'] );
        } // end
        
        
        if($PV['data']){        
                // build student info
                $PV['content']    = table_builder($PV['data'],$PV['data_keys']);                      
        }
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <div style="width:100%;text-align:left">
                        <a href="?action=student">Student</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="?action=staff">Staff</a>
                        <hr>
                </div>
                <h2><?PHP  $PV['title']; ?></h2>                                
                <?PHP echo $PV['content']; ?>                
        </body>
</html>
