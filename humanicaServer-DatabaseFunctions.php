########################### DATABASE OLUŞTURMA ############################################
function createDB($yeniDBAd){
    $GLOBALS['pdo']->prepare("CREATE DATABASE ".$yeniDBAd)->execute();
    return $yeniDBAd;
}

########################### DATABASE EXPORT ############################################
function exportDB($file_name,$pwd='/var/www/humanica/',$anaBase='ng_otmkayteks'){
    exec("(mysqldump -u ng_otmkayteks --password='bycW1y55XREsddzg' ".$anaBase." > ".$pwd.$file_name.".sql) 2>&1",$output,$result);
    return $file_name.".sql";
}


########################### DATABASE EXPORT ############################################
function importDB($newDB,$file_name,$pwd='/var/www/humanica/'){
    exec("(mysql -u ng_otmkayteks --password='bycW1y55XREsddzg' ".$newDB." < ".$pwd.$file_name.".sql) 2>&1",$output1,$result1);
    return $file_name.".sql";
}