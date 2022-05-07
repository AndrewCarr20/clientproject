<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'design', 'test1234', 'clientdb');

    //check connection
    if(!$conn){
        echo "Connection error: " . mysqli_connect_error();
    }


    // writing the sql queries
    $sql = 'SELECT FullName, Address1, Address2, City, State, Zipcode from client_data ORDER BY id';

    // get the result
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $clients = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
    <h4 class="center grey-text">Clients</h4>
    <div class = "container">
        <div class = "row">
            <?php foreach($clients as $client){ ?>
                <div class = "col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($client['FullName']) ?></h6>
                            <div><?php echo htmlspecialchars($client['Address1'])?></div>
                            <div><?php echo htmlspecialchars($client['Address2'])?></div>
                            <div><?php echo htmlspecialchars($client['City'])?></div>
                            <div><?php echo htmlspecialchars($client['State'])?></div>
                            <div><?php echo htmlspecialchars($client['Zipcode'])?></div>
                        </div>
                    </div>
                </div> 


            <?php } ?>


        </div>

    </div>

</html>