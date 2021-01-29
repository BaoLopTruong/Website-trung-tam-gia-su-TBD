<?php
 session_start();
 if($_SESSION['role'] != "2" ){
     header('Location: ./dangnhap.php');
 }
 echo "DAY LA TRANG GIA SU";
 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div >
    <a?>DANH SACH HOC SINH DO BAN DAM NHIEM</a>
       <table>
								<tbody id="vd3">
								
			
								</tbody>
							</table>
    </div>
    <a href="../Controler/logout.php">DANG XUAT</a>
    <script>
		const url ="../Model/listHV_giasu.php";
		fetch(url).then(
			res=>{
				res.json().then(
					data=>{
						console.log(data);
						if(data.length > 0) {
							var temp2 = "";
							data.forEach((u)=> {
								
								 temp2 +="<th>";
								
									
								 temp2 += "<tr>"+ u.hoten+"</tr>";
								temp2 += "<a href='../Model/listGS.php'>XEM THONG TIN</a>";
				
								
											
								})
						
							document.getElementById("vd3").innerHTML = temp2;
						}
					}
				)
			}
		)
	
	</script>
</body>
</html>