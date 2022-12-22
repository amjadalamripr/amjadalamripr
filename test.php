<html>
<head>
    <style>
        .a{
            border-color: white;
            width:8%;
            background-color:grey;
            border: solid white 4px;
            justify-content: space-around;
         
        }
        .b{
            justify-content: space-around;
            border: solid white 4px;
            width:18%;
            background-color:#5A5A5A;
        } 
      
       .container{
          display:flex;
          height:20%; 
        }
        h2{
        background-color:black;
        position: fixed;
        bottom: 0;
        right: 0;
        color:white;
        display: inline;
       
        }
    </style>
</head>
<body>
<?php
$n=9;
for($i=0;$i<$n;$i++){
    echo("<div class='container'>");
for($j=0;$j<$n;$j++){
    if($i%2==0){
    if($j%2==0 ){
   echo("<div   class='a'> </div>");
    }
    else{
        echo("<div  class='b'> </div>");
    }
}
else{
    if($j%2==0 ){
        echo("<div class='b'> </div>");
    }
    else{
        echo("<div class='a'> </div>");
    } 
}

}
echo("</div>");
}
?>
<h2>TRAMEEZ CHANNEL</h2>
</body>
</html>
