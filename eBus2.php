<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
/*
 * Create a session variable for the mobile number
 */
@$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal']= $totalValue2 ;
/**
 * Allocate the mobile number session variable to a text
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title> e-Business 2 </title>
</head>
<body bgcolor="#f2d2f2">   
    <div class ="form">
        <form name ="Details" method ="post" action= "eBus3.php">
            <center>
                <table cellspacing ="10">
                    <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
       
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" required/> </td>
                    </tr>
       
                     <tr>
                         <td> Phone Number </td>
                         <td><input type="number" id="txtNum" name="txtNum" maxlength="10" value="" required/> </td>
                    </tr>
       
                    <tr>
                         <td> Password:1234 </td>
                         <td><input type="password" id="txtPassword" name="txtPassword" pattern="[1234]{4}" value="" required/> </td>
                    </tr>
       
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /> </td>
                    </tr>
       
                </table>
         </center>
       
       
            <center>  
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue" />
       
            </center>
    </div>
</form>
    </body>
    </html>