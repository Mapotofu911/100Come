<?php
  session_name('filemanager');
  session_start();
  //unset($_SESSION[ 'usrname' ]);
  if(!isset($_SESSION[ 'usrname' ]) or $_SESSION['usrname'] == NULL or $_SESSION['usrname'] == "") {
    ?>
<html>
  <head>
    <title>Chat</title>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <h3 align="center">Please choose a nickname and a color</h3>
    <form action="login.php" method="post">
      <table width="100%" cellspacing="0" border="0">
        <tr>
          <td align="left" valign="top">Nickname :</td>
          <td align="left" valign="top">
            <input type="text" name="usrname" required/>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">Color :</td>
          <td align="left" valign="top">
            <select name="color">
              <option value="000000">Black</option>
              <option value="008080">Teal</option>
              <option value="FFA500">Orange</option>
              <option value="0000FF">Blue</option>
            </select>
          </td>
        </tr>
      </table>
      <div  style="display: flex; align-items: center; justify-content: center; margin-top: 10px">
        <input type="image" src="img/Login_Button.png" id="btnSend" style="width: 20%; height: 20%">
      </div>
    </form>
  </body>
</html>
<?php
  }
  else
  { 
?>
	<html>
	  <head>
	    <title>Chat Room Example</title>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <script src="js/main.js"></script>
	    <link rel="stylesheet" href="css/main.css" />
	  </head>
	  <body>
	    <div id="view_ajax"></div>
	    <div id="ajaxForm" style="width: 90%; margin: 0 auto;">
	      <input type="text" id="chatInput" onkeydown = "if (event.keyCode == 13) document.getElementById('btnSend').click()"/><input type="button" value="Send" id="btnSend" style="width: 15%;" class="btn" />

	    </div>
	  </body>
	</html>
<?php
}

