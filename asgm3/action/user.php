

<?php 
function checkuser($user,$pass){
    $connect=conectdb();
    $stmt = $connect->prepare("SELECT*FROM user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt ->execute();
    $result = $stmt-> setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt-> fetchAll();
    return $kq[0]['role'];
    }

?>