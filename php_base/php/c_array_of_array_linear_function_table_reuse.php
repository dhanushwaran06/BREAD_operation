<?PHP
        
        include("../lib/general.php");
        
        $student_data_key_labels = array('name'=>'Name','roll_no'=>'Roll No.','dob'=>'DOB');
        
        $student_info            = array(['name'=>'Arun', 'roll_no'=>'19MCA18','dob'=>'20-Jan-1998'],
                                         ['name'=>'Anand','roll_no'=>'19MCA19','dob'=>'22-Jun-1998'],
                                        ['name'=>'Bala', 'roll_no'=>'19MCA20','dob'=>'10-Feb-1999']
                                   );
        
        // staff info        
        $staff_data_key_labels  = array('name'=>'Name','emp_no'=>'Employee No.','edu'=>'Education');
        
        $staff_info             = array( ['name'=>'Amar',   'emp_no'=>'EMP0045', 'edu'=>'MCA, M.Phil'],
                                        ['name'=>'Akbar',  'emp_no'=>'EMP0051', 'edu'=>'MCA'],
                                        ['name'=>'Antony', 'emp_no'=>'EMP0065', 'edu'=>'MCA, M.Phil']
                                );
        
        
        // build student info
        $student_content         = table_builder($student_info,$student_data_key_labels);
        
        //build staff content
        $staff_content           = table_builder($staff_info,$staff_data_key_labels);
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h2>Student Info</h2>                                
                <?PHP echo $student_content; ?>
                <br>
                <h2>Staff Info</h2>                                
                <?PHP echo $staff_content; ?>   
        </body>
</html>
