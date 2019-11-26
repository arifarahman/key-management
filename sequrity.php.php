
 <html lang="en">
<head>
<style>
body {
    font-family: Verdana,sans-serif;
    font-size: 0.9em;
}

div#header, div#footer {
    padding: 20px;
    color: Purple;
    text-align:center;
    background-color: LightBlue;
}

li {
     background-color:purple;
     float: left;
	
}

li a, .dropbtn {
    display: inline-block;
    color: White;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 10px;
    overflow: hidden;
    background-color:  black;
}


div.article {
    margin: 5px;
    padding: 10px;
    text-align:center;
    background-color: white;
}

</style>
</head>
<body>
<div class="flex-container">
<div id="header">
<h1>Loan Management System</h1>
</div>

<ul>
  <li><a  href="mainpage.html">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Insert Data</a>
    <div class="dropdown-content">
      <a href="insert_account.html">Account Information</a>
      <a href="insert_customer.html">Customer Information</a>
      <a href="insert_loan.html">Loan Info</a>                                                                                                                                                                                                          
    </div>
  </li>
  
  <li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="view_account.php">Account Information Data</a>
      <a href="view_customer.php">Customer Information</a>
      <a href="view_loan.php">Loan Information Data</a>
    </div>
  </li>
   <li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">Search</a>
    <div class="dropdown-content">
      <a href="search_account.php">Account Information Search</a>
      <a href="search_customer.php">Customer Information Search</a>
      <a href="search_loan.php">Loan Information Search</a>
    </div>
  </li>
   <li><a  href="#about">Report</a></li>
</ul>
<article class="article">
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loan_management_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM customer_information";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
	echo "<tr><th>Customer Id</th><th>Name</th><th>Address</th><th>Email</th><th>Contact</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>". $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["email"]."</td><td>".$row["mobile_no"]."</td>";
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>


</article>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<p>&copy; Created By Janifar</p>
</div>

</body>
</html>
 