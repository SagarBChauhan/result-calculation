<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                padding: 0;
                margin: 0;
                color: white;
                background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('1 (88).jpg') ;
                background-size: cover;
            }
            input,textArea{
                margin: 2px;
                padding: 10px;
                border-radius: 2px 10px;
                border: none;
            }
            input:focus,textArea:focus{
                border-radius: 2px 10px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
            }
            input:hover,textArea:hover{
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
            }
            input[type=submit]{
                margin: 2px;
                padding: 10px;
                border-radius: 10px 10px;
                border: none;
                width: 100px;
            }
            input[type=submit]:hover{
                background-color: royalblue;
                color: white;
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
                transition: 0.5s ;
            }
            input[type=reset]{
                margin: 2px;
                padding: 10px;
                border-radius: 10px 10px;
                border: none;
                width: 100px;
            }
            input[type=reset]:hover{
                background-color: red;
                color: white;
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px red, 0 0 25px red, 0 0 5px white;
                transition: 0.5s ;
            }
            h1{
                margin: 0;
                font-size:70px;
                background-color: royalblue;
                color: white;
                padding: 20px;
                padding-bottom: 70px;
            }
            header{
                padding-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Result Builder</h1>
        </header>
        <form action="Result.php" method="POST" enctype="multipart/form-data">
            <center>
                <table  border="0" cellpadding-left='20px'>
                <tbody>
                    <tr>                                            
                        <td>Enrollment no:</td>
                        <td><input type="number" maxlength="15" name="en" value="" placeholder="enter Enrollment number" title="student's ENrollment number?"/></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="" placeholder="enter full name" title="student's full name?"/></td>
                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td>
                            <textarea name="address" rows="4" cols="20" placeholder="Enter Adderess" title="where do you live?" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table border="0">
                                <thead>
                                    <tr>
                                        <th>Subject</th>    
                                        <th>Marks</th>
                                        <th>/ Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Advance Java:</td>
                                        <td><input type="text" name="m1" maxlength="3" placeholder="enter marks"  title="marks out of 100" /> </td>
                                        <td>/ 100</td>
                                    </tr>
                                    <tr>
                                        <td>Python:</td>
                                        <td><input type="text" name="m2" maxlength="3" placeholder="enter marks"  title="marks out of 100" /></td>
                                        <td>/ 100</td>
                                    </tr>
                                    <tr>
                                        <td>Web Development using MVC:</td>
                                        <td><input type="text" name="m3" maxlength="3" placeholder="enter marks"  title="marks out of 100" /></td>
                                        <td>/ 100</td>
                                    </tr>
                                    <tr>
                                        <td>Multimedia:</td>
                                        <td><input type="text" name="m4" maxlength="3" placeholder="enter marks"  title="marks out of 100" /></td>
                                        <td>/ 100</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Graphics:</td>
                                        <td><input type="text" name="m5" maxlength="3" placeholder="enter marks"  title="marks out of 100" /> </td>
                                        <td>/ 100</td>
                                    </tr>
                                </tbody>
                            </table>

                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="submit" name="submit" />
            <input type="reset" value="reset" name="reset" />
            </center>
        </form>
        <?php
        ?>
    </body>
</html>
