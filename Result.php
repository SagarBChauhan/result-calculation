<style>
    .tb{
        padding: 20px;
        box-shadow:10px 10px 70px 5px gray ;
    }
    .tb:hover{
        box-shadow:10px 10px 70px 5px gray ;
         box-shadow: 1px 1px 20px black, 0 0 75px greenyellow, 0 0 5px gold;
         transition: 0.5s ;
    }
    input{
        background-color: royalblue;
        color: white;
        height:5%;
        width: 10%;
        border-radius: 20px 20px;
        border: none;
        box-shadow:10px 10px 70px 5px gray ;
        font-size: 20px;
    }
    input:hover{
        border-bottom: white;
        box-shadow: 1px 1px 20px black, 0 0 75px greenyellow, 0 0 5px gold;
        transition: 0.5s ;
    }
    @media print
    {
    body * { visibility: hidden; }
    #Res_Print * { visibility: visible; }
    #Res_Print { position: absolute; top: 40px; left: 30px; }
    }
    .pt:hover{
        
        background-color: red;
        padding-right:   10px;
        visibility: hidden;
        transition: 0.7s ;
    }
    
</style>
<?php
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$total=$_POST['m1']+$_POST['m2']+$_POST['m3']+$_POST['m4']+$_POST['m5'];

$per=$total*100/500;
?>
<?php
echo"<center><div id=Res_Print><table class='tb' width=50%  border='10' >   
<thead>
    <th>
        <table width='100%'>
            <thead>
                <th><img src='UTU copy.png' width=90px height=100px alt='UTU copy'/></th>
                <th><h1 style='padding-top:20px;'>UKA TARSADIA UNIVERSITY</h1></th>
                <th><img src='UTU copy.png' width=90px height=100px alt='UTU copy'/></th>
            </thead>
        </table>
    </th>
</thead>
<tbody>
<tr>
    <td colspan=2 >
        <table cellpadding=10>
            <tr >
            <td ><b>Enrollment NO:</b></td>
            <td>",$_POST['en'],"</td>
            </tr>
            <tr>
            <td><b>Name:</b></td>
            <td>",$_POST['name'],"</td>
            </tr>
            <tr>
            <td><b>Address:</b></td>
            <td>",$_POST['address'],"</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td colspan='2'>
        <table border='1' width='100%' cellpadding=10>
            <thead>
                <tr>
                    <th>Subject Name</th>
                    <th>Obtain Marks</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Advance Java:</td>
                    <td>$m1</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Python:</td>
                    <td>$m2</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Web Development using MVC:</td>
                    <td>$m3</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Multimedia:</td>
                    <td>$m4</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Computer Graphics:</td>
                    <td>$m5</td>
                    <td>100</td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td colspan=2>
        <table cellpadding=10 >
            <tr>
            <td><b>Total:</b></td>
            <td>$total</td>
            </tr>
            <tr>
            <td><b>Percentage:</b></td>
            <td>$per</td>
            </tr>
        </table>
    </td>
</tr>
</tbody>
</table><div><input class='pt' style='margin-top:30px;' onclick='window.print()' type='button' name='print' value='Print'/></center>";
?>
