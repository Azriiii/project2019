<?PHP
include "../core/CartC.php";

if (isset($_POST['id_produit']) and isset($_POST['Qty']) and isset($_POST['Prix'])){
$Cart1=new Cart($_POST['id_produit'],$_POST['Qty'],$_POST['Prix']*$_POST['Qty']);
//partie2 cart c
$Cart1C=new CartC();
$Cart1C->addCart($Cart1);
header('Location: cart.php');
	
}else{
	echo "vérify the fields.";
}
//*/

?>
