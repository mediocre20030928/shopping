<?php
   $config = [
       'host'=> '127.0.0.1',
       'port'=> '3306',
       'dbname' => 'shop',
       'user' => 'root',
       'pass' => 'oneinstack'
   ];

   //var_dump($config);
  $dbh = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}",$config['user'],$config['pass']);

   $user_id = $_GET['uid'];
   $user_name = $_GET['user_name'];
   $sql = "select * from p_users where user_id=:id and user_name=:name";
   echo $sql;echo '</br>';
   //var_dump($sql);

   //预处理 参数绑定
   $stmt = $dbh->prepare($sql);
   $stmt->bindParam(':id',$user_id);
   $stmt->bindParam(':name',$user_name);
   $stmt->execute();
   $res = $stmt->fetch(PDO::FETCH_ASSOC);
   echo '<pre>';print_r($res);echo '</pre>';

