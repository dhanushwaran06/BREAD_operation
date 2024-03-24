<?PHP

        // includes
        include('../lib/template.php');
        
        // var
        $content  =  array('greet_info'=>array(['greet'=>'नमस्कार ','person_name'=>'Amar'],
                                               ['greet'=>'ہیلو',    'person_name'=>'Akbar'],
                                               ['greet'=>'Hello',   'person_name'=>'Antony']),
                           
                           'page_title'=>'Template Bulk'      
                           
                        );
        
        
        
        // Load Template
        $T =new Template("../template/hello_array_of_array.html");
        
        // Params
        $T->AddParam($content);
                
        // producing the content
        $T->EchoOutput();        
        
?>        

