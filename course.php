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
        .menu {
            max-height: 70px;
        }

        .mainbody {
            height: 300px;
        }

        .contentbox {
            width: 50%;
            height: 200px;
            float: left;
        }
.box{
    width: 100%;
            height: 200px;
            float: left;
}
        #cour {
            color: rgb(107, 16, 16);
        }

        #pr {
            color: black;
            font-size: 15px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="mainbody">
        <div class="contentbox">
            <h1 id="cour"> <i class="fa fa-laptop"></i>Computer Science & Engineering </h1>
            <u>
                <h2>No.of Seats::60</h2>
            </u>
            <b>
                <p>Duration of course - 4 Years (Eight Semester)</p>
            </b>
            <p>Eligibility - 10+2 or equivalent with minimum 45% marks (40% for reserved category)
                in P+C+M / P+C+B+M taken together and pass in English.</p>
            <p id="pr">Computer Science Engineering (CSE) is an academic programme that integrates the field of
                Computer Engineering and Computer Science.<br><br> It is one of the most sought-after courses among
                engineering students. </p>
        </div>
        <div class="contentbox">
            <h1 id="cour"><i class="fa fa-laptop"></i>Information Technology </h1>
            <u>
                <h2>No.of Seats::30</h2>
            </u>
            <b><p >Duration of course - 4 Years (Eight Semester)</p></b>
            <p id="pr">Eligibility - 10+2 or equivalent with minimum 45% marks
                (40% for reserved category) in P+C+M / P+C+B+M taken together and pass in English.</p>
            <p id="pr">Information Technology (IT) is one of the most sought-after branches of Engineering,
                with this field being highly in demand and prestigious in the IT industry. </p>
        </div>
    </div>
   
    <center><div class="box">
        <h1 id="cour"><i class="fa fa-laptop"></i> Bioinformatics </h1>
        <u>
            <h2>No.of Seats::30</h2>
        </u>
        <b><p>Duration of course - 4 Years (Eight Semester)</p></b>
        <p id="pr">Eligibility - 10+2 or equivalent with minimum 45% marks
            (40% for reserved category) in P+C+M / P+C+B+M taken together and pass in English.</p>
        <p id="pr">Information Technology (IT) is one of the most sought-after branches of Engineering,
            with this field being highly in demand and prestigious in the IT industry. </p>
    </div></center>
</body>

</html>

<?php
include("footer.php");
?>