<?php
    require_once '..\connect\connect.php';
    
    $Surname = $_POST['Surname'];
    $Name = $_POST['Name'];
    $MiddleName = $_POST['MiddleName'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];

    function gen_password($length = 6)
    {				
        $chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP'; 
        $size = strlen($chars) - 1; 
        $password = '';
        while($length--) {
            $password .= $chars[random_int(0, $size)]; 
        }
        return $password;
    }
    $newPassword = gen_password(8);
    mysqli_query($connect, "INSERT INTO `firstdata` (`Surname`, `Name`, `MiddleName`, `Number`, `Email`, `Password`) VALUES ('$Surname', '$Name', '$MiddleName', '$Number', '$Email', '$newPassword')");



    
    $to = $Email;
    $subject = 'Kod';
    $message = $newPassword;

?>
