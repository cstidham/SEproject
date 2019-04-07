<?php
// https://www.techsupportnep.com/programming/php/how-to-insert-delete-update-and-search-data-in-mysql-database-using-php.html

$host = "localhost";
$user = "root";
$password ="";
$database = "demo";

$id = "";
$name = "";
$email = "";
$cidate = "";
$codate = "";
$guest = "";
$children = "";
$bed = "";
$breakfast = "";
$message = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['email'];
    $posts[3] = $_POST['cidate'];
    $posts[4] = $_POST['codate'];
    $posts[5] = $_POST['guest'];
    $posts[6] = $_POST['children'];
    $posts[7] = $_POST['bed'];
    $posts[8] = $_POST['breakfast'];
    $posts[9] = $_POST['message'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM `nametable2` WHERE `id` = $data[0]";

    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $name = $row['name'];
                $email= $row['email'];
                $cidate = $row['cidate'];
                $codate = $row['codate'];
                $guest = $row['guest'];
                $children = $row['children'];
                $bed = $row['bed'];
                $breakfast = $row['breakfast'];
                $message = $row['message'];

            }
        }else{
            echo 'No Data For This ID';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `nametable2`(`id`,`name`, `email`, `cidate`, `codate`, `guest`, `children`, `bed`, `breakfast`, `message`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);

        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `nametable2` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `nametable2` SET `name`=`$data[1]`,`email`=`$data[2]`,`cidate`='$data[3]',`codate`='$data[4]',`guest`='$data[5]',`children`='$data[6]',`bed`='$data[7]',`breakfast`='$data[8]',`message`='$data[9]' WHERE `id` = '$data[0]'";
    try{
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>


<!DOCTYPE Html>
<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
    </head>
    <body>
        <form action="respag1.php" method="post">
            <input type="number" name="id" placeholder="Search ID" value="<?php echo $id;?>"><br><br>
            <input type="text" name="name" placeholder="name" value="<?php echo $name;?>"><br><br>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>"><br><br>
            <input type="date" name="cidate" placeholder="Check IN Date" value="<?php echo $cidate;?>"><br><br>
            <input type="date" name="codate" placeholder="Check OUT Date" value="<?php echo $codate;?>"><br><br>
            <input type="number" name="guest" placeholder="# of Adults" value="<?php echo $guest;?>"><br><br>
            <input type="number" name="children" placeholder="# of $children" value="<?php echo $children;?>"><br><br>
                              <select name="bed">
                                        <option value="Villa">Villa [$200]</option>
                                        <option value="King Sweet">King Sweet [$150]</option>
                                        <option value="Quen Sweet">Quen Sweet [$130]</option>
                                        <option value="Full Sweet">Full Sweet [$100]</option>
                                </select>
                                <?php echo $bed;?><br><br>
                                        <select name="breakfast">
                                        <option value="Yes">Yes[+$10]</option>
                                        <option value="No">No</option>
                                      </select> <?php echo $breakfast;?><br><br>
            <input type="textarea" name="message" placeholder="Leave us a comment" value="<?php echo $message;?>"><br><br>

            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="BOOK NOW">

                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="UPDATE">

                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="DELETE">

                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="FIND">
            </div>
        </form>
    </body>
</html>
