<?php
	session_start();
    include "connectdb.php";

    //xoá session theo tên người dùng
    unset($_SESSION['username']);

    //xoá tất cả session có trong trang web
    //session_destroy();
    header('location: dangnhap.php');
    include "libs/remove-unicode.php";
	//include "libs/PHPExcel/IOFactory.php";

    //Site Redirect	
	$ctrl="ctrls/c_index.php";
	$site="";

	if(isset($_GET["ctrl"]))
		$site=$_GET["ctrl"];

    //Division Manage:	
	switch ($site)
	{
		//Main
			case "TrangChu":
				$ctrl="trangchu.php";
				break;
			case "DatVe":
				$ctrl="datve.php";
				break;
			case "HuongDan":
				$ctrl="huongdan.php";
				break;
			case "DangKy":
				$ctrl="giohang.php";
				break;			
			case "LienHe":
				$ctrl="lienhe.php";
				break;	
			
		default:
			$ctrl="trangchu.php";
			
			break;

	}
	
//Head		
	include "header.php";
//Body	

//	{
		include $ctrl; 
//	}
//Footer
	include "footer.php";

?>
