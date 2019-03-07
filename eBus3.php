    <!DOCTYPE html>
    <html>
          <head>
         <title>e-Business 3</title>
     </head>
        <body bgcolor="#f2d2f2">   
        <!--same variable from last page-->
   
    <?php
 
     session_start () ;
     @$totalValue2 = $_POST ['txtTotal'];
    @$fullNameValue= $_POST ['txtName'];
    echo "The name is : ".$fullNameValue.".";
    echo "<br></br>";
    echo "The total value is : ".$totalValue2.">";
    ?>
        <br></br>
        <br></br>
         <footer>
          <a href="Index.html">Index Page</a>
      </footer>
     </body>
     
    </html>