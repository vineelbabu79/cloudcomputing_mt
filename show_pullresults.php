<?php  
       
include "dbconnect.php";

if(isset($_POST['hshd10'])){
    $res1 = mysqli_query($conn, "SELECT h.HSHD_NUM, t.BASKET_NUM, t.PURCHASE_, t.PRODUCT_NUM, p.DEPARTMENT, p.COMMODITY, t.SPEND, t.UNITS, t.STORE_R, t.WEEK_NUM, t.YEAR, 
h.LOYALTY_FLAG, h.AGE_RANGE, h.MARITAL_STATUS, h.INCOME_RANGE, h.HOMEOWNER_DESC, h.HSHD_COMPOSITION, h.HSHD_SIZE, h.CHILDREN FROM households AS h JOIN transactions AS t on h.HSHD_NUM = t.HSHD_NUM JOIN products AS p ON t.PRODUCT_NUM = p.PRODUCT_NUM WHERE h.HSHD_NUM = 10");
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <table border="1" cellspacing="1" cellpadding="1">
            <tr class="header">
                <td>Household num</td>
                <td>Basket num</td>
                <td>Purchase date</td>
                <td>Product num</td>  
                <td>Department</td>   
                <td>Commodity</td>    
                <td>Spend</td>        
                <td>Units</td>        
                <td>Store Region</td> 
                <td>Week num</td>      
                <td>Year</td>
                <td>Loyalty flag</td>  
                <td>Age range</td>     
                <td>Marital status</td>
                <td>Income range</td>  
                <td>Home owner</td>    
                <td>Household comp</td>
                <td>Household size</td>
                <td>Children</td>
            </tr>
            <?php
                 while($row = $res1 -> fetch_assoc()){
                  echo "<tr> <td>" . $row["HSHD_NUM"] . "</td> <td>" . $row["BASKET_NUM"] . "</td> <td>"
                  . $row["PURCHASE_"] . "</td> <td>" . $row["PRODUCT_NUM"] . "</td> <td>" . $row["DEPARTMENT"] .
                  "</td> <td>" . $row["COMMODITY"] . "</td> <td>" . $row["SPEND"] . "</td> <td>" .
                  $row["UNITS"] . "</td> <td>" . $row["STORE_R"] . "</td> <td>" . $row["WEEK_NUM"]
                  . "</td> <td>" . $row["YEAR"] . "</td> <td>" . $row["LOYALTY_FLAG"] . "</td> <td>" .
                  $row["AGE_RANGE"] . "</td> <td>" . $row["MARITAL_STATUS"] . "</td> <td>" . $row["INCOME_RANGE"] .
                  "</td> <td>" . $row["HOMEOWNER_DESC"] . "</td> <td>" . $row["HSHD_COMPOSITION"] . "</td> <td>" .
                  $row["HSHD_SIZE"] . "</td> <td>" . $row["CHILDREN"] . "</td> </tr>";
                 }
            ?>
        </table>
        </div>
    </body>
</html>

<?php
}

if(isset($_POST['hshd_button'])){
        $hshd = $_POST['hshd_random'];

        $res2 = mysqli_query($conn, "SELECT h.HSHD_NUM, t.BASKET_NUM, t.PURCHASE_, t.PRODUCT_NUM, p.DEPARTMENT, p.COMMODITY, t.SPEND, t.UNITS, t.STORE_R, t.WEEK_NUM, t.YEAR, h.LOYALTY_FLAG, h.AGE_RANGE, h.MARITAL_STATUS, h.INCOME_RANGE, h.HOMEOWNER_DESC, h.HSHD_COMPOSITION, h.HSHD_SIZE, h.CHILDREN FROM households AS h JOIN transactions AS t on h.HSHD_NUM = t.HSHD_NUM JOIN products AS p ON t.PRODUCT_NUM = p.PRODUCT_NUM WHERE h.HSHD_NUM = $hshd");
?><html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <table border="1" cellspacing="1" cellpadding="1">
            <tr class="header">
                <td>Household num</td>
                <td>Basket num</td>
                <td>Purchase date</td>
                <td>Product num</td>
                <td>Department</td>
                <td>Commodity</td>
                <td>Spend</td>
                <td>Units</td>
                <td>Store Region</td>
                <td>Week num</td>
                <td>Year</td>
                <td>Loyalty flag</td>
                <td>Age range</td>
                <td>Marital status</td>
                <td>Income range</td>
                <td>Home owner</td>
                <td>Household comp</td>
                <td>Household size</td>
                <td>Children</td>
            </tr>
            <?php
                while($row = $res2 -> fetch_assoc()){
                    echo "<tr> <td>" . $row["HSHD_NUM"] . "</td> <td>" . $row["BASKET_NUM"] . "</td> <td>"
                    . $row["PURCHASE_"] . "</td> <td>" . $row["PRODUCT_NUM"] . "</td> <td>" . $row["DEPARTMENT"] .
                    "</td> <td>" . $row["COMMODITY"] . "</td> <td>" . $row["SPEND"] . "</td> <td>" .
                    $row["UNITS"] . "</td> <td>" . $row["STORE_R"] . "</td> <td>" . $row["WEEK_NUM"]
                    . "</td> <td>" . $row["YEAR"] . "</td> <td>" . $row["LOYALTY_FLAG"] . "</td> <td>" .
                    $row["AGE_RANGE"] . "</td> <td>" . $row["MARITAL_STATUS"] . "</td> <td>" . $row["INCOME_RANGE"] .
                    "</td> <td>" . $row["HOMEOWNER_DESC"] . "</td> <td>" . $row["HSHD_COMPOSITION"] . "</td> <td>" .
                    $row["HSHD_SIZE"] . "</td> <td>" . $row["CHILDREN"] . "</td> </tr>";
                }
            ?>
        </table>
        </div>
    </body>
</html>

<?php
mysqli_close($conn);
}
?>