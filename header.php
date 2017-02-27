<!DOCTYPE HTML>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="stylesheet" href="/tp-sin/style.css" />
         <title>Streaming-Gratuit</title>
         <script type="text/javascript">
                 <!--
                         function open_infos()
                         {
                                 window.open('popup.php','test','menubar=no, scrollbars=no, top=200, left=200, width=600, height=500');
                         }
                 -->
         </script>
    </head>
    <body>
      <div id=bloc_page>

    <header>

        <div id="titre_principal">
        <h1>FILM-STREAMING GRATUIT</h1>
        </div>
          <?php
            if (isset($_SESSION['pseudo'])) { ?>
              <form action="connect.php" method="post">
              <table id="topBar" align=right>
                <tr><td id="topUser"><?php echo $_SESSION['pseudo'] ?></td>
              <td><input id="topSubmit" type="submit" name="deconnect" id="submit2" value="Log out"/> </td>
              <td><input id="topSubmit" type="submit" name="unregister" id="submit2" value="Unregister"/> </td>
            </tr></table>
          </form>
          <?php
            } else {
          ?>
          <form action="connect.php" method="post" id="username">
            <table id="topBar" align=right>
					       <tr><td>login <input size="10" type="text" name="pseudo" id="pseudo"/></td>
					       <td>pass <input size="10" type="password" name="password" id="passwd"/></td>
					       <td><input type="submit" name="connect" id="submit1" value="OK"/></td>
                 <td><a href="#null" onclick="javascript:open_infos();">register</a></td>
               </tr></table>
          </form>
          <?php } ?>


        <nav>
            <ul>
                  <li><a href="/tp-sin/index.php" title="Home">Home</a></li>
                  <li><a href="/tp-sin/stream.php" title="streaming">Film</a></li>
                  <li><a href="/tp-sin/blog.php" title="blog">Blog</a></li>
                  <li><a href="/tp-sin/members.php" title="community">Members</a></li>
            </ul>
        </nav>
      </header>
    </body>
</html>
