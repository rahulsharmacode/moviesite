<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home ¬ CRITICSMARK</title>
</head>
<body>

    <h1 id="logo"><a href="#">CRITICSMARK</a></h1>

    <div id="navigation">
        
        <ul>
          <li><a class="active" href="index.html">HOME</a></li>
          <li><a href="news.html">NEWS</a></li>
          <li><a href="#">IN THEATERS</a></li>
          <li><a href="#">COMING SOON</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#">ADVERTISE</a></li>
        </ul>
      </div>
      <div id="sub-navigation">
        <ul>
          <li><a href="#">SHOW ALL</a></li>
          <li><a href="#">LATEST TRAILERS</a></li>
          <li><a href="#">TOP RATED</a></li>
          <li><a href="#">MOST COMMENTED</a></li>
        </ul>
        <div id="search">
          <form action="#" method="get" accept-charset="utf-8">
            <label for="search-field">SEARCH</label>
            <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
            <input type="submit" value="GO!" class="search-button" />
          </form>
        </div>
      </div>

      <div class="viewmode">
      <iframe width="80%" height="315" src="https://www.youtube.com/embed/oc0x-jiewTE?controls=0"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<div id="frame">
    <img src="images/movie2.jpg"> 
    <h2>The Last Stand</h2>
    <p>Relese Date : 2020/10/09</p>
    
</div>
<div id="farmetext">
<h3>The Last Stand is a 2013 American action thriller film directed by South Korean film director Kim Jee-woon in his American directorial debut. The film stars Arnold Schwarzenegger, Johnny Knoxville, Forest Whitaker, Jaimie Alexander and Rodrigo Santoro and was written by Andrew Knauer. This was Arnold Schwarzenegger's first lead acting role since Terminator 3: Rise of the Machines in 2003. The film focuses on a tough small town sheriff and his deputies who must stop a dangerous drug lord from escaping to Mexico in a modified sports car.

    Filming took place in Belen, New Mexico and Nevada in late 2011. The film premiered on January 14, 2013, at Grauman's Chinese Theatre and was released on January 18, 2013, by Lionsgate, receiving mixed-to-positive reviews from critics and grossing $48.3 million worldwide against a $45 million budget.</h3>
</div>
<div id="details">
  <h2>Details</h2>
  <p> Directed by -	Kim Jee-woon <br>
    Produced by -	Lorenzo di Bonaventura <br>
    Written by -	Andrew Knauer <br> 
    Language - English </p>
</div>


</div>

<!-----------Poll Bar------------------->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
   
        <div class="pollbar">  
            <br />  
            <br />
   <br />
   <h2 align="center" >Movie Performance</h2><br />
   <div class="row">
    <div class="col-md-6">
     <form method="post" id="poll_form">
      <h3>How often would you recommend ?</h3>
      <br />
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="Good" /> Good</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="Almost" /> Almost</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="Worst" /> Worst</h4></label>
      </div>
      
      <br />
      <input type="submit" name="poll_button" id="poll_button" class="btn btn-primary" />
     </form>
     <br />
    </div>
    <div class="col-md-6">
     
    <br />
     <br />
     <h4>Live Poll Result</h4><br />
     <div id="poll_result"></div>
    </div>
   </div>
   
   
   <br />
   <br />
   <br />
  </div>

  


<!-----------Comment Section------------------->

<div class="comment">
<br><h1>Comments your thoughts</h1>
<form action="adddata.php" method="POST">
    <label for="uname"><b></b></label>
    <input type="text" placeholder="Enter Name" name="name" id="nam" required>
    
    <br>

    
    <input type="text" placeholder="Enter Comment" name="upass" id="comm" required>

    

    <br><input type="submit" value="Comment"  id="cmt">


    </form>
<table>
    <tr>
        <br><th><h1 align="center"><b>Comments Yet</b></h1></th>
</tr>


<?php 
include 'db.php';
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $user = $row['user'];
        $pass = $row['pass'];
        ?>
<tr>
<td id="commentbox"><?php echo "".$user ." - ".$pass  ?></td>

    </tr>

<?php

    }
}
?>
</table>



</div>

<div id="footer">
  <p class="lf">Copyright &copy; 2020 <a href="#">CRITICSMARK</a> - All Rights Reserved</p>
  <p class="rf">Design by <a href="http://rahulsharma.com.np/">at-rahul</a></p>
  <div style="clear:both;"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
$(function(){
  $('#cmt').click(function(){


    var nam = $('#nam').val();
    var comm = $('#comm').val();
    Swal.fire({
    'title': 'Comment Done',
    'text' : 'Nice Work',
    'type' : 'Success'
  }) 
  });
    //alert('hello');
    
}); 

</script>

<script src="java/java.js"></script>


<div id="footer">
  <p class="lf">Copyright &copy; 2020 <a href="#">CRITICSMARK</a> - All Rights Reserved</p>
  <p class="rf">Design by <a href="http://rahulsharma.com.np/">at-rahul</a></p>
  <div style="clear:both;"></div>
</div>

      </body>
      </html>