<?php 
/*function tweet ($pseudo, $msg, $pictprof, $date, $retweet, $like) {
echo $pictprof.' ';
echo $pseudo . ' a écrit : ' . $msg.' ';
echo '<br>'.$date;
echo ' '.$retweet.' retweets et '.$like. ' likes';
}
*/
session_start();
include_once('Tweet.php');
if(isset($_SESSION[Tweet::class])) {
    $_SESSION[Tweet::class]->retweet = $retweet;        
}
//$date = new DateTime('2017-10-05');
//echo $date->format('Y/m/d');
$tweet1 = new Tweet('Eduardo', 27, '2017-10-05', 15, 'dindon.jpg', 'Issou');
$tweet2 = new Tweet('Eduardo', 2, '2017-08-11', 1, 'dindon.jpg', 'Hello');
$tweet3 = new Tweet('Eduardo', 8, '2017-10-28', 5, 'dindon.jpg', 'Je découvre Twitter');
$tweet4 = new Tweet('Nicolas Sarkozy', 276, '2017-02-15', 158, 'sarko.jpg', 'Vive la France');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter</title>
</head>
<style>
img {
    height : 50px;
    width : 75px;
}
section {
    border : 2px solid black;
    margin-bottom : 2px;
}
.top {
    border : 2px solid red;
}
h2 {
    color : royalblue;
    text-decoration :underline;
}
</style>
<body>
<h2>Timeline </h2>
<?php 
//foreach($data as $tweet) {
//if ($this->pseudo !=="Nicolas Sarkozy") { ?>
<?php
echo $tweet1->afficher();
echo $tweet2->afficher();
echo $tweet3->afficher();
echo $tweet4->afficher();
echo $tweet1->addRetweet(18);
$tweet1->setMsg("Hello from the other side");
echo $tweet1->afficher();
$tweet2->setMsg("Hello from the other sideHello from the other sideHello from the other sideHello from the other sideHello from the other sideHello from the other side");
echo $tweet2->afficher();
$tweet4->setMsg("Allez l'OMMM");
echo $tweet4->afficher();
$tweet4->setMsg("Allez l'OMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM");
echo $tweet4->afficher();
  //  } else {
?>    
<h2>Top trending</h2>
<?php
   // echo '<section class="top"><img src="' . $tweet['pictprof']. '"/>';
   // echo ' ' . $tweet['pseudo'] . ' a écrit : ' . $tweet['msg'];
   // echo '<br/>'. $tweet['date']. ' ' . $tweet['retweet'] . ' retweets et ' . $tweet['like'].' likes.</p></section>';
   // }
//}
?>
<!--<h2>Timeline</h2>
    
<h2>Top trending</h2>    
    <div class="top"><p><?php //tweet('Nicolas Sarkozy', 'Vive la France', '<img src="sarko.jpg">', '03/05/17', 115, 523); ?></p></div>
-->
<?php
 $_SESSION[Tweet::class]=$retweet; 
?>
</body>
</html>
