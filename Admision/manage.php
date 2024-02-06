<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");
    fwrite($file,"NEW ONLINE ADDMISSION FORM  :\n");
    fwrite($file,"STUDENT NAME :");
    fwrite($file, $fullname ."\n");
    fwrite($file,"FATHER NAME :");
    fwrite($file, $father ."\n");
    fwrite($file,"MOTHER NAME :");
    fwrite($file, $mother ."\n");
    fwrite($file,"GUARDIAN NAME :");
    fwrite($file, $guardian ."\n");
    fwrite($file,"Father Contact :");
    fwrite($file, $fcontact ."\n");
    fwrite($file,"Mother Contact :");
    fwrite($file, $mcontact ."\n");
    fwrite($file,"Guardian Contact :");
    fwrite($file, $gcontact ."\n");
    fwrite($file,"GENDER :");
    fwrite($file, $gender ."\n");
    fwrite($file,"DATE OF BIRTH :");
    fwrite($file, $DOB ."\n");
    fwrite($file,"EMAIL :");
    fwrite($file, $email ."\n");
    fwrite($file,"GRADE :");
    fwrite($file, $highschool ."\n");
    fwrite($file,"Department :");
    fwrite($file, $department."\n");
    fwrite($file,"Country :");
    fwrite($file, $country ."\n");
    fwrite($file,"provience :");
    fwrite($file, $provience ."\n");
    fwrite($file,"Muncipality :");
    fwrite($file, $Muncipality ."\n");
    fwrite($file,"Ward No :");
    fwrite($file, $Ward ."\n");
    fwrite($file,"Street/ tole :");
    fwrite($file, $Street ."\n");
    fwrite($file,"Finding :");
    fwrite($file, $know."\n");
    fwrite($file,"Decide :");
    fwrite($file, $decide."\n");
    fwrite($file,"Expectations :");
    fwrite($file, $expectations."\n");
    fwrite($file,"childcare :");
    fwrite($file, $childcare."\n");
    fwrite($file,"Special care :");
    fwrite($file, $care."\n");
    
    




    fclose($file);
    
    header("location: success.html");
?>