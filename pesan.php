<!-- //RENDY Septian Pradana
//MI1D -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
 
        <style type="text/css" >
       * {        
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
body {
  background:  #9C2305 ;
}

#card-front {
  color: #FFDFDF;
}
.wrap {
    padding: 1.5em 2.5em;
    height: 100%;
}
#card-inside .wrap {
    background: #FFEFEF;
    -webkit-box-shadow: inset 2px 0 1px rgba(0, 0, 0, .05);
    -moz-box-shadow: inset 2px 0 1px rgba(0, 0, 0, .05);
    box-shadow: inset 2px 0 1px rgba(0, 0, 0, .05);
}
#card {
    max-width: 960px;
    margin: 0 auto;
    transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
    perspective: 5000px;
    -moz-perspective: 5000px;
    -webkit-perspective: 5000px;
    position: relative;
}


#card-inside {
    font-size: 1.1em;
    line-height: 1.4;
    font-family: 'Nobile';
    color: #331717;
    font-style: italic;
}


#card-front {
    background-color: #FF5555;
    background-image: linear-gradient(top, #FF5555 0%, #FF7777 100%);
    background-image: -moz-linear-gradient(top, #FF5555 0%, #FF7777 100%);
    background-image: -webkit-linear-gradient(top, #FF5555 0%, #FF7777 100%);
            transform-origin: left;
       -moz-transform-origin: left;
    -webkit-transform-origin: left;
            transition:         transform 1s linear;
       -moz-transition:    -moz-transform 1s linear;
    -webkit-transition: -webkit-transform 1s linear;
    position: relative;
}

 button{
    font-family: sans-serif;
    font-size: 15px;
    background: #22a4cf;
    color: white;
    border: white 3px solid;
    border-radius: 5px;
    padding: 12px 20px;
    margin-top: 10px;
}

button:hover{
    opacity:0.9;
}

</style>
</head>
<body>
<?php 
if (isset($_POST['id'])) {

    $id=$_POST['id'];
}

if (isset($_POST['nama'])) {

    $nama=$_POST['nama'];

}
if (isset($_POST['status'])) {

    $status=$_POST['status'];
}
if (isset($_POST['menu'])) {

    $menu=$_POST['menu'];
    if ($menu=="toraja") {
        $harga = 58000;
    }
    else if ($menu == "mandeling") {
        $harga =  58000;
    }
    else if ($menu == "bali") {
        $harga  = 59000;
    }
    else if ($menu == "papua") {
        $harga  = 64000;
    }
    else if ($menu == "flores") {
        $harga  = 59000;
    }
    else if ($menu == "java") {
        $harga  = 55000;
    }
     else if ($menu == "none") {
        $harga  = 0;
    }
    }
if (isset($_POST['jumlah'])) {

    $jumlah=$_POST['jumlah'];
    // echo "<br>".$jumlah;
}

if ($status == "member") {

  if($jumlah==1){
  	$disc= 0.05*$harga;
  	$harga=$harga-$disc;

  }
  else if($jumlah==2|| $jumlah==3){
  	$disc=0.07*$harga;
  	$harga=$harga-$disc;

  }
  if($jumlah>3){
  	$disc= 0.1*$harga;
  	$harga=$harga-$disc;

  }

}
if ($status == "nonmember") {
	if ($jumlah>=3 && $jumlah<=5){
		$disc= 0.05*$harga;
    	$harga=$harga-$disc;
	}
	else if($jumlah>5){
		$disc=0.07*$harga;	
		$harga= $harga-$disc;

	}
}
// echo"<br> harga: ".$harga;
$total=$harga*$jumlah;
	
	?>
<br><br>	

<div id="card">
    <div id="card-inside">
      <div class="wrap">  
        <hr size="6px" color="grey">
        <h2>Nota Pemesanan</h2>
        <hr size="6px" color="grey">
        <hr size="3px" color="grey">
        <h3>Id Pembeli&emsp; :&emsp;<?php echo"".$id?></h3>
        <h3>Nama&emsp;&emsp;&emsp; :&emsp;<?php echo"".$nama?></h3>
        <h3>Status&emsp;&emsp;&nbsp;&nbsp;&nbsp; :&emsp;<?php echo"".$status?></h3>
        <h3>Menu&emsp;&emsp;&emsp; :&emsp;<?php echo"".$menu?></h3>
        <h3>Harga&emsp;&emsp;&nbsp;&nbsp; :&emsp;<?php echo"".$harga?></h3>
        <h3>Jumlah&emsp;&emsp;&nbsp; :&emsp;<?php echo"".$jumlah?></h3>
        <h3>Total&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp; :&emsp;<?php echo"".$total?></h3>  
        <hr size="6px" color="grey"> 
        
      </div>
    </div>

   <a href="order.html"><button>Back to menu order</button></a>





 
</body>
</html>