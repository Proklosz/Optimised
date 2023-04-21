<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="stylesheet" href="ss1.css">

</head>
<body onLoad=loadImages()>



<div class="eee">
    <h1>scrollpos:
        <b><span id="position"></span>
        </b>
    </h1>
    <h1>calculated:
        <b><span id="int"></span></b>
    </h1>
</div>
<div class="eee2">
    <h1>i:
        <b><span id="intlength"></span>
        </b>
    </h1>

</div>
<div class="Backgroundvideo">
    <img src="./torknot/0000.webp" id="IMG" align="center">
</div>

<div class="referencilya">
    <h1>
        +   +   +   +   +
    </h1>
</div>
</body>

<?php

$images=array();


for ($x = 0; $x <= 100; $x++) {
    $a=strlen($x);
    if($a==0){
        $images[$x]="<img src='./torknot/0000.webp'><br>";
    }elseif ($a==1){
        $images[$x]="<img src='./torknot/000{$x}.webp'><br>";
    }elseif ($a==2){
        $images[$x]="<img src='./torknot/00{$x}.webp'><br>";
    }else{
        $images[$x]="<img src='./torknot/0{$x}.webp'><br>";
    }

}
?>

<script>

    var position = document.getElementById('position');
    position.innerHTML = "";
    var int = document.getElementById('int');
    int.innerHTML = "";

    const framenumber = 101;
    const scale = 10;
    var images = [];
    var i ;







    window.addEventListener("scroll", function(event) {

        var scroll_y = this.scrollY;
        var scroll_x = this.scrollX;
        console.log(scroll_x, scroll_y);
        position.innerHTML = scroll_y;
        if(scroll_y==0){
            int.innerHTML = 0;
        }else{
            int.innerHTML = Math.ceil(scroll_y/scale)-1;
        }
        if(int.innerHTML > framenumber){
            //int.innerHTML = int.innerHTML - (Math.ceil(int.innerHTML/framenum)-1)*framenum;
            int.innerHTML = framenumber;
            intlength.innerHTML = int.innerHTML.length;
        }else{
            intlength.innerHTML = int.innerHTML.length;
        }




        if(int.innerHTML.length<2){
            int.innerHTML="0"+int.innerHTML;
        }
        if (intlength.innerHTML >2){
            document.getElementById("IMG").src="./torknot/0"+ int.innerHTML +".webp";
        }else{
            document.getElementById("IMG").src="./torknot/00"+ int.innerHTML +".webp";
        }


    });



</script>
</html>