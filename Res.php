<?php
include("head.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIT Darbhanga</title>
    <style>
        .rese {
            background: rgb(223, 223, 233);
        }

        .menu {
            max-height: 70px;
        }

        .mainbody {
            height: 500px;
        }

        .contentbox {
            width: 100%;
            height: 100%;
            float: left;

        }

        .contentbox p {
            size: 12px;

        }

        #res {
            background: rgb(16, 5, 56);
        }

        .parag {
            margin-left: 20px;
            margin-right: 10px;
            text-align: justify;
            font-size: 25px;
            font-weight: 200;
            word-spacing: 22px;
            margin-top: 10px;
        }

        #fee {
            font-size: 20px;
            text-align: justify;
            padding-left: 50px;
            padding-right: 20px;

        }

        .table {
            text-align: center;
        }
    </style>
</head>

<body class="rese">
    <div class="mainbody">
        <div class="parag">
            <center>
                <table border="5" width="80%">
                    <tr>
                        <th colspan="2" id="res">
                            <font color="white">Reservation of Seat</font>
                        </th>
                    </tr>

                    <tr>
                        <td align="center">EWS</td>
                        <td align="center">10%</td>
                    </tr>

                    <tr>
                        <td align="center">Backward Class(BC)</td>
                        <td align="center">15%</td>
                    </tr>

                    <tr>

                        <td align="center">Extremely Backward Class(EBC)</td>
                        <td align="center">18%</td>
                    </tr>

                    <tr>

                        <td align="center">Schedule Caste(SC)</td>
                        <td align="center">16%</td>
                    </tr>

                    <tr>

                        <td align="center">Schedule Tribes(ST)</td>
                        <th align="center">01%</th>
                    </tr>


                </table>
            </center>

            <ul>
                <li>
                    10% seats are reserved under NRI/Payment quota seats. 5% of seats are reserved for wards of
                    permanent
                    employees of Lalit Narayan Mithila University, Darbhanga (wife or unmarried daughter), Ward
                    Certificate from Employer
                    and affidavit of the employee must be enclosed with Application Form.</li><br>

                <li>Candidates belonging to reserved category and selected under General category will
                    not be treated/ counted under reserved quota.</li>
            </ul>
</body>

</html>

<?php
include("footer.php");
?>