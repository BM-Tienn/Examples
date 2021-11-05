<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Từ điển A-V</title>
</head>
<body>
    <form action="#" method="POST">
        <label>Từ Tiếng Anh </label><!--nhập từ cần dịch-->
        <input type="text" name="engLish">
        <button>Dịch</button>
    </form>
    <div class="result">
    <?php 
        if (isset($_POST["engLish"])) {
        $engLish= $_POST["engLish"];
        $tuDien= array("english"=>"tiếng anh","name"=>"tên","year"=>"năm","day"=>"tháng");
           if(!empty($tuDien)){
               foreach($tuDien as $key => $value){
                   if($key==$engLish){
                       $hienThi= "<table><tr><td>Tiếng Anh</td><td>Tiếng Việt</td></tr><tr><td>". $key ."</td><td>" . $value ."</td></tr></table>";
                   }
               }
               echo $hienThi;
           }}
           
        ?>
    </div>
</body>
</html>