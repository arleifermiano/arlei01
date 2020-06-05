
<!DOCTYPE html>

			<html lang="pt-br">
		
  </div>

<?php  require_once('css.php'); 

mysql_set_charset('utf-8');
?>
<?php  require_once('header.php'); ?>
<head>
<style>
.esqf{
	 margin: 0 auto;
  max-width: 400px;
  height: 170px;
  background-color: #ddd;
  border-radius: 3px;

	
	}

	body {
		font-family: 'Arial';
		
	}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #FF0000; <!--	COR -->
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #87CEFF; <!-- COR sombra -->
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #FFFAFA;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
  h1 { font-size: 16px; }
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}

#a {
	
	background: #FFD700;  <!-- cor fundo forme-->
	padding: 10px;
	margin: 10px 30px;
	width:290px;
	top:320px;
	left:0px;<!-- para o lado -->
	color: #FFD700; <!-- cor -->
	
}
#h {
	color:#0000FF;
}
#p {
	P: 0; margin-top: 0.83em
p.stb {  }
p.mtb { text-indent: 0; margin-top: 2.17em }
p.ltb { text-indent: 0; margin-top: 3.08em }
}
</style>

</head>
<body background="images/FOTOTAE.jpg"  	 style=  "  height:10%
  width: 10%;	margin: 8px 10px;"/>
		

			
<nav>
	<ul id="menu">
		
		
		<li id="men"><a ID="as" href="view/VER2.php" >CHAMADA</a></li> 
		
		
	<ul>
	
  
    </div>



	</ul>
	</nav>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }

	  }
  }
}
</script>
</body>
</html>
