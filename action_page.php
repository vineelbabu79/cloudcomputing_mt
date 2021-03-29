<?php

include "dbconnect.php";

if(isset($_POST['prd_file'])){

        if($_FILES['file']['name']){ 
                $filename = explode(".", $_FILES['file']['name']);
                if($filename[1] == "csv"){
                    
                    $file = $_FILES['file']['tmp_name'];
                    $fileopen = fopen($file, "r"); 
                    $count = 0; 

                    while(($data = fgetcsv($fileopen)) !== false) {

                        $prdnum = mysqli_real_escape_string($conn, $data[0]);   
                        $dept = mysqli_real_escape_string($conn, $data[1]);                                
                        $comm = mysqli_real_escape_string($conn, $data[2]);                                
                        $brand = mysqli_real_escape_string($conn, $data[3]);                                
                        $nof = mysqli_real_escape_string($conn, $data[4]);                                
                        
                        $ins_query = mysqli_query($conn, "INSERT INTO products (product_num, department, commodity, brand_type, natural_organic_flag) VALUES ('$prdnum', '$dept', '$comm', '$brand', '$nof')");                                
                        $count++;                       
                     } 

                     fclose($fileopen);                        
                     print "<html><body><div class='container'><p style='font-family:Calibri; font-size:20px;'>$count records uploaded into Products table.</p></div></body></html>";                
                    }        
                }
            }
if(isset($_POST['hsd_file'])){
    
    if($_FILES['file1']['name']){            
        
        $filename1 = explode(".", $_FILES['file1']['name']);                    
        
        if($filename1[1] == "csv"){
            
            $file1 = $_FILES['file1']['tmp_name'];
            $fileopen1 = fopen($file1, "r");
            $count1 = 0;

            while(($data = fgetcsv($fileopen1))!== false){

               $hsdnum = mysqli_real_escape_string($conn, $data[0]);
               $loyalty = mysqli_real_escape_string($conn, $data[1]);
               $age = mysqli_real_escape_string($conn, $data[2]);
               $marital = mysqli_real_escape_string($conn, $data[3]);
               $income = mysqli_real_escape_string($conn, $data[4]);
               $homeowner = mysqli_real_escape_string($conn, $data[5]);
               $hhcomp = mysqli_real_escape_string($conn, $data[6]);                                
               $hhsize = mysqli_real_escape_string($conn, $data[7]);                                
               $child = mysqli_real_escape_string($conn, $data[8]);                                
               
               $ins_query1 = mysqli_query($conn, "INSERT INTO households (hshd_num, loyalty_flag, age_range, marital_status, income_range, homeowner_desc, hshd_composition, hshd_size, children) VALUES ('$hsdnum', '$loyalty', '$age', '$marital', '$income', '$homeowner', '$hhcomp', '$hhsize', '$child')");                                 
               $count1++;                         
            }

            fclose($fileopen1);                         
            print "<html><body><div class='container'><p style='font-family:Calibri; font-size:20px;'>$count1 records uploaded into Households table.</p></div></body></html>";
        }
    }
}

if(isset($_POST['trn_file'])){

    if($_FILES['file2']['name']){

        $filename2 = explode(".", $_FILES['file2']['name']);
        if($filename2[1] == "csv"){
                $file2 = $_FILES['file2']['tmp_name'];

                $fileopen2 = fopen($file2, "r");
                $count2 = 0;
                while(($data = fgetcsv($fileopen2))!== false){
                        $basknum = mysqli_real_escape_string($conn, $data[0]);
                        $hsdnum = mysqli_real_escape_string($conn, $data[1]);                                  
                        $purchdate = mysqli_real_escape_string($conn, $data[2]);                                  
                        $prdnum = mysqli_real_escape_string($conn, $data[3]);                                  
                        $spend = mysqli_real_escape_string($conn, $data[4]);                                  
                        $units = mysqli_real_escape_string($conn, $data[5]);
                        $storereg = mysqli_real_escape_string($conn, $data[6]);                                  
                        $weeknum = mysqli_real_escape_string($conn, $data[7]);                                  
                        $year = mysqli_real_escape_string($conn, $data[8]);                                  
                        
                        $ins_query2 = mysqli_query($conn, "INSERT INTO transactions (basket_num, hshd_num, purchase_, product_num, spend, units, store_r, week_num, year) VALUES ('$basknum', '$hsdnum', '$purchdate', '$prdnum', '$spend', '$units', '$storereg', '$weeknum', '$year')");                                  
                        
                        $count2++;                        
                    }                        
                    
                    fclose($fileopen2);                        
                    print "<html><body><div class='container'><p style='font-family:Calibri; font-size:20px;'>$count2 records uploaded into Transactions table.</p></div></body></html>";                  
                }          
            }
        }

mysqli_close($conn);

?>

<html>
<head> <link rel="stylesheet" href="style.css"> </head>
<body>
<div class="container">
        <form method="POST" action="action_page.php" enctype="multipart/form-data">
                <label>Upload Products table:</label>
                <input type="file" name="file">
                <button type="submit" name="prd_file">Upload</button> <br>

                <label>Upload Households table:</label>
                <input type="file" name="file1">
                <button type="submit" name="hsd_file">Upload</button> <br>

                <label>Upload Transactions table:</label>
                <input type="file" name="file2">
                <button type="submit" name="trn_file">Upload</button>
        </form>
</div>
</body>
</html>