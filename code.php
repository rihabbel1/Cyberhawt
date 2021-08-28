<?php
function multiple(){
	 
	
 for($i=0; $i<=100; $i++){
		  
     if( $i%3==0 && $i%5==0 ){
	        
	     echo' <div class="alert ">
	           <span class="fas fa-exclamation-circle"></span>
               <span class="msg" id="msg">Coating Damage and Lightning Strike</span>
               </div><br>';
  // echo "Coating Damage and Lightning Strike \r\n--";
			   
		     
			   
       }
	   
	  
	   
       else if($i%3 == 0){
		   
		   echo'<div class="alert">
		        <span class="fas fa-exclamation-circle"></span>
                <span class="msg" id="msg">Coating Damage </span>
				</div><br>';
		    // echo "Coating Damage--";
	       
       }
	   
	   

       else if($i%5 == 0){
		   
		  echo '<div class="alert">
		        <span class="fas fa-exclamation-circle"></span>
                <span class="msg" id="msg">Lightning Strike </span>
                </div><br>';
	          // echo "Lightning Strike<br>";
       }
	 
	   
		 }
  
  } 
if(isset($_POST["output"])){
echo multiple();
}



?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script src="https://kit.fontawesome.com/3541eaf28c.js" crossorigin="anonymous"></script>

<style type="text/css">
body{
	background-color:#fff;
}
.alert{
	background:#ffdb9b;
	padding:20px 40px;
	min-width:420px;
	
	

	
	border-radius:4px;
	border-left:8px solid #ffa502;
	
}

.alert .fa-exclamation-circle{
	position:absolute;
	left:20px;
	top:50%;
	transform:translateY(-50%);
	color:#ce8500;
	font-size:30px;
	
}
.alert .msg{
	padding: 0 20px;
	font-size:18px;
	color:#ce8500;
}
</style>
</body>
</html>
