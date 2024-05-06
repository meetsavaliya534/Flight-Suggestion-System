<?php include('flightdb.php') ?>
<?php include('loginvalid.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	 <?php
         search();
         function search(){
         if(isset($_POST['Search'])){ ?>

                      <?php
                      $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");

                      $Flight_name= mysqli_real_escape_string($db,$_POST['Flight_name']);
                      $Departure= mysqli_real_escape_string($db,$_POST['From']);
                      $Arrival= mysqli_real_escape_string($db,$_POST['To']);
                      if(isset($_POST['Day'])){
                          $Day_ID= mysqli_real_escape_string($db,$_POST['Day']);
                      }
                      else{
                        $Day_ID="";

                    }
                      $result=mysqli_query($db,"SELECT F.Flight_name,T.Departure,T.Travel_code,T.video,T.Arrival,C.Departure_time,C.Arrival_time,C.Time_ID,D.Day,D.Day_ID,cp.Price
                              FROM flight_info F , travel_info T,time C,day_info D, cprice_info cp  WHERE F.Flight_name
                              LIKE '%$Flight_name%' AND T.Departure LIKE '%$Departure%' AND D.Day_ID LIKE '%$Day_ID%' AND T.Arrival LIKE '%$Arrival%' AND
                              F.Flight_ID=T.Flight_ID AND C.Travel_code=T.Travel_code AND D.Day_ID=C.Day_ID AND
                              cp.Travel_code=T.Travel_code AND cp.Cno=1");
                      $bresult=mysqli_query($db,"SELECT F.Flight_name,T.Departure,T.Travel_code,T.Arrival,C.Departure_time,C.Arrival_time,C.Time_ID,D.Day,D.Day_ID,cp.Price
                              FROM flight_info F , travel_info T,time C,day_info D, cprice_info cp  WHERE F.Flight_name
                              LIKE '%$Flight_name%' AND T.Departure LIKE '%$Departure%' AND D.Day_ID LIKE '%$Day_ID%' AND T.Arrival LIKE '%$Arrival%' AND
                              F.Flight_ID=T.Flight_ID AND C.Travel_code=T.Travel_code AND D.Day_ID=C.Day_ID AND
                              cp.Travel_code=T.Travel_code AND cp.Cno=2");
                      $fresult=mysqli_query($db,"SELECT F.Flight_name,T.Departure,T.Travel_code,T.Arrival,C.Departure_time,C.Arrival_time,C.Time_ID,D.Day,D.Day_ID,cp.Price
                              FROM flight_info F , travel_info T,time C,day_info D, cprice_info cp  WHERE F.Flight_name
                              LIKE '%$Flight_name%' AND T.Departure LIKE '%$Departure%' AND D.Day_ID LIKE '%$Day_ID%' AND T.Arrival LIKE '%$Arrival%' AND
                              F.Flight_ID=T.Flight_ID AND C.Travel_code=T.Travel_code AND D.Day_ID=C.Day_ID AND
                              cp.Travel_code=T.Travel_code AND cp.Cno=3");


                      $count=mysqli_num_rows($result);
                      if($count==0){?>
                      <?php
     }
                      else{
                      ?>
                        <?php if( $count==1): ?>  1 Flight is available.
                        <?php else:?>
                          <?php echo $count; ?> Flights are available.
                        <?php endif ?>
                      <?php
                      while($row=mysqli_fetch_assoc($result) and $brow=mysqli_fetch_assoc($bresult) and $frow=mysqli_fetch_assoc($fresult)){ ?>


                      <?php
                      }
                    }
                  }
                      ?>
      <?php } ?>
<video width="320" height="240" controls>
  <source src="video/<?php echo $row['video']; ?>" type="video/mp4">
</video>
</body>
</html>