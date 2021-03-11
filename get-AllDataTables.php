$dataBases=array();
foreach ($GLOBALS['pdo']->query('SHOW DATABASES')->fetchAll()  as $item =>$value) {
    array_push($dataBases,$value['Database']);
}
echo "<pre>";
print_r($dataBases);
die();