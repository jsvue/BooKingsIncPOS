<?php
//uncomment for debugging
//print_r($_POST);
 
//most sites have magic quotes on
//but if they do not, this code simulates magic quotes
if( !get_magic_quotes_gpc() )
{
    if( is_array($_POST) )
        $_POST = array_map('addslashes', $_POST);
}
 

//make sure there is data in the name and email fields
if( empty($_POST["Name"]) )
{
    $error["name"] = "Name is required.";
    $Name = "";
}
else
    $Name = $_POST["Name"];
 
if( empty($_POST["Email"]) )
{
    $error["email"] = "Email is required.";
    $Email = "";
}
else
    $Email = $_POST["Email"];
 
if( empty($_POST["OtherInfo"]) )
{
    $OtherInfo = "";
}
else
    $OtherInfo = $_POST["OtherInfo"];
 
  
//check to make sure the qty fields are whole numbers
//but only check if there was data entered
if( !empty($_POST["qtyA"]) )
{
    if( is_numeric($_POST["qtyA"]) && ( intval($_POST["qtyA"]) == floatval($_POST["qtyA"]) ) )
    {
        //we have a whole number
    }
    else
        $error["qtyA"] = "Please enter a whole number for Class A Widgets.";
}
 
if( !empty($_POST["qtyB"]) )
{
    if( is_numeric($_POST["qtyB"]) && ( intval($_POST["qtyB"]) == floatval($_POST["qtyB"]) ) )
    {
        //we have a whole number
    }
    else
        $error["qtyB"] = "Please enter a whole number for Class B Widgets.";
}
 
if( !empty($_POST["qtyC"]) )
{
    if( is_numeric($_POST["qtyC"]) && ( intval($_POST["qtyC"]) == floatval($_POST["qtyC"]) ) )
    {
        //we have a whole number
    }
    else
        $error["qtyC"] = "Please enter a whole number for Class C Widgets.";
}
 

//we should have at least 1 item ordered in the form
if( empty($_POST["qtyA"]) && empty($_POST["qtyB"]) && empty($_POST["qtyC"]) )
    $error["no_qty"] = "Please enter at least 1 item to order.";
 

if( is_array($error) )
{
 
    echo "An error occurred while processing your order.";
    echo "<br>\n";
    echo "Please check the following error messages carefully, then click back in your browser.";
    echo "<br>\n";
 
    while(list($key, $val) = each($error))
    {
        echo $val;
        echo "<br>\n";
    }
 
    //stop everything as we have errors and should not continue
    exit();
 
}
 
  
//we do not need the rest of the form fields as we can just calculate them from the whole numbers
if( !empty($_POST["qtyA"]) )
{
    $qtyA = $_POST["qtyA"];
    $totalA = $qtyA * 1.25;
}
else
{
    $qtyA = 0;
    $totalA = 0;
}
 
if( !empty($_POST["qtyB"]) )
{
    $qtyB = $_POST["qtyB"];
    $totalB = $qtyB * 2.35;
}
else
{
    $qtyB = 0;
    $totalB = 0;
}
 
if( !empty($_POST["qtyC"]) )
{
    $qtyC = $_POST["qtyC"];
    $totalC = $qtyC * 3.45;
}
else
{
    $qtyC = 0;
    $totalC = 0;
}
 
$GrandTotal = $totalA + $totalB + $totalC;
 
  
//we have our data, and now build up an email message to send
$mailto = "emailaddr@nowhere.not";
$subject = "Web Order";
 
$body  = "The following confirms the details of your order:\n";
$body .= "\n\n";
$body .= "Name: " . $Name . "\n";
$body .= "Email: " . $Email . "\n";
$body .= "Other Contact Info: " . $OtherInfo . "\n";
$body .= "\n\n";
$body .= "Class A Widgets: (" . $qtyA . " * 1.25) = " . $totalA . "\n";
$body .= "Class B Widgets: (" . $qtyB . " * 2.35) = " . $totalB . "\n";
$body .= "Class C Widgets: (" . $qtyC . " * 3.45) = " . $totalC . "\n";
$body .= "\n";
$body .= "TOTALS: " . $GrandTotal . "\n";
 
mail($mailto, $subject, $body);
mail($Email, $subject, $body);
 
//we should state the order was sent
echo "The following information was sent.";
echo "<br>\n";
echo "<pre>\n";
echo $body;
echo "</pre>\n";
 

//we can store the order in a database as well
 
$link = @mysql_connect('local', 'root', '');
if (!$link)
{
   echo "Could not connect: " . mysql_error();
}
else
{
    mysql_select_db('Newestcart');
 
    $query  = "INSERT INTO order_queue
             (  Name ,   Email ,   OtherInfo ,   qtyA ,
                totalA ,   qtyB ,   totalB ,   qtyC ,   totalC ,   GrandTotal )";
    $query .= " VALUES
             ('$Name', '$Email', '$OtherInfo', '$qtyA',
              '$totalA', '$qtyB', '$totalB', '$qtyC', '$totalC', '$GrandTotal')";
    //echo $query . "<br>\n";
 
    $result = mysql_query($query);
    mysql_free_result($result);
    mysql_close($link);
?>