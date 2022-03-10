<?php
    $project_name = 'PrintGaraun';
    function getStorageFile($file_name){
        $file = 'storage/app/.'.$file_name;
        if(file_exists($file)){
            return file_get_contents($file);
        }
        return false;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="PrintGaraun">
    <meta name="descripton" content="A project of PrintGaraun">
    <title>Version | <?php echo $project_name ?></title>
</head>

<body>
    <h1>Your current version of <?php  echo $project_name . ' is '. getStorageFile('version') ?></h1>
</body>

</html>

<?php

if(isset($_GET['phpinfo'])){
    phpinfo();
}

