<?php
session_start();//بدء جلسة 
session_unset();//حدف جميع السيشن التي تم حفظها داخل المتصفح
session_destroy();//تدمير او تحطيم الجلسة
header('location:admin.php')//اعادة توجية للمستخدم


?>