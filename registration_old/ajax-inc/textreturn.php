<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if ($_GET['text']) :
    //echo 'Returned Text :'.$_GET['text'];
    if ($_GET['text'] == 'Student') {
        echo '<table align="center" cellpadding="8" cellspacing="10" width="800" id="rtable">
                 <tr>
                            <td><font face="Times New Roman"  size="+1"><strong>Qualification</strong></font></td>
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
                    </table>';
    } else {
        echo '<table align="center" cellpadding="8" cellspacing="10" width="800" id="rtable">
                <tr>
                            <td><font face="Times New Roman"  size="+1"><strong>Qualification</strong></font></td>
                            <td>
                                <select id="qualification">
                                    <option>Higher Secondary</option>
                                    
                                    <option>Diploma</option>
                                    <option>Graduation</option>
                                    <option>Post Graduation</option>
                                    <option>Others</option>
                                </select>
                            </td>
                        </tr>
           <tr> 
                            <td><font face="Times New Roman"  size="+1"><strong>Specify...</strong></font></td>
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
                    </table>';
    } 
       
    endif;
