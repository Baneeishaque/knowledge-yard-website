
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php
            include_once 'inc\title.php';
            ?></title>

        <link href="css\style.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript">



            function valid()
            {
                var aa = document.s.name.value;
                if (aa == "")
                {
                    alert("Enter Name");
                    document.s.unn.focus();
                    return false;
                }

               


                var k = document.s.dob.value;
                if (k == "")
                {
                    alert("Enter date of birth");
                    document.s.mobb.focus();
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
                        print_navigation('Registration');
                        ?>

                    </ul>
                </div>
                <div class="cleaner"></div>
            </div>

            <div id="content_area_top">
            </div>

            <div class="box"> <br>
                <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <strong><em><font color="#990000" size="+1" face="Times New Roman"  
                                      style="text-decoration:underline">User Registration</font></em></strong> 
                    <br/>
                    <br>
                <form name="s" action="registration_2.php" method="get" onSubmit="return valid()">
                    <table align="center" cellpadding="10" cellspacing="10" width="800">
                        <tr> 
                            <td><font face="Times New Roman"  size="+1"><strong>Name</strong></font></td>
                            <td><input type="text" name="name" class="b"></td>
                        </tr>
                        <tr>
                            <td><font face="Times New Roman"  size="+1"><strong>Gender</strong></font></td>
                            <td>
                                <select>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>


                        </tr>
                        <tr>
                            <td><font face="Times New Roman"  size="+1"><strong>Date Of Birth</strong></font></td>
                            <td><input type="text" name="dob" class="b"></td>


                        </tr>
                        
                        <tr>
                            <td><font face="Times New Roman"  size="+1"><strong>Reliegion</strong></font></td>
                            <td>
                                <select>
                                    
                                    <option>Muslim</option>
                                    <option>Hindu</option>
                                    <option>Christian</option>
                                    <option>Others</option>
                                </select>
                            </td>
                            


                        </tr>
                        <tr>
                            <td><font face="Times New Roman"  size="+1"><strong>Caste</strong></font></td>
                            <td>
                                <input type="text" name="caste" class="b">
                                
                            </td>
                        </tr>
                        
                        <tr>
                            <td><font face="Times New Roman"  size="+1"><strong>Community</strong></font></td>
                            <td>
                                <select>
                                    <option>General</option>
                                    <option>Muslim</option>
                                    <option>Christian OBC</option>
                                    <option>Hindu OBC</option>
                                    <option>SC</option>
                                    <option>ST</option>
                                    <option>Others</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr> 
                            <td></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="s" value="Next" class="b1" > 
                                &nbsp;&nbsp;&nbsp; <input type="reset" name="r" value="clear" class="b1"></td>
                        </tr>








                        

                       
                        

                        
                    </table>
                </form>
            </div>

            <div style="position:absolute; left:850px;  top:240px;"> 
                <img src="images/create_new_user.jpg" width="200" height="350">
            </div> 
            <!-- Primary content area end -->
        </div>
        <div class="cleaner">


        </div>
    </div><!-- End Of Content area top -->




    <div id="footer">


    </div><!-- End Of Container -->

    <!--  Free CSS Templates by freecsstemplates.in  -->
</body>
</html>