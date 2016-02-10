<html>
<html lang="en">

<head>
  <title>Hey Taxi!</title>
 
   <link type="text/css" href="stylesheet.css" rel="stylesheet"/>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="roundedhtx.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="sticky-footer.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>

<body>


  <div class="container" id="container">
    
    <ul class="nav nav-pills nav-justified">
      <li><a data-toggle="tab" href="#tab1">Home</a></li>
      <li><a data-toggle="tab" href="#tab2">Our Mission</a></li>
      <li><a data-toggle="tab" href="#tab3">Who we work with</a></li>
      <li><a data-toggle="tab" href="#tab4">Who are we?</a></li>
      <li><a data-toggle="tab" href="#tab5">Frequently asked questions</a></li>
      <li><a data-toggle="tab" href="#tab6">Legal Information</a></li>
    </ul>

    <div class="tab-content">
    
      <div id="tab1" class="tab-pane fade in active">
        <center>
        <img src="roundedhtx.png" alt="heytaxip" height="380px" width="380px">
        <h1>The Fastest way to get a Taxi!</h1>
        <br>
        <a href="https://itunes.apple.com/"><img src="appstore.jpg" alt="apps"></a>
        <a href="https://play.google.com/"><img src="playstore.png" alt="plays" height="50px" width="135px"></a>

        <br>
        </center>
      </div>
      
      <div id="tab2" class="tab-pane fade">
        <h2>Our reasoning behind the development of Hey Taxi</h1>
          <br>
        <p>
          Transportation has and always will be one of the most important necessities within our lives. 
          People every day are struggling to find ways to get from point A to point B without walking or 
          purchasing their own vehicle. In the past several decades, most of us looked to taxis as the 
          primary source of transportation, however, in today’s world the process of hailing a taxi is 
          becoming arduous and seems like a waste of time compared to alternatives. Why try to deal with 
          communicating with a taxi driver after having waited so long to grab one either by having to 
          wave one down or call an entire company just so that they can tell you that they are already 
          busy with other pickups?
            <br>
            <br>
          These concerns are very widely shared by a good majority of the population. This has led to 
          disastrous falls in revenue for companies around the nation. For example, in New York City 
          alone the average price of one of the city’s 13,771 taxi licenses has fallen from an average 
          of $1 million in the summer of 2014 to less than $700,000 in the summer of 2015, equating to 
          an aggregate loss of around $4 billion in value (Economist). People don’t seem to want to deal 
          with all of the hassle that comes with actually getting a ride from a taxi company when many 
          applications are now available such as Uber and Lyft that make the pain of getting a ride much 
          easier. As time passes, taxi companies will only continue to dwindle as there is not much helping 
          out their cause. These companies simply will not be able to find clients when they are losing 
          out to the modern crowd of incoming companies that make finding a driver so easy. 
            <br>
            <br>
          However, even with this adversity that Taxi companies seem to be facing, there may be a silver 
          lining within the policies of the incoming easy ride companies. These incoming companies do not 
          have the regulations and structure that modern cab companies possess. Taxi companies interview 
          and set preferences for who they want to hire, making sure that they obtain the right drivers for 
          the job, while these newer forms of transportation companies only ask that drivers have a car 
          newer than a certain year. Not only do drivers lack necessary credentials, they also have to drive 
          their own personal vehicles that they themselves have to maintain. All this can lead to some very 
          unfortunate events that may just put some people into unwanted and maybe even dangerous circumstances. 
        </p>

      </div>
      
      <div id="tab3" class="tab-pane fade">
        <center>
        
            <?php

            $conn = new mysqli("localhost", "root", "", "records");
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $result = $conn->query("SELECT * FROM customers");
          ?>

          <table>

            <tr id="heading">
                <th>Company Name</th>
                <th>Phone Number</th>
                <th>City</th>
            </tr>

            <?php
                $output = '';
                $i = 0;
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                  $class = ($i == 0) ? "" : "alt";
                  echo "<tr class=\"".$class."\">";
                  echo "<td>".$row['companyName']."</td>";
                  echo "<td>".$row['phoneNumber']."</td>";
                  echo "<td>".$row['city']."</td>";
                  echo "</tr>";
                  $i = ($i==0) ? 1:0;
                }

                $conn->close();
                echo($output);
            ?>
          </table>
        </center>
      </div>

      <div id="tab4" class="tab-pane fade">
        <center>
        <h3>About Us</h3>
        </center>
        <img src="melvin.jpg" style="width:300px; height:300px; position:absolute; TOP:35px; LEFT:170px;">
        
        <img src="peter.jpg" style="width:300px; height:300px; position:absolute; TOP:345px; LEFT:170px;">

        <img src="briana.jpg" style="width:300px; height:300px; position:absolute; TOP:655px; LEFT:170px;">
        
        <img src="samy.jpeg" style="width:300px; height:300px; position:absolute; TOP:965px; LEFT:170px;">
        
        
      </div>

      <div id="tab5" class="tab-pane fade">
        <center>
        <h2>Commonly Asked Questions</h2>
        <p>Q: How do you plan to get taxi companies to actually work with you?</p>
        <p>A: By showing them the advantages the application provides.</p>
        <p>Q: How long have you been working on the application?</p>
        <p>A: The idea for this creating this particular application first started in September of 2015</p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>

        
        </center>
      </div>

      <div id="tab6" class="tab-pane fade">
        <p>
          
        </p>

      </div>

    </div>

  </div>

  <footer class="footer">
      <div class="container">

        <img src="roundedhtx.png" alt="heytaxip" height="20px" width="20px">
      </div>
  </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>
