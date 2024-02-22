
<?php
$ruc= $_POST["ruc"];

if(strlen($ruc)<11 || strlen($ruc)>11)
{
    $consultaruc=1;
}
else{

    $consultaruc=file_get_contents('https://api.apis.net.pe/v1/ruc?numero=' .$ruc. '');

}

echo $consultaruc;
?>