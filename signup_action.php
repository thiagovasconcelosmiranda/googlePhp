<?php
require_once 'config.php';
require_once 'models/Auth.php';

$auth = new Auth($pdo, $base);

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$surname = filter_input(INPUT_POST, 'surname');
$month = filter_input(INPUT_POST, 'month');
$phone = filter_input(INPUT_POST, 'phone');
$day = filter_input(INPUT_POST, 'day');
$year = filter_input(INPUT_POST, 'year');
$gender = filter_input(INPUT_POST, 'gender');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');


if($firstname && $month && $day
 && $year && $gender && $password && $email
 ){
    $birthdate = $year.'-'.$month.'-'.$day;
    $avatar = '';
   
     if(isset($_FILES['avatar']) && !empty($_FILES['avatar']['tmp_name'])){
         $newAvatar = $_FILES['avatar'];
         if(in_array($newAvatar['type'], ['image/jpeg', 'image/jpg', 'image/png'])){
            $avatarWidth = 200;
            $avatarHeight = 200;

            list($widthOrig, $heightOrig) = getimagesize($newAvatar['tmp_name']);
            $ratio = $widthOrig / $heightOrig;
         }
         $newWidth = $avatarWidth;
         $newHeight = $newWidth / $ratio;
            
         if($newHeight < $avatarHeight){
              $newHeight = $avatarHeight;
              $newWidth = $newHeight * $ratio;
          }
          $x = $avatarWidth - $newWidth;
          $y = $avatarHeight - $newHeight;

          $x = $x<0 ? $x/2 : $x;
          $y = $y<0 ? $y/2 : $y;


          $finalImage = imagecreatetruecolor($avatarWidth, $avatarHeight);
          switch ($newAvatar['type']) {
            case 'image/jpeg':
            case 'image/jpg';
              $image = imagecreatefromjpeg($newAvatar['tmp_name']);
            break;

            case 'image/png';
            $image = imagecreatefrompng($newAvatar['tmp_name']);
            break;
          }
          imagecopyresampled(
            $finalImage ,$image,
            $x, $y, 0, 0,
            $newWidth, $newHeight, $widthOrig, $heightOrig
          );
          $avatarName = md5(time().rand(0,9999)).'.jpg';

          imagejpeg($finalImage, './assets/media/avatars/'.$avatarName, 100);
          $avatar = $avatarName;
     }
   
      $auth->registerUser($firstname, $lastname,$surname, $phone, $birthdate, $gender, $password, $email, $avatar);

 }

 header('Location:'.$base);
 exit;