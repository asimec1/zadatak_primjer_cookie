<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	
	error_reporting(E_ALL);
	setcookie('news', 'Neka Vijest', time() + (86400 * 30), "/"); // 86400 = 1 day
	
?>
<!DOCTYPE html>
<html lang="hr">
  <head>
    <meta charset="utf-8">
	<title>Vijesti</title>
  </head>
  <style>
	body { margin: 10px;
        font-family: Arial, Helvetica;
    }
    h1 {
        font-size: 12px;
    }
  </style>
<body>
    <?php
    print '
    <nav id="1">
        <ul>
            <li><a href="index.php?menu=1">O nama</a></li>
            <li><a href="index.php?menu=2">Vijesti</a></li>
            <li><a href="index.php?menu=3">Kontakt</a></li>
            <li><a href="index.php?menu=4">Galerija</a></li>
        </ul>
    </nav>
    <main>';
   
    if ($_GET['menu'] == 1) {
        print '<h1>O nama</h1>
        <p>Nešto o nama</p>';
    }
    else if ($_GET['menu'] == 2) {
        print '<h1>Vijesti</h1>
        <nav id="2">
            <ul>
                <li><a href="index.php?menu=' . $_GET['menu'] . '&action=1">Vijest 1</a></li>
                <li><a href="index.php?menu=' . $_GET['menu'] . '&action=2">Vijest 2</a></li>
                <li><a href="index.php?menu=' . $_GET['menu'] . '&action=3">Vijest 3</a></li>
                <li><a href="index.php?menu=' . $_GET['menu'] . '&action=4">Vijest 4</a></li>
            </ul>
        </nav>
        <p>Nešto o vijestima</p>';
        if ($_GET['action'] == 1) {
            Print '<p>Prva vijesti i nešto o tome</p>';
        }
        else if ($_GET['action'] == 2) {
            Print '<p>Druga vijesti i nešto o tome</p>';
        }
        else if ($_GET['action'] == 3) {
            Print '<p>Treća vijesti i nešto o tome</p>';
        }
        else if ($_GET['action'] == 4) {
            Print '<p>Četvrta vijesti i nešto o tome</p>';
        }
    }
    else if ($_GET['menu'] == 3) {
        print '<h1>Kontakt</h1>
        <p>Nešto o kontaktu</p>';
    }
    else if ($_GET['menu'] == 4) {
        print '<h1>Galerija</h1>
        <p>Nešto o galeriji</p>';
    }
    print '
    </main>
    <footer>&copy; ALen Šimec, registred 2022. </footer>';
    #print $_COOKIE['news'];
    ?>
</body>
</html>