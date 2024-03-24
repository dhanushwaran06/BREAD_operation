<?PHP
        
        include("../lib/general.php");
                
        // student_content
        $param_in = array(      'key_labels' => ['name'=>'Name','roll_no'=>'Roll No.','dob'=>'DOB'],
                                                           
                                'data'       => array(['name'=>'Arun', 'roll_no'=>'19MCA18','dob'=>'20-Jan-1998'],
                                                      ['name'=>'Anand','roll_no'=>'19MCA19','dob'=>'22-Jun-1998'],
                                                      ['name'=>'Bala', 'roll_no'=>'19MCA20','dob'=>'10-Feb-1999']
                                                ),                                                                                                   
                        );
        
        
        // function call
        $student_content           = table_builder_v2($param_in);
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h2>Student Info</h2>                                
                <?PHP echo $student_content; ?>                
        </body>
</html>
