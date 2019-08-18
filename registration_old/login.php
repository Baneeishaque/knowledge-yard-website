
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php
            include_once 'inc\title.php';
            ?></title>

        <link href="css\style.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript">
            function clearText(field)
            {
                if (field.defaultValue == field.value)
                    field.value = '';
                else if (field.value == '')
                    field.value = field.defaultValue;
            }
        </script>


        <script type="text/javascript">

            function valid()
            {
                var a = document.s.uid.value;
                if (a == "")
                {
                    alert("Enter User ID");
                    document.s.uid.focus();
                    return false;
                }
                var b = document.s.pass.value;
                if (b == "")
                {
                    alert("Enter Password");
                    document.s.pass.focus();
                    return false;
                }



            }

        </script>
    </head>
    <body>
        <div id="container">  	  
            <div id="header">

                <div id="logo"> 

                    <div style="position:absolute; left:36px;  top:80px;"> 
                       <div align="left"><font color="#FFFFFF" size="5"><storng><b><?php
                                    include_once 'inc\h1.php';
                                    ?></b></strong></font> </div>
                    </div>
                </div>

                <div id="menu">
                    <ul>
                        <?php
                        include_once 'inc\nav_2.php';
                        print_navigation('Login');
                        ?>
                    </ul>
                </div>
                <div class="cleaner"></div>
            </div>

            <div id="content_area_top">
            </div>

            <div class="box"> <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><font color="#990000" size="+1" face="Times New Roman" 
                                                                style="text-decoration:underline">User Login</font></strong> <br/>
                    <br>
                <form name="s" action="user1.jsp" method="get" onsubmit="return valid()">
                    <table align="left" width="400" height="200" background="images/02.jpg">
                        <tr> 
                            <td><font face="Times New Roman"  size="+1"><strong><img src="images/login1.png" width="30" height="30">&nbsp;&nbsp;User 
                                    ID</strong></font></td>
                            <td><input type="text" name="uid" class="b"></td>
                        </tr>
                        <tr> 
                            <td><font face="Times New Roman"  size="+1"><strong><img src="images/bs.png" width="30" height="30">&nbsp;&nbsp;Password</strong></font></td>
                            <td><input type="password" name="pass" class="b"></td>
                        </tr>
                        <tr> 
                            <td><font face="Times New Roman"  size="+1"><strong><img src="images/windows7_accounts.png" width="30" height="30">&nbsp;&nbsp;Role</strong></font></td>
                            <td><select id="qualification">
                                        <option>User</option>
                                        <option>Admin</option>
                                        
                                    </select></td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td><input type="submit" name="s" value="submit" class="b1" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="reset" name="r" value="clear" class="b1"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div style="position:absolute; left:700px;  top:250px;"> 
                <img src="images/ccc.png" width="340" height="180"></div>
            <!-- Primary content area end -->
        </div>
        <div class="cleaner">


        </div>
    </div><!-- End Of Content area top -->




    <div id="footer">


    </div><!-- End Of Container -->

</body>
</html>