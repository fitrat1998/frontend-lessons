<!-- <?php
session_start();

// Agar ma'lumotlar $_GET orqali kelgan bo'lsa, sessionga saqlang
if(isset($_GET['sub'])){
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    
    // Ma'lumotlarni sessionga qo'shish, ammo faqat yangi ma'lumotlar kiritilganida
    if(!isset($_SESSION['dataArray'])) {
        $_SESSION['dataArray'] = array();
    }
    
    // Yangi ma'lumotlarni sessionga qo'shish
    $_SESSION['dataArray'][] = array(
        "fname" => $fname,
        "lname" => $lname
    );
}

// Agar sessionda ma'lumotlar mavjud bo'lsa, ularni o'qish
if(isset($_SESSION['dataArray'])){
    $dataArray = $_SESSION['dataArray'];
    print_r($dataArray);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action= "index.php" method="GET">
  <label for="fname">First name:</label><br>
  <input type="text" name="fname" id="fname" value="Mike"><br><br>
  <label for="lname">Last name:</label><br>
  <input type="text" name="lname" id="lname" value="Walker"><br><br>
  <input type="submit" name="sub"    value="Submit" >
</form>
  
<table>
  <tr>
    <th colspan="" rowspan="" headers="" scope="">lname</th>
    <th colspan="" rowspan="" headers="" scope="">fname</th>
  </tr>
  <?php
    foreach ($dataArray as $key => $value) {
      ?>
          <tr>
            <td colspan="" rowspan="" headers=""><?= $key + 1 ?></td>
            <td colspan="" rowspan="" headers=""><input type="text" name="fname" value="<?=$value['fname']?>"></td>
            <td colspan="" rowspan="" headers=""><?=$value['lname']?></td>
          </tr>
      <?
    }
  ?>
</table>
</body>
</html>
 -->