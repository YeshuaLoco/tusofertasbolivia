<?php

$proUid = $_POST["hideProUidParaPromocion"];
$promoTitulo = $_POST["promoTitulo"];
$promoDescripcion = mysql_real_escape_string($_POST["promoDescripcion"]);
$promoPrecioAntiguo = $_POST["promoPrecioAntiguo"];
$promoPrecioNuevo = $_POST["promoPrecioNuevo"];
$promoValorDescuento = $_POST["promoValorDescuento"];
$promoFecheVencimiento = $_POST["promoFecheVencimiento"];

$var = $promoFecheVencimiento;
$date = str_replace('/', '-', $var);
$promoFecheVencimiento = date('Y-m-d', strtotime($date));


include  'connection/connection.php';


$target_dir = "../uploads/promociones/";
$target_file = $target_dir . basename($_FILES["promoLogo"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file_logo = $target_dir . $proUid . '.' . $imageFileType;
move_uploaded_file($_FILES["promoLogo"]["tmp_name"], $target_file_logo);


$target_file_logo = str_replace('../', '', $target_file_logo);



    $query = "   INSERT INTO proveedores_promociones
(PP_UID, PRO_UID, PP_IMAGEN, PP_TITULO, PP_DESCRIPCION, PP_PRECIO_ANTIGUO, PP_PRECIO_NUEVO, PP_VALOR_DESCUENTO, PP_FECHA_VENCIMIENTO, PP_ESTADO)
VALUES(NULL, $proUid, '$target_file_logo', '$promoTitulo', '$promoDescripcion', '$promoPrecioAntiguo', '$promoPrecioNuevo', '$promoValorDescuento', '$promoFecheVencimiento', 'ACTIVO');
	             ";
$result  = $con->query($query);
header("Location: ../proveedores.php");
?>
