<?PHP

        // includes
        include('../lib/template.php');
        
        // var
        $greet       = 'Hello';
        $person_name = 'Kumar';
        
        // Load Template
        $T =new Template("../template/hello.html");
        
        // Params
        $T->AddParam('page_title','Adaptive Web Development');
        $T->AddParam('greet',$greet );
        $T->AddParam('person_name',$person_name);
        
        // producing the content
        $T->EchoOutput();        
        
?>        

