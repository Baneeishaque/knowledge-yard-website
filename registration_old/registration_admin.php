
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php
            include_once 'inc\title.php';
            ?></title>

        <link href="css\style.css" rel="stylesheet" type="text/css" />
        <script src="js\jquery-2.1.1.min.js"></script>

        <script>
            $(document).ready(function () {

                $('#qualification').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'ajax-inc\textreturn.php',
                        data: 'text=' + $('#qualification').val(),
                        success: function (msg)
                        {

                            $('#result').html(msg);


                        }
                    });
                });
            });
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


            <br/>
            <br/>
            <div class="box"> <br/>
                <br/>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <strong><em><font color="#990000" size="+1" face="Times New Roman"  
                                      style="text-decoration:underline">User Registration</font></em></strong> 
                    <br/>
                    <br>
                <form name="s" action="registration_action.php" method="get" onSubmit="return valid()">
                    <div id="result">
                        <table align="center" cellpadding="8" cellspacing="10" width="800" id="rtable">

                            <tr>
                                <td><font face="Trebuchet MS"  size="+1"><strong>Qualification</strong></font></td>
                                <td>
                                    <select id="qualification">
                                        <option>Student</option>
                                        <option>Higher Secondary</option>
                                        <option>Diploma</option>
                                        <option>Graduation</option>
                                        <option>Post Graduation</option>
                                        <option>Others</option>
                                    </select>
                                </td>
                            </tr>

                            <tr> 
                                <td><font face="Times New Roman"  size="+1"><strong>Standard/Course</strong></font></td>
                                <td><input  type="text" name="uidd" id="name"></td>
                            </tr>
                            <tr> 
                                <td><font face="Times New Roman"  size="+1"><strong>Division/Semester</strong></font></td>
                                <td><input  type="text" name="uidd" id="name"></td>
                            </tr>
                            <tr>
                                <td><font face="Times New Roman"  size="+1"><strong>Weather You Registered In...</strong></font></td>
                                <td><input type="checkbox" name="unn" class="b">Kerala PSC</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="unn" class="b">Employment Exchange</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="unn" class="b">Employability Exchange</td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="s" value="View" class="b1" > 
                                    &nbsp;&nbsp;&nbsp; <input type="reset" name="r" value="clear" class="b1"></td>
                            </tr>
                        </table>
                    </div>

                </form>
            </div>

            <div style="position:absolute; left:900px;  top:200px;"> 
                <img src="images/create_new_user.jpg" width="180" height="350">
            </div> 
            <!-- Primary content area end -->
        </div>
        <div class="cleaner">
        </div>
    </div><!-- End Of Content area top -->

    <div id="footer">
    </div><!-- End Of Container -->

</body>
</html>