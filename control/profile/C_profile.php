<?php

session_start();
if (isset($_POST['submit'])) {
    echo 'ada';
    $name = $_POST['name'];
    $title = $_POST['title'];
    $email=$_POST['email'];
    $address = $_POST['address'];
    $dateofBirth = $_POST['date_birth'];
    echo $password = $_POST['password'];    echo '<br/>';

    $my_session_user=array('name','title','Datre_of_birth','email','password','address');
    $dataArray=array(
        array(0,$_POST['name']),
        array(1,$_POST['title']),
        array(2,$_POST['date_birth']),
        array(5,$_POST['email']),
        array(6,$_POST['password']),
        array(7,$_POST['address'])
    );
    echo '<pre>'.  print_r($_SESSION['user'],true) ."</pre>";
//    var_dump($dataArray);echo '<br/>';
    echo $id=$_SESSION['user']['employees']['id']; echo '<br/>';
    include_once '../../models/links.php';
    $linker=new links();
    $user=$_SESSION['user'];
    $link=$linker->profile_update();
    for ($i = 0; $i < 6; $i++) {
        $types=$dataArray[$i][0];  $val=$dataArray[$i][1];
  echo $types.",".$val;  echo '<br/>';
        $getdata = array(
                        'edit_type' => "$types",
                        'employee_id' => "$id",
                        'value' => "$val"         
                        );
        $user['employees'][$my_session_user[$i]]=$val;
        
      $result= $link.http_build_query($getdata);
      echo $result;
            echo '<br/>';
      $res=file_get_contents($result);
//      echo $res;
      if($res)          echo 'Done<br/>'; else {
          echo 'Not Done<br/>';    
      }
    }
    $_SESSION['user']=$user;
    echo 'asd';
    //var_dump($_SESSION['user']);
//    $id = $_SESSION['user']['employees']['id']; 
    $tmp = $_FILES['upload']['tmp_name']; $type = $_FILES['upload']['type'];
    $tmpc = $_FILES['uploadc']['tmp_name']; $typec = $_FILES['uploadc']['type'];
//
 include_once '../../models/NSfunction.php';
 $ns=new NSfunction_class();
 $ns->move_image_Path($tmp, "../../resources/images/user/" . $id . ".jpg",$type);
 $ns->move_image_Path($tmpc,"../../resources/images/user/c_" . $id . ".jpg",$typec);  
    var_dump($_SESSION['user']);
 header("Location: ../../views/profile/profile_2.php");
}
?>
