<?php
$title = 'PETLOVE'; /*shown in the browser*/
$url = $_SERVER["REQUEST_URI"];
$adminpos = strrpos($url, "admin.php");
$indexpos = strrpos($url, "index.php");
$login = strrpos($url, "login.php");
$news = strrpos($url, "news.php");

$cssdirpath = "css";
?>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


<link rel="stylesheet" type="text/css" href="<?php echo $cssdirpath;?>/cssforallpages.css">

<?php if($indexpos != false) {
  echo '<link rel="stylesheet" type="text/css" href="'. $cssdirpath .'/index.css">';
}
;?>


<link rel="stylesheet" type="text/css" href="<?php echo $cssdirpath;?>/navigation.css">
<link rel="stylesheet" type="text/css" href="<?php echo $cssdirpath;?>/carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo $cssdirpath;?>/contactus.css">
<link rel="stylesheet" type="text/css" href="<?php echo $cssdirpath;?>/footer.css">


<?php if($news != false) {
echo '<link rel="stylesheet" type="text/css" href="'. $cssdirpath .'/news.css">';
}
;?>

<?php if($login != false) {
 echo '<link rel="stylesheet" type="text/css" href="'. $cssdirpath .'/login.css">';
}
;?>
<link rel="stylesheet" type="text/css" href="<?php echo $cssdirpath;?>/dashboard.css">

<?php if($adminpos != false) {
  echo '<link rel="stylesheet" type="text/css" href="'. $cssdirpath .'/admin.css">';
}
;?>

<script src="js/buttontoggle.js"></script>
