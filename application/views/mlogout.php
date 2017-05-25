<?php
    if(isset($_SESSION['mname'])){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            setcookie(session_name(),'',time()-3600);//销毁与客户端的卡号
            echo"<script>alert('注销成功');window.location.href='http://localhost/clothshop1/index.php/user/managerlogin';</script>";
        }
?>