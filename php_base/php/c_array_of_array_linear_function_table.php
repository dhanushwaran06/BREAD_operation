<?PHP
        
        include("../lib/general.php");
        
        $student_data_key_labels = array('name'=>'Name','roll_no'=>'Roll No.','dob'=>'DOB');
        
        $student_info            = array(['name'=>'Arun', 'roll_no'=>'19MCA18','dob'=>'20-Jan-1998'],
                                         ['name'=>'Anand','roll_no'=>'19MCA19','dob'=>'22-Jun-1998'],
                                        ['name'=>'Bala', 'roll_no'=>'19MCA20','dob'=>'10-Feb-1999']
                                   );
        //build content
        $content = table_builder($student_info,$student_data_key_labels);
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h2>Student Info</h2>                                
                <?PHP echo $content; ?>                         
        </body>
</html>