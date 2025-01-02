<?php
include("head.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
     .menu{
      max-height: 70px;
    }
    .mainbody{
      height: 500px;
    }
    .contentbox{
      width: 70%;
      height: 480px;
      float: left;
      overflow-y: scroll;
    }
    .contentbox p{
      size: 12px;

    }

    .noticebox{
      width: 30%;
      height: 480px;
      float: left;
      overflow-y:scroll;
    }
    </style>
</head>

<body>

    <body>
        <div class="mainbody">
            <div class="contentbox">
                <img src="con2.jpg" width="100%" height="250px">
                <center>
                    <h1 style="color:dark-blue;"><u>ADDRESS</u></h1>
                    <h3 style="color:dark-blue;"><i>Women's Institute of Technology<br>Kameshwar Nagar<br>Dist. -
                            Darbhanga, State - Bihar<br>Phone No : 06272 246 579</i></h3>
                </center>
            </div>
            <div class="noticebox">
                <img src="enq.jpg" width="100%" height="250px">
                <form action="mailto:kaushakikumari262@gmail.com" method="post" enctype="text/plain">
                    <table>
                        <tr>
                            <td>
                                <label for="First_name"> <b>First Name</b></label>
                            </td>
                            <td>
                                *<input type="text" name="First_name" maxlength="50" size="30" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="last_name"><b> Last Name</b> </label>
                            </td>
                            <td>
                                *<input type="text" name="last_name" maxlength="50" size="30" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="Email"><b>Email ID</b></label>
                            </td>
                            <td>
                                *<input type="text" name="Email" maxlength="80" size="30" pattern="[a-z0-9]+@+[a-z]+.com"
                                    required="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="telephone"><b>Mobile No</b> </label>
                            </td>
                            <td>
                                *<input type="text" name="telephone" maxlength="30" size="30" pattern="[0-9]{10}"
                                    required="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="message"><b>Message</b></label>
                            </td>
                            <td>
                                &nbsp;      <textarea name="message" maxlength="1000" cols="29" rows="5" required=""></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="text-align:center">
                                <input id="button1" type="submit" value="Send">
                                <input id="button1" type="reset" value="Cancel">
                    </table>
                </form>
            </div>
        </div>
    </body>

</html>

<?php
include("footer.php");
?>