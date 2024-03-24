<?PHP
        # lib
        include("../lib/general.php");
        
        # page variable
        $PV = ['title'=>'No Action','content'=>''];
     
        # recieve ger param   
        $action = @$_GET['action'];
        
        # set data path
        $PV['path'] = "../data/$action.php";
        
        # check file existence
        if(file_exists($PV['path'])){
                
                # include data
                include($PV['path']);
                
                # call table builder
                $PV['content'] = table_builder_v2($DESK_DATA);
                $PV['title']   = $DESK_DATA['title'];
                
        } // end
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <div style="width:100%;text-align:right">
                        <a href="?action=student">Student</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="?action=staff">Staff</a>
                </div>
                <h2><?PHP echo $PV['title'];?></h2>                                
                <?PHP echo $PV['content']; ?>                
        </body>
</html>
