<!DOCTYPE html>
<html style="height: 100%;">
    <head>
        <title>Csák Csongor INFO2 HF</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon" type="image/x-icon">
        

    </head>
    <body style="height: 100%;">
        <table width="1040" border="0" align="center" cellpadding="0" cellspacing="0" style="height: 100%;">
            <tr>
                <td valign="top" bgcolor="#000000">
                    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                        <br />
                            <td align="center" width="685" height="120" rowspan="2">
                                <a href="index.php">
                                    <img src="image/bmelogo.png" alt="Csák Csongor" height="99" border="0" />
                                </a>
                            </td>
                        </tr>
                    </table>
                    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="5"></td>
                        </tr>
                    </table>
                    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="9">
                                <span class="test">
                                    <img src="image/line-white.gif" alt="icon" width="1000" height="1" />
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td width="120" align="center">
                                <a href="index.php" class="c">HOME</a>
                            </td>
                            <td width="30" align="center">
                                <img src="image/icon1.gif" alt="icon" width="30" height="30" />
                            </td>
                            <td width="120" align="center">
                                <a href="allthings.php" class="c">ALL THINGS</a>
                            </td>
                            <td width="30" align="center">
                                <img src="image/icon1.gif" alt="icon" width="30" height="30" />
                            </td>
                            <td width="120" align="center">
                                <a href="insert.php" class="c">ADD A THING</a>
                            </td>
                            <td width="50" align="center">
                                <img src="image/icon1.gif" alt="icon" width="30" height="30" />
                            </td>
                            <td width="120" align="center">
                                <a href="deletethings.php" class="c">DELETE A THING</a>
                            </td>
                            <td width="30" align="center">
                                <img src="image/icon1.gif" alt="icon" width="30" height="30" />
                            </td>
                            <td width="120" align="center">
                                <a href="docs.php" class="c">DOCS</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="9">
                                <span class="test">
                                    <img src="image/line-white.gif" alt="icon" width="1000" height="1" />
                                </span>
                            </td>
                        </tr>
                    </table>
                    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="5"></td>
                        </tr>
                    </table>
                    <br />
                    
                    <?php 
                        include 'db.php'; 
                        $link = getDb();
                      //  $id = $_GET['id'];
                    ?>
                    
                    <table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr valign="top">
                            <th><p  class='testb' align="center">Új dolog</p></th>
                        </tr>
                        <tr valign="top">
                            <td align="center" valign="top" bgcolor="#000000" valign="top">
                                <form action="insertuser.php?userid=<?php echo $_GET['userid']; ?>" method="post" bgcolor="#000000">
                                    <p class='testb'>
                                        Név: <input type="text" name="thingname" />    
                                    </p>
                                    <p class='testb'>
                                        Típus: <input type="text" name="ttype" />    
                                    </p>
                                    <p class='testb'>
                                        Ár: <input type="text" name="buyprice" />    
                                    </p>
                                    <p class='testb'>
                                        Dátum: <input type="text" name="buydate" />    
                                    </p>
                                    <p class='testb'>
                                        Gyártó: <input type="text" name="manufacturer" />    
                                    </p>
                                    <p class='testb'>
                                        Állapot: <input type="text" name="state" />    
                                    </p>
                                    <p class='testb'>
                                        Garancia: <input type="text" name="warranty" />
                                    </p>
                                    <p class='testb'> 
                                        <input type="submit" value="Elküld" name="uj" />
                                    </p>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>

<?php   
    print_r($_POST);
    if (isset($_POST['uj'])) {
        $thingname = $_POST['thingname'];
        $ttype = $_POST['ttype'];
        $buyprice = $_POST['buyprice'];
        $buydate = $_POST['buydate'];
        $manufacturer = $_POST['manufacturer'];
        $state = $_POST['state'];
        $warranty = $_POST['warranty'];
        $query=sprintf("INSERT INTO Thing(userid, thingname, ttype, buyprice, buydate,  manufacturer, state, warranty) VALUES('%s','%s','%s','%s','%s','%s','%s','%s')"
                        , mysqli_real_escape_string($link, $_GET['userid'])
                        , mysqli_real_escape_string($link, $thingname)
                        , mysqli_real_escape_string($link, $ttype)
                        , mysqli_real_escape_string($link, $buyprice)
                        , mysqli_real_escape_string($link, $buydate)
                        , mysqli_real_escape_string($link, $manufacturer)
                        , mysqli_real_escape_string($link, $state)
                        , mysqli_real_escape_string($link, $warranty));
                        
        mysqli_query($link, $query );
        mysqli_close($link);
        header("Location: allthings.php");
    } 
?>