
<!DOCTYPE HTML>
<html>
<head>
<title>Valley View Furniture</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="header">
		 <div class="header_top">
		 	 <div class="wrap">
		 			<div class="social-icons">					
		                <ul>
		                  
		                   
		                    <div class="clear"></div>
		                </ul>
		 		    </div>
					<div class="menu">
					    <ul>
							 <li ><a href="index.html">Home</a></li>
              <li class="active"><a href="customerselect.php">Customer Details</a></li>
              <li><a href="productselect.php">Product Details</a></li>
              <li><a href="invoiceselect.php">Invoice</a></li>
              <li><a href="billselect.php">Bill of Materials</a></li>
              <li><a href="routingselect.php">Routing</a></li>
							<div class="clear"></div>
						</ul>
					</div>
	    		 <div class="clear"></div>
	    	 </div>
	    </div>
	    		<div class="logo">
							<a href="index.html"><h1><span>V</span>alleyView <span>F</span>urniture</h1></a>
			</div>	
  </div>		
   <div class="wrap">
   	 <div class="main">
	    <div class="content">
	    	<h2>Customer Details</h2>
	    	<div class="section group">
				<div class="cont span_3_of_3">
				       
				      <table  class="table table-striped table-bordered">
		             
		              <tbody>
		              <?php 
					  $server = "bamsql2";
$options = array(  "UID" => "genes",  "PWD" => "Genes12",  "Database" => "genes");
$conn = sqlsrv_connect($server, $options);
if ($conn === false) 
die("<pre>".print_r(sqlsrv_errors(), true));

$custname=$_POST['textbox'];

$sql = "exec CustomerDetails '$custname'";
$query = sqlsrv_query($conn, $sql);
if ($query === false)
{  
	exit("<pre>".print_r(sqlsrv_errors(), true));
}
#while ($row = sqlsrv_fetch_array($query))
#	{  echo "<p>Hello, $row[ascore]!</p>";
#}

function disconnect(){

sqlsrv_free_stmt($query);

sqlsrv_close($conn);

}
while($row = sqlsrv_fetch_array($query))
{
	echo" <tr><th>Customer ID</th>";
	echo"<td>$row[0]</td></tr>";
	echo" <tr><th>Customer Name</th>";
	echo"<td>$row[1]</td></tr>";                
	echo"<tr><th>Customer Address</th>";	                  
	echo"<td>$row[2]</td></tr>";                          
	echo"<tr><th>Customer City</th>";
	echo"<td>$row[3]</td></tr>";
	echo" <tr><th>Customer State</th>";
	echo"<td>$row[4]</td></tr>";
    echo" <tr><th>Customer Zip</th>";
    echo"<td>$row[5]</td></tr>";
       echo"<tr><th>YTD-Purchases</th>";

    echo"<td>$row[6]</td></tr>";
 	echo" <tr><th>Credit Limit</th>";
      echo"<td>$row[7]</td></tr>";
		   echo"<tr><th>Outstanding Balance</th>";
		echo"<td>$row[8]</td>";
		                 echo"<tr><th>Discount</th>";
		                   echo"<td>$row[9]</td></tr>";
		                  
}
	 				   
					  ?>
				      </tbody>
	            </table>
				   	
	       			 
				</div>
				
     </div>	
   <div class="footer">
   	 <div class="wrap">
   	 <div class="footer_grides">
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest Tweets</h3>
						<div class="post">
				    		<p><span><a href="#">Tuesday,June 31th,2013</a></span></p>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Ut enim ad minim veniam sed do <span><a href="#">[...]</a></span></p>
				       </div>
				       <div class="post">
				    		<p><span><a href="#">Tuesday,June 31th,2013</a></span></p>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Ut enim ad minim veniam sed do<span><a href="#">[...]</a></span></p>
				       </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Connect With Us</h3>
					<div class="social_icons">
                	<ul>
                    	<li><a href="#" class="facebook">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Facebook</strong> <br>+ 12, 297</span>
                        </a></li>
                        <li><a href="#" class="twitter">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Twitter</strong> <br>+ 5, 287</span>
                        </a></li>
                         <li><a href="#" class="rss">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Rss</strong> <br>+ 77, 287</span>
                        </a></li>
                    </ul>
                </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Navigate</h3>
					          <ul>
						           <li><a href="index.html">Home</a></li>
						     		<li><a href="about.html">About</a></li>
						     		<li><a href="gallery.html">Gallery</a></li>
						     		<li><a href="services.html">Blog</a></li>	
						     		<li><a href="services.html">Services</a></li>						     		
						     		<li><a href="contact.html">Contact</a></li>
						   	   </ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Location</h3>
					      <ul>
						  	  <li>Neque porro quisquam,</li>
						  	  <li>dolor sit amet,</li>
						  	   <li>USA.</li>
						  	 <li><span>E-mail :</span> www.yourcompany@gmail.com</li>
						  	 <li><span>Telephone :</span> +00 000 00000</li>
						  	 <li><span>Fax :</span> +00 000 00000</li>
						  </ul>
				</div>
			</div>
	    </div>
  </div>
		 <div class="copy_right">
		 	 <div class="wrap">
				<p>Compant Name © All Rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a></p>
			 </div>
		</div>	
  </div>  
</body>
</html>

