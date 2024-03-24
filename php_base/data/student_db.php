<?PHP
        // student_content
        $DESK_DATA = array( 
                                'title'      => 'Student Info',
                           
                                'key_labels' => array('name'=>'Name','roll_no'=>'Roll No.','dob'=>'DOB'),
                                
                                'table'      => 'student_info',
                                
                                'fields'     => ['full_name as name','roll_no','date_of_birth as dob'],
                                                           
                                'template'     => 'student',
                                
                                'table_attr'   => array('width'      =>"80%",
                                                        'cellpadding'=>"5px",
                                                        'cellspacing'=>"1px",
                                                        'border'     => 1,
                                                   )      
                        );
?>