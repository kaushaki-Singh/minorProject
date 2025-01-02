
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>header</title>


  <style>
    #dr {
      color: rgb(14, 21, 89);
      text-align: center;
    }
    h1{
      font-size:35px;
    }
     #ig{
      margin: 5px;
      margin-left: 30px;
     }
    .dr1 {
      font-size: 20px;
      font-weight: bold;
    }

    .name {
      background-color: rgb(232, 232, 232);
    }

    body {
      background-size: cover;
      background-position: center;
    }

    .menu-bar {
      background: rgb(16, 5, 56);
      text-align: center;
    }

    .menu-bar ul {
      display: inline-flex;
      list-style: none;
      color: #fff;
    }

    .menu-bar ul li {
     
      width:145px;

margin-right: 2rem;
padding:10px;
      
    }

    .menu-bar ul li a {
      text-decoration: none;
      color: #fff;
    }

    .active,
    .menu-bar ul li:hover {
      background: gray;
      border-radius: 5px;
    }

    .menu-bar .fa {
      margin-right: 8px;
    }

    .sub-menu-1 {
      display: none;
    }

    .menu-bar ul li:hover .sub-menu-1 {
      display: block;
      position: absolute;
      background:rgb(16, 5, 56);
      margin-top: 5px;
      margin-left: -15px;
    }

    .menu-bar ul li:hover .sub-menu-1 ul {
      display: block;
      margin: 10px;
    }

    .menu-bar ul li:hover .sub-menu-1 ul li a:hover {
      color: #b2ff00;

    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <table border="0" width="100%" cellspacing="0" class="name">
    <tr>
      <td><img src="wit.png " id="ig"/></td>
      <td width="50%">
        <h1 id="dr">Dr. APJ Abdul Kalam Women's Institute Of Technology</h1>
        <p id="dr" class="dr1">A unit of Lalit Narayan mithila university , Darbhanga<br>(Under Self finance Mode)(AICTE PID
          :1-16977553)</p>
      </td>

      <td><img src="lnmu.png" id="ig"/></td>
    </tr>
  </table>



  <table border="0" width="100%" cellspacing="0">
    <tr>
      <td class="menu-bar">
        <ul>
          <li class="active"><a href='index.php'><i class="fa fa-home"></i> HOME</a></li>
          <li><a href='institute.php'><i class="fa fa-university"></i> Institute</a>
            <div class="sub-menu-1">
              <ul>
                <li><a href="about1.php">About Us</a></li>
                <li><a href='Anti.php'>Anti Ragging</a></li>
              </ul>
            </div>
          </li>
            </div>
          </li>
          <li><a href='form.pdf'><i class="fa fa-graduation-cap"></i>Admission</a>
            <div class="sub-menu-1">
              <ul>
              <li><a href='Reg.php'>Students Details</a></li>
              <li><a href='course.php'>Academic Pragramme</a></li>
                <li><a href='fee.php'>Fee Structure</a></li>
                <li><a href='Res.php'>Reservation</a></li>
              </ul>
            </div>
          </li>
          <li><a href='#'><i class="fa fa-laptop"></i>Facilities</a>
            <div class="sub-menu-1">
              <ul>
                <li><a href='hstl.php'>Hostels</a></li>
                <li><a href='wi.php'>WIFI</a></li>
                <li><a href='card.php'>Student credit card</a></li>
                <li><a href='reading.php'>Reading room</a></li>
              </ul>
          <li><a href='Gallery.php'><i class="fa fa-picture-o"></i>Gallery</a></li>
          <li><a href='contact.php'><i class="fa fa-phone"></i>Contact Us</a></li>

        </ul>
      </td>
    </tr>
  </table>
</body>
</html>