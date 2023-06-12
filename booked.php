<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
if(isset($_POST['booking'])){
echo '<table>';
echo '<tr><td>'.'First Name  : '.'</td><td>'.$_POST['firstname'].'</td></tr>';
echo '<tr><td>'.'Last Name   : '.'</td><td>'.$_POST['lastname'].'</td></tr>';
echo '<tr><td>'.'Email       : '.'</td><td>'.$_POST['email'].'</td></tr>';
echo '<tr><td>'.'Phone Number: '.'</td><td>'.$_POST['phone'].'</td></tr>';
echo '<tr><td>'.'Check In    : '.'</td><td>'.$_POST['checkin'].'</td></tr>';
echo '<tr><td>'.'Check Out   : '.'</td><td>'.$_POST['checkout'].'</td></tr>';
echo '<tr><td>'.'Address     : '.'</td><td>'.$_POST['address'].'</td></tr>';
echo '<tr><td>'.'Room Type   : '.'</td><td>'.$_POST['room'].'</td></tr>';
echo '<tr><td>'.'Number Of Guests: '.'</td><td>'.$_POST['guest'].'</td></tr>';
echo '</table>';
}
?>
</body>
</html>


