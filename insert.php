<!DOCTYPE html>
<html style="height: 100%;">
    <head>
        <title>Csák Csongor INFO2 HF</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon" type="image/x-icon">
        <style>
            .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                left: 50%;
            }

            .dropdown {
                position: relative;
                display: inline-block;
                left: 44%;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #ddd}

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: #3e8e41;
            }
        </style>
        

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
                            <p class='testb' align="center">Valaszd ki a felhasznalot!</p>
                        </tr>
                        <tr align="center">
                        <?php
                            include 'db.php';
                            $link = getDb(); 
                            $eredmeny = mysqli_query($link, "SELECT id, nev FROM User");
                        ?>

                            <div class="dropdown">

                                <button class="dropbtn">Felhasznalok</button>

                                <div class="dropdown-content">
                                    <?php while ($row = mysqli_fetch_array($eredmeny)): ?>
                                    <a href="insertuser.php?userid=<?=$row['id']?>"><?=$row['nev']?></a>
                                    <?php endwhile; ?>
                                </div>
                            </div>

                        </tr>
                    </table>
                    
                    
                </td>
            </tr>
        </table>
    </body>
</html>