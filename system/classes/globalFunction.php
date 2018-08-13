<?php
$tipo = $_POST['tipo'];


switch ($tipo) {
	case 'getCategoriasPorProveedor':
		require 'class.functions.php';
		$proUid = $_POST['proUid'];
		$proveedoresClass  = new proveedoresClass();
		$arrayCategorias = array();
		$arrayCategorias = $proveedoresClass->getCategoriasPorProveedor($proUid);
		$respuesta = '';
		for ($i=0; $i < count($arrayCategorias); $i++) { 
			$checked = '';
			if ($arrayCategorias[$i]['PC_ESTADO'] == 'ACTIVO') {
				$checked = 'checked';
			}
			$respuesta .= '<div class="checkbox"><label><input type="checkbox" pcUid="' . $arrayCategorias[$i]['PC_UID'] . '" proUid="' . $arrayCategorias[$i]['PRO_UID'] . '"  value="' . $arrayCategorias[$i]['CAT_UID'] . '" ' . $checked . ' onclick="categoriaProveedorAgregarEliminar(this)">' . utf8_encode($arrayCategorias[$i]['CAT_NOMBRE']) . '</label></div> ';
		}
		
		echo $respuesta;
		break;

	case 'getIconosPorProveedor':
		require 'class.functions.php';
		$proUid = $_POST['proUid'];
		$proveedoresClass  = new proveedoresClass();
		$arrayIconos = array();
		$arrayIconos = $proveedoresClass->getIconosPorProveedor($proUid);
		$respuesta = '';
		for ($i=0; $i < count($arrayIconos); $i++) { 
			$checked = '';
			if ($arrayIconos[$i]['ICO_ESTADO'] == 'ACTIVO') {
				$checked = 'checked';
			}
			$respuesta .= '<div class="checkbox"><label><input type="checkbox" picUid="' . $arrayIconos[$i]['PIC_UID'] . '" proUid="' . $arrayIconos[$i]['PRO_UID'] . '"  value="' . $arrayIconos[$i]['ICO_UID'] . '" ' . $checked . ' onclick="iconoProveedorAgregarEliminar(this)">&nbsp<i class="' . utf8_encode($arrayIconos[$i]['ICO_CLASS']) . '">&nbsp' . str_replace('fa fa-', '', utf8_encode($arrayIconos[$i]['ICO_CLASS'])) . '</i></label></div> ';
		}
		
		echo $respuesta;
		break;

	case 'getPromocionesPorProveedor':
		require 'class.functions.php';
		$proUid = $_POST['proUid'];
		$proveedoresClass  = new proveedoresClass();
		$arrayPromociones = array();
		$arrayPromociones = $proveedoresClass->getPromocionesPorProveedor($proUid);
		$respuesta = '';		
		$respuesta .= ' <div class="card-body">
          <div class="table-responsive">            
            <table class="table table-bordered" id="dataTableProcmociones" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Imágen</th>
                  <th>Título</th>
                  <th>Descripción</th>
                  <th>Precio Antiguo</th>
                  <th>Precio Nuevo</th>
                  <th>Valor Descuento</th>
                  <th>Fecha de Vencimiento</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>';                
             for ($i=0; $i < count($arrayPromociones) ; $i++) {
             $var = $arrayPromociones[$i]['PP_FECHA_VENCIMIENTO'];
			 $date = str_replace('/', '-', $var);
			 $promoFecheVencimiento = date('d-m-Y', strtotime($date));
             $respuesta .= '<tr>
                  <td><img width="50px" height="50px" src="' . $arrayPromociones[$i]['PP_IMAGEN'] .'"></td>
                  <td>' . utf8_encode($arrayPromociones[$i]['PP_TITULO']) .'</td>
                  <td>' . utf8_encode($arrayPromociones[$i]['PP_DESCRIPCION']) .'</td>
                  <td>' . utf8_encode($arrayPromociones[$i]['PP_PRECIO_ANTIGUO']) .'</td>
                  <td>' . utf8_encode($arrayPromociones[$i]['PP_PRECIO_NUEVO']) .'</td>
                  <td>' . utf8_encode($arrayPromociones[$i]['PP_VALOR_DESCUENTO']) .'</td>
                  <td>' . $promoFecheVencimiento .'</td>
                  <td><a href="#" onclick=openModalDeletePromocion(' . $arrayPromociones[$i]['PRO_UID'] .  ',' . $arrayPromociones[$i]['PP_UID'] .  ')>Eliminar</a></td>   
                </tr>';                
              }
              $respuesta .= '  
              </tbody>
            </table>
          </div>
        </div> ';
		
		
		echo $respuesta;
		break;			

    case 'agregarCategoriasPorProveedor':
		require 'class.functions.php';
		$pcUid = $_POST['pcUid'];
		$proUid = $_POST['proUid'];
		$catUid = $_POST['catUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->addCategoriasPorProveedor($pcUid,$proUid,$catUid);				
		echo $respuesta;
		break;

	case 'eliminarCategoriasPorProveedor':
		require 'class.functions.php';
		$pcUid = $_POST['pcUid'];
		$proUid = $_POST['proUid'];
		$catUid = $_POST['catUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->removeCategoriasPorProveedor($pcUid,$proUid,$catUid);				
		echo $respuesta;
		break;

    case 'agregarIconosPorProveedor':
		require 'class.functions.php';
		$picUid = $_POST['picUid'];
		$proUid = $_POST['proUid'];
		$icoUid = $_POST['icoUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->addIconosPorProveedor($picUid,$proUid,$icoUid);				
		echo $respuesta;
		break;

	case 'eliminarIconosPorProveedor':
		require 'class.functions.php';
		$picUid = $_POST['picUid'];
		$proUid = $_POST['proUid'];
		$icoUid = $_POST['icoUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->removeIconosPorProveedor($picUid,$proUid,$icoUid);				
		echo $respuesta;
		break;		

	case 'eliminarProveedor':
		require 'class.functions.php';		
		$proUid = $_POST['proUid'];
		$proNombre = $_POST['proNombre'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->removeProveedor($proUid,$proNombre);				
		echo $respuesta;
		break;		

	case 'eliminarPromocion':
		require 'class.functions.php';		
		$proUid = $_POST['proUid'];
		$promoUid = $_POST['promoUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->removePromocion($proUid,$promoUid);				
		echo $respuesta;
		break;
	
	default:
		# code...
		break;
}

?>