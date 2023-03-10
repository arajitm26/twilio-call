<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+17853775248"><?php  echo $_POST['To'];?></Dial>
</Response>