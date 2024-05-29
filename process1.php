<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Travel Reservation Information</title>
    <style>
        table {
            border-style: outset;
            border-width: 10px;
            border-color: white;
        }
    </style>
</head>

<body>
    <?php				
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $destination = $_POST['destination'];
        $departure_date = $_POST['departure_date'];
        $departure_time = $_POST['departure_time'];
        $num_person = $_POST['num_person'];
        $services = $_POST['services'];
        $coupon = $_POST['coupon'];
        $terms = $_POST['terms'];
    ?>

<h1 align="center">Travel Reservation Information</h1>
<h2 align="center"><?php echo "<i><b><font color='Blue'>Hi, ".strtoupper($fullname)."</font></b></i>"; ?> </h2>
        <table width="40%" align="center">
          <tr>
            <td colspan="3">Your recorded information as follow:</td>
          </tr>
         <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td>Phone number </td>
            <td>:</td>
            <td><?php echo $phone ?></td>
          </tr>
          <tr>
            <td>Email address </td>
            <td>:</td>
            <td><?php echo $email?></td>
          </tr>
          <tr>
            <td>Destination </td>
            <td>:</td>
            <td><?php echo $destination ?></td>
          </tr>
          <tr>
            <td>Departure date </td>
            <td>:</td>
            <td><?php echo $departure_date?></td>
          </tr>
          <tr>
            <td>Departure time</td>
            <td>:</td>
            <td><?php echo $departure_time?></td>
          </tr>
          <tr>
            <td>Number of person</td>
            <td>:</td>
            <td><?php echo $num_person?></td>
          </tr>
          <tr>
            <td>Available seat</td>
            <td>:</td>
            <td><?php foreach($services as $value){
			  echo $value ."<br>";}
			?></td>
          </tr>
          <tr>
            <td>Discount</td>
            <td>:</td>
            <td><?php if ($coupon == 'FlyTogether')
				echo "<font color='green'><b> Correct coupon code, you get 20% discount!</b></font>";
			 else
				echo "<font color='red'><b> Sorry the coupon code is invalid!</b></font>";
				?></td>
          </tr>
          <tr>
            <td>Registration Succesfully</td>
            <td>:</td>
            <td><?php echo $terms?></td>
          </tr>
        </table>
</body>

</html>