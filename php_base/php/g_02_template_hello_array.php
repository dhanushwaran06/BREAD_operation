<?PHP

        // includes
        include('../lib/template.php');
        
        // var
        $greet_info  = array('greet'      =>'Hello',
                             'person_name'=>'Kumar');
        
        // Load Template
        $T =new Template("../template/hello.html");
        
        // Params
        $T->AddParam('page_title','Adaptive Web Development');
        $T->AddParam($greet_info);
                
        // producing the content
        $T->EchoOutput();        
        
?>        

