<php
echo nl2br(shell_exec('git pull origin master 2>&1'));
$date = date();
$message = 'Pete Lower.com has been updated at $date';
mail('pete.lower@gmail.com','Git Update Notification: petelower.com',$message);
?>
