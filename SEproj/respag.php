<html>
<head>
  <title> Search Data by Email </title>
  <style>

  body{
    background: gold;
  }
  table,th,td{
    border: 2px solid black;
    width: 1100px;
    background-color: gold;
  }
  .btn{
    width: 10%;
    height: 5%;
    font-size: 22px;
    padding: 0px;
  }

  </style>
</head>
<body>
  <center>
    <div class="container">
      <form action="" method="POST">
        <input type="text" name="email" placeholder="Enter Email"/>
        <input type="submit" name="search" value=" Search by Email">
      </form>
      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Check IN Date</th>
          <th>Check OUT Date</th>
          <th>Guest</th>
          <th>Children</th>
          <th>Bed Size</th>
          <th>Breakfast</th>
          <th>Message</th>
          <th>Delete</th>

        </tr><br>
        <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,'demo');

        if (isset($_POST['search']))
        {
          $email = $_POST['email'];

          $query = "SELECT * FROM `nametable2` where email='$email' ";
          $query_run = mysqli_query($connection,$query);


          while($row = mysqli_fetch_array($query_run))
          {
            ?>
            <tr>
              <td> <?php echo $row['name'];?></td>
              <td> <?php echo $row['email'];?></td>
              <td> <?php echo $row['cidate'];?></td>
              <td> <?php echo $row['codate'];?></td>
              <td> <?php echo $row['guest'];?></td>
              <td> <?php echo $row['children'];?></td>
              <td> <?php echo $row['bed'];?></td>
              <td> <?php echo $row['breakfast'];?></td>
              <td> <?php echo $row['message'];?></td>
              <td> <input type="submit" name="delete" value="Delete"></td>
            </tr>

            <?php
          }
        }
        if (isset($_POST['delete']))
        {
          $email = $_POST['email'];
          $delquery = "DELETE FROM `nametable2` WHERE email='$_POST(hidden)'  ";
          $query_run = mysqli_query($connection,$delquery);
        }
        ?>

      </table>
    </div>
  </center>
</body>
</html>
