<?php
include("head.php");
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Women's institute of technology</title>

    <style>
        .menu {
            max-height: 70px;
        }

        .mainbody {
            height: 500px;
        }

        .contentbox {
            width: 70%;
            height: 480px;
            float: left;
            overflow-y: scroll;
        }

        .contentbox p {
            font-size: 25px;
            text-align: justify;
         margin-right: 10px;
        }

        #img1 {
            float: left;
            border-style: double;
            margin: 10px;
            width: 200px;
            height: 200px;
        }

        .noticebox {
            width: 30%;
            height: 480px;
            float: left;
            overflow-y: scroll;
        }

        #aboutp {
            margin-right: inherit;
            text-align: justify;
            font-style: Arial;
            font-size: 20px;
        }
        #link{
            color:red;
        }
    </style>
</head>

<body>
    
    <!-- main box start from here -->
    <div class="mainbody">
        <div class="contentbox">

            <img id="img1" src="dir.jpg" alt="Director sir" style=" width:170;height:120;margin-right:15px;"></img>
            <div id="aboutp">
                <p><b>O</b>ur Honorable founder has dedicated this institute to empower technical education of the
                    country to achieve quality education imbibed with technical, professional and ethical values.
                    At Women institute of technology, Darbhanga, we provide BTech in several branches
                    i.e.Computer Science & Engg , Information technology and Biometric Information. Institute has
                    been provided with qualified and experienced teaching faculty, well equipped laboratories, spacious
                    library, playgrounds and all other needful infrastructural facilities. Our continuous and constant
                    striving to provide finest teaching-learning environment is yielding excellent results in the
                    examinations
                    and in turn those students are performing well in examinations of real life also. We are in the
                    pursuit of
                    global standards of excellence in all our endeavors and we aim at creating all rounded personality
                    in our students
                    �professionally and socially. The campus is of 25acres area with well-advanced infrastructure and
                    eco-friendly surroundings.
                    WIT is a premier facility for girls to produce more educated girls to empower the nation and add
                    more values. I welcome the student community to this Institute, join
                    them and avail an opportunity to have a meaningful career and become responsible and respectable
                    citizens of modern India.</p>
            </div>
        </div>

        <div class="noticebox">
            
            <center>
                    <h1 id="link"><u>Important Links</u></h1></center>
            <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll"
                scrolldelay="5">
                <center>
                    <a href="detailed.pdf">
                        <h3>Detailed Instructions (Admissions 2023)</h3>
                    </a>
                    <a href="form.pdf">
                        <h3>Application Form (Admissions 2023)</h3>
                    </a>
                    <a href="cat.jpg">
                        <h3>CAT 2023</h3>
                    </a>
                    <a href="cat.pdf">
                        <h3>CAT Result 2023</h3>
                    </a>
                    <a href="cat in.pdf">
                        <h3>CAT Result Information</h3>
                    </a>
                </center>
            </marquee>
        </div>
    </div>
</body>

</html>

<?php
include("footer.php");
?>