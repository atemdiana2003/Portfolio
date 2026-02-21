<?php

session_start();

if(!isset($_SESSION['admin'])){
?>

<form method="POST" action="login.php">

<input name="user" placeholder="Username">
<input name="pass" type="password" placeholder="Password">

<button>Login</button>

</form>

<?php
exit();
}
?>

<h2>Admin Panel</h2>

<h3>Messages</h3>

<pre>
<?php
if(file_exists("messages.txt")){
echo file_get_contents("messages.txt");
}
?>
</pre>

<h3>Chat Logs</h3>

<pre>
<?php
if(file_exists("chat.txt")){
echo file_get_contents("chat.txt");
}
?>
</pre>