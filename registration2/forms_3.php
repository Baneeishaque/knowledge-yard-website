<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Neat Admin Template</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/uniform.default.css">
        <link rel="stylesheet" href="css/bootstrap.datepicker.css">
        <link rel="stylesheet" href="css/jquery.cleditor.css">
        <link rel="stylesheet" href="css/jquery.plupload.queue.css">
        <link rel="stylesheet" href="css/jquery.tagsinput.css">
        <link rel="stylesheet" href="css/jquery.ui.plupload.css">
        <link rel="stylesheet" href="css/chosen.css">
        <link rel="stylesheet" href="css/jquery.jgrowl.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="style-toggler">
            <img src="img/icons/fugue/color.png" alt="" class='tip' title="Toggle style-switcher" data-placement="right">
        </div>					
        <div class="style-switcher">
            <!-- <h3>Style-switcher</h3> -->
            <ul class='color'>
                <li>
                    <a href="#" class='style'>Default</a>
                </li>
                <li>
                    <a href="#" class='blue'>Blue</a>
                </li>
                <li>
                    <a href="#" class='green'>Green</a>
                </li>
                <li>
                    <a href="#" class='red'>Red</a>
                </li>
            </ul>
            <h3>Pattern-switcher</h3>
            <ul class='pattern'>
                <li>
                    <a href="#" class='default'>Default</a>
                </li>
                <li>
                    <a href="#" class='dark'>Dark wood</a>
                </li>
                <li><a href="#" class='light'>Light</a></li>
                <li><a href="#" class='wood'>Wood</a></li>
                <li><a href="#" class='retina-wood'>Retina-wood</a></li>
                <li><a href="#" class='linen'>Linen</a></li>
                <li><a href="#" class='paper'>Paper</a></li>
            </ul>
        </div>
        <div class="topbar clearfix">
            <div class="container-fluid">
                <a href="dashboard.html" class='company'>Knowledge Yard Foundation Registration Form</a>
                <form action="#">
                    <input type="text" value="Search here...">
                </form>
                <!-- <ul class='mini'>
                    <li class='dropdown dropdown-noclose supportContainer'>
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                            <img src="img/icons/fugue/book-question.png" alt="">
                            Support tickets
                            <span class="label label-warning">5</span>
                        </a>
                        <ul class="dropdown-menu pull-right custom custom-dark">
                            <li class='custom'>
                                <div class="title">
                                    What is the question?
                                    <span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class='custom'>
                                <div class="title">
                                    How can i do this and that?
                                    <span>Jul 19, 2012 by <a href="#" class='pover' data-title="Username" data-content="User information comes here">Username</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class='custom'>
                                <div class="title">
                                    I want more support tickets!
                                    <span>Jul 19, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class='custom custom-hidden'>
                                <div class="title">
                                    This is a great feature, BUT...
                                    <span>Jul 18, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Ipsum</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class='custom custom-hidden'>
                                <div class="title">
                                    I want more colors! How?
                                    <span>Jul 16, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class="custom">
                                <div class="expand_custom">
                                    <a href="#">Show all support tickets</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class='dropdown pendingContainer'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                            <img src="img/icons/fugue/document-task.png" alt="">
                            Pending orders
                            <span class="label label-important">1</span>
                        </a>
                        <ul class="dropdown-menu pull-right custom custom-dark">
                            <li class='custom'>
                                <div class="title">
                                    Pending order #1 
                                    <span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show order"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete order"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class='dropdown messageContainer'>
                        <a href="#" class='dropdown-toggle' data-toggle='dropdown'>
                            <img src="img/icons/fugue/balloons-white.png" alt="">
                            Messages
                            <span class="label label-info">3</span>
                        </a>
                        <ul class="dropdown-menu pull-right custom custom-dark">
                            <li class='custom'>
                                <div class="title">
                                    Hello, whats your name?
                                    <span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show message"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Reply message"><img src="img/icons/fugue/mail-reply.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/icons/fugue/gear.png" alt="">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="index-2.html">
                            <img src="img/icons/fugue/control-power.png" alt="">
                            Logout
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
        <div class="breadcrumbs">
            <div class="container-fluid">
                <ul class="bread pull-left">
                    <li>
                        <a href="dashboard.html"><i class="icon-home icon-white"></i></a>
                    </li>
                    <li>
                        <a href="dashboard.html">
                            Dashboard
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="main">
            <div class="container-fluid">
                <div class="navi">
                    <ul class='main-nav'>
                        <li>
                            <a href="dashboard.html" class='light'>
                                <div class="ico"><i class="icon-home icon-white"></i></div>
                                Dashboard
                                <span class="label label-warning">10</span>
                            </a>
                        </li>
                        <li class='active'>
                            <a href="index.html" class='light'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Forms
                                <span class="label label-info">1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-th-large icon-white"></i></div>
                                Tables
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="datatables.html">
                                        Data Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="plaintables.html">
                                        Plain Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="mediatables.html">
                                        Media Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Interface Elements
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="buttons.html">
                                        Buttons & Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="sliders.html">
                                        Sliders & Progress-Bars
                                    </a>
                                </li>
                                <li>
                                    <a href="tooltips.html">
                                        Tooltips, Alerts & Notification
                                    </a>
                                </li>
                                <li>
                                    <a href="tabs.html">
                                        Tabs, Pills & Accordion
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="statistics.html" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Statistics
                                <span class="label label-important">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-exclamation-sign icon-white"></i></div>
                                Error Pages
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="403.html">
                                        403
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        404
                                    </a>
                                </li>
                                <li>
                                    <a href="500.html">
                                        500
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sample Pages
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="gallery.html">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="messages.html">
                                        Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="userprofile.html">
                                        User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="index-2.html">
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="results.html">
                                        Search results
                                    </a>
                                </li>
                                <li>
                                    <a href="view.html">
                                        View form
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="navigation_hover.html">
                                        Navigation expand on hover
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html">Calendar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-resize-full icon-white"></i></div>
                                Layouts
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="#" class='set-liquid'>
                                        Liquid
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='set-fixed'>
                                        Fixed
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="content">








                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head">
                                    <h3>Registration</h3>
                                </div>
                                <div class="box-content box-nomargin">
                                    <div class="modal hide" id="myModal2">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                            <h3>Success</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>Wizard was submit!</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="btn btn-primary" data-dismiss="modal">Ok, thanks!</a>
                                        </div>
                                    </div>

                                    <form method="POST" action="forms_4.php?txt_name=<?php echo $_GET["txt_name"]; ?>&sel_gender=<?php echo $_GET["sel_gender"]; ?>&dob_picker=<?php echo $_GET["dob_picker"]; ?>&sel_religion=<?php echo $_GET["sel_religion"]; ?>&caste=<?php echo $_GET["caste"]; ?>&sel_community=<?php echo $_GET["sel_community"]; ?>&txt_father=<?php echo $_POST["txt_father"]; ?>&txt_father_occupation=<?php echo $_POST["txt_father_occupation"]; ?>&txt_communication_address=<?php echo $_POST["txt_communication_address"]; ?>&txt_present_address=<?php echo $_POST["txt_present_address"]; ?>&txt_telephone=<?php echo $_POST["txt_telephone"]; ?>&txt_mobile=<?php echo $_POST["txt_mobile"]; ?>" enctype="multipart/form-data" class='validate form-horizontal'>
                                        <!--    <div class="step" id="step1">
                                                <ul class="steps">
                                                    <li class="active">
                                                        Step 1
                                                        <span>Basic Information</span>
                                                    </li>
                                                    <li>
                                                        Step 2
                                                        <span>Contact Information</span>
                                                    </li>
                                                    <li>
                                                        Step 3
                                                        <span>Security Information</span>
                                                    </li>
                                                </ul>
                                                <div class="control-group">
                                                    <label for="txt_name" class="control-label">Name</label>
                                                    <div class="controls">
                                                        <input type="text" name="txt_name" id="txt_name" class="required span6 input-square ">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="sel_gender" class="control-label">Gender</label>
                                                    <div class="controls">
                                                        <select name="sel_gender" id="sel_gender" class="cho ">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="dob_picker" class="control-label">Date Of Birth</label>
                                                    <div class="controls">
                                                        <input type="text" name="dob_picker" id="dob_picker" class='required datepick '>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="sel_religion" class="control-label">Religion</label>
                                                    <div class="controls">
                                                        <select name="sel_religion" id="sel_religion" class="cho ">
                                                            <option value="Muslim">Muslim</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Christian">Christian</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="caste" class="control-label">Caste</label>
                                                    <div class="controls">
                                                        <input type="text" name="caste" id="caste" class="required input-xlarge input-square ">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="sel_community" class="control-label">Community</label>
                                                    <div class="controls">
                                                        <select name="sel_community" id="sel_community" class="cho ">
    
                                                            <option value="General">General</option>
                                                            <option value="Muslim">Muslim</option>
                                                            <option value="Christian OBC">Christian OBC</option>
                                                            <option value="Hindu OBC">Hindu OBC</option>
                                                            <option value="SC">SC</option>
                                                            <option value="ST">ST</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
    
    
    
                                            </div> -->
                                        <!--    <div class="step" id="step2">
                                                <ul class="steps">
                                                    <li>
                                                        Step 1
                                                        <span>Basic Information</span>
                                                    </li>
                                                    <li class="active">
                                                        Step 2
                                                        <span>Contact Information</span>
                                                    </li>
                                                    <li>
                                                        Step 3
                                                        <span>Security Information</span>
                                                    </li>
                                                </ul>
                                                <div class="control-group">
                                                    <label for="txt_father" class="control-label">Name Of Father/Guardian</label>
                                                    <div class="controls">
                                                        <input type="text" name="txt_father" id="txt_father" class="required span6 input-square ">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="txt_father_occupation" class="control-label">Occupation Of Father/Guardian</label>
                                                    <div class="controls">
                                                        <input type="text" name="txt_father_occupation" id="txt_father_occupation" class="required span6 input-square ">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="txt_communication_address" class="control-label">Communication Address</label>
                                                    <div class="controls">
                                                        <textarea name="txt_communication_address" id="txt_communication_address" class="required input-square span9 " rows="6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <label class="checkbox "><input type="checkbox" name="check_same_address" id="check_same_address"> Same As Above</label>
    
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="txt_present_address" class="control-label">Present Address</label>
                                                    <div class="controls">
                                                        <textarea name="txt_present_address" id="txt_present_address" class="required input-square span9 " rows="6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="txt_telephone" class="control-label">Telephone</label>
                                                    <div class="controls">
                                                        <input type="text" name="txt_telephone" id="txt_telephone" class="mask_phone ">
                                                        <p class="help-block">
                                                            (494) 258-1218
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="txt_mobile" class="control-label">Mobile</label>
                                                    <div class="controls">
                                                        <input type="text" name="txt_mobile" id="txt_mobile" class="required mask_phone">
                                                        <p class="help-block">
                                                            (999) 999-9999
                                                        </p>
                                                    </div>
                                                </div>
    
    
    
                                            </div> -->
                                        <div class="step" id="step3">
                                            <ul class="steps">
                                                <li>
                                                    Step 1
                                                    <span>Basic Information</span>
                                                </li>
                                                <li>
                                                    Step 2
                                                    <span>Contact Information</span>
                                                </li>
                                                <li class="active">
                                                    Step 3
                                                    <span>Security Information</span>
                                                </li>
                                            </ul>

                                            <div class="control-group">
                                                <label for="txt_email" class="control-label">Email ID</label>
                                                <div class="controls">
                                                    <input type="text" name="txt_email" id="txt_email" class="email required ui-wizard-content ui-helper-reset ui-state-default">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="txt_user" class="control-label">User ID</label>
                                                <div class="controls">
                                                    <input type="text" name="txt_user" id="txt_user" class="required span6 input-square ">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="txt_passcode" class="control-label">Passcode</label>
                                                <div class="controls">
                                                    <input type="password" name="txt_passcode" id="txt_passcode" class="required valid">
                                                    <label for="txt_passcode" generated="true" class="error valid"></label></div>
                                            </div>
                                            <div class="control-group">
                                                <label for="txt_passcode_repeat" class="control-label">Repeat Passcode</label>
                                                <div class="controls">
                                                    <input type="password" name="txt_passcode_repeat" id="txt_passcode_repeat" class="required" equalto="#txt_passcode">
                                                    <p class="help-block">Must match Passcode</p>
                                                    <label for="txt_passcode_repeat" generated="true" class="error">Please enter the same value again.</label></div>

                                            </div>
                                            <div class="control-group">
                                                <label for="file_photo" class="control-label">Photograph</label>
                                                <div class="controls">
                                                    <div class="uploader" id="file_photo_uploader"><input type="file" name="file_photo" id="file_photo" class="uniform" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <label class="checkbox"><input type="checkbox" name="check_agree" id="check_agree" class="required"> I Agree</label>

                                                </div>
                                            </div>

                                        </div> 
                                        <div id="navigation2">
                                            <div class="form-actions">
                                                <input class="navigation_button btn btn-primary" id="next2" value="Submit" type="submit" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>	
            </div>
        </div>	
        <script src="js/jquery.js"></script>
        <script src="js/less.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.uniform.min.js"></script>
        <script src="js/bootstrap.timepicker.js"></script>
        <script src="js/bootstrap.datepicker.js"></script>
        <script src="js/chosen.jquery.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/plupload/plupload.full.js"></script>
        <script src="js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
        <script src="js/jquery.cleditor.min.js"></script>
        <script src="js/jquery.inputmask.min.js"></script>
        <script src="js/jquery.tagsinput.min.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/jquery.textareaCounter.plugin.js"></script>
        <script src="js/ui.spinner.js"></script>
        <script src="js/jquery.jgrowl_minimized.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/bbq.js"></script>
        <script src="js/jquery-ui-1.8.22.custom.min.js"></script>
        <script src="js/jquery.form.wizard-min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/jquery.metadata.js"></script>
        <script src="js/custom.js"></script><script src="js/demo.js"></script>
    </body>

    <!-- Mirrored from www.eakroko.de/neat/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:20 GMT -->
</html>