<?PHP

        // includes
        include('../lib/template.php');
        
        // var
        $greet_info  = array(['greet'=>'வணக்கம்','person_name'=>'Amar'],
                             ['greet'=>'नमस्कार',    'person_name'=>'Akbar'],
                             ['greet'=>'Hello',   'person_name'=>'Antony']);                                                         
        
        // Load Template
        $T =new Template("../template/hello_array_of_array.html");
        
        // Params
        $T->AddParam('page_title','Adaptive Web Development');
        $T->AddParam('greet_info',$greet_info);
                
        // producing the content
        $T->EchoOutput();        
        
?>        

