<?php 

include '../db.php';



if (isset($_REQUEST['imgupload'])) {
	

	$name=$_POST['title'];
	$author=$_POST['auth'];
	$bcat=$_POST['cat'];
	$price=$_POST['price'];
	$qty=$_POST['qty'];

	$bimg =$_FILES['bimg'];

	$productName = $name.".jpg";

	echo $name . $author . $bcat . $price .$qty . "<br>";

	print_r($bimg);

	$insert =mysqli_query($con ,"INSERT INTO bookDetails (`book_title`, `book_author`, `book_cat`, `book_price`, `book_qty`, `book_img`) VALUES('$name' ,'$author','$bcat','$price','$qty','$productName') ");

	if ($insert) {
		move_uploaded_file($bimg['tmp_name'],'uploads/'.$productName);

		echo "<script>alert('product Added')</script>";
	}


}

?>