<!DOCTYPE html>
<html style="height: 100%;">
    <head>
        <title>Csak Csongor INFO2 HF</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
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
            <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr align="center">
                    <p align="center" class='testb'>Törlés</p>
                </tr>
                <?php
                    
                    include 'db.php';
                    $link = getDb(); 
                
                    $id = $_GET['id'];
                    $query = sprintf("SELECT id, userid, thingname, ttype, buydate, buyprice, manufacturer, state, warranty FROM Thing where userid = %s", 
                        mysqli_real_escape_string($link, $id)) or die(mysqli_error($link));
                    $eredmeny = mysqli_query($link, $query);
                ?>
                <table align="center">
                    <tr>
                        <th align="center" class='testb'>Név</th>
                        <th align="center" class='testb'>Típus</th>
                        <th align="center" class='testb'>Ár</th>
                        <th align="center" class='testb'>Dátum</th>
                        <th align="center" class='testb'>Gyártó</th>
                        <th align="center" class='testb'>Állapot</th>
                        <th align="center" class='testb'>Garancia</th>
                    </tr> 
                    <?php while ($row = mysqli_fetch_array($eredmeny)): ?>
                    <tr>
                        <td align="center" class='testb'><?=$row['thingname']?></td>
                        <td align="center" class='testb'><?=$row['ttype']?></td>
                        <td align="center" class='testb'><?=$row['buyprice']?></td>
                        <td align="center" class='testb'><?=$row['buydate']?></td>
                        <td align="center" class='testb'><?=$row['manufacturer']?></td>
                        <td align="center" class='testb'><?=$row['state']?></td>
                        <td align="center" class='testb'><?=$row['warranty']?></td>
                        <td align="center" ><a href="delete.php?id=<?=$row['id']?>">Töröl</a></td>
                    </tr>                
                    <?php endwhile; ?> 
                </table>
                <?php
                    mysqli_close($link);
                ?>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
