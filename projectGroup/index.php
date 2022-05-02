  <?php
    include_once 'navbarLogin.php';
    ?>


  <?php








    // session_start();
    // $_SESSION['username'] = $_POST['username'];

    //new stuff
    session_start();

    // if (!isset($_SESSION['username'])) {

    //     $_SESSION['users_users_id'] = $user_data['users_users_id'];
    //     // header("location:http://localhost/ree/index.php');
    // }
    // $user = 'root';
    // $pass = '';
    // $db = '4353db7';

    // $mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
    // $_SESSION['username'] = $_POST['username'];
    // if (!isset($_SESSION['username'])) { // truying to get users_users_id from the users table 
    //     // $_SESSION['username'] = $_POST['username'];



    //     $sql4 = "SELECT * FROM users WHERE username ='$_SESSION[username]' ";

    //     $result = $mysqli->query($sql4);
    //     echo '$result';


    //     echo "<label>  </label>";
    //     if ($result->num_rows > 0) {

    //         while ($row = $result->fetch_assoc()) {




    //             echo "<html>";

    //             echo "<table>";
    //             echo "<tr>";



    //             $_SESSION['users_users_id'] = $row["users_users_id"]; // this is where the 12 came from im an idiot lmao.....
    //             echo $_SESSION['users_users_id'];
    //             echo "<th> [users Requested: ]</th>";
    //         }
    //     } else {
    //         echo "fool results";
    //     }
    //     //end

    // }

    ?>



  <script>
      var state = false;

      function toggle() {
          if (state) {
              document.getElementById("ipassword").setAttribute("type", "password");
              document.getElementById("icon").innerText = "visibility_off";
              state = false;
          } else {
              document.getElementById("ipassword").setAttribute("type", "text");
              document.getElementById("icon").innerText = "visibility";
              state = true;
              icon.innerT = "visibility";
          }
      }
  </script>

  <style>
      .errors {
          display: flex;
          flex-direction: row;
          justify-content: space-around;
          align-items: center;
          color: red;
          font-size: 15px;
      }



      .login-body {
          overflow: auto;
          position: fixed;
          padding: 0;
          margin: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 80%;
          width: 100%;
          box-sizing: border-box;
          letter-spacing: 0.5px;
      }








      .login-input input {
          display: inline-block;
          border: 2px solid #54585A;
          width: 100%;
          padding: 10px;
          margin: 10px auto;
          margin-bottom: 10px;
          border-radius: 5px;
      }



      /*    .login-button button, .login-button td input {*/
      /*    background: #960c22;*/
      /*    padding: 10px;*/
      /*    width: 435px;*/
      /*    color: #fff;*/
      /*    margin-top: 20px;*/
      /*    border-radius: 10px;*/
      /*}*/
  </style>

  <?php



    $user = 'root';
    $pass = '';
    $db = '4353db8';

    $mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

    echo "connected";
    //Initializes MySQLi
    // $mysqli = new mysqli('localhost', $user, $pass, $db);

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }





    $errors = array('username' => '', 'password' => '');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $Username = $_POST['username'];
        $Password = $_POST['userPassword'];

        if (!empty($Username) && !empty($Password)) {

            //Reads from DB
            $query = "SELECT * FROM username WHERE username  = '$Username'  limit 1";

            $result = mysqli_query($mysqli, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                // echo "$user_data good";
                // password_verify($Password,
                //  
                if ($Password == $user_data['userPassword']) {
                    $user_data['userPassword'];
                    echo "accessed here";
                    // echo($user_data['Login_password']);
                    $_SESSION['usernamesid'] = $user_data['usernamesid']; // connecting users to this
                    $_SESSION['username'] = $user_data['username'];

                    $_SESSION['users_users_id'] = $user_data['users_users_id'];  // need the id from ehere

                    header("Location: indexFuelQ.php");
                    // header("Location: createUser.php");
                    // header("Location: indexFuelHist.php");
                    die;
                } else {

                    $errors['password'] = "Password does not match For UserAdmin<br/><br/>";
                }
            } //num rows



            else {
                $errors['username'] = "Username does not exist<br/>";
            }
        } else {
            $errors['username'] = "Fill all fields<br/>";
        }
    }
    ?>

  <div class="page-content">
      <div class="login-body">
          <head2>
              <title>Log In</title>
              <link rel="stylesheet" href="style.css">
              <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
          </head2>
          <form method="post" class="login-form">
              <h2>LOGIN</h2>
              <div class="login-input">
                  <label class="label-single">User Name</label>
                  <input type="text" name="username" placeholder="Username..." class="input-single" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"><br>
              </div>
              <div class="errors">
                  <p>
                  </p>
              </div>
              <div class="login-input">
                  <label class="label-single">Password</label>
                  <input type="password" name="userPassword" placeholder="Password..." id="ipassword" class="input-single">
                  <i><span class="material-icons-outlined" id="icon" onclick="toggle()">visibility_off</span></i>
              </div>
              <div class="errors">
                  <p>
                      <?php echo $errors['password']; ?>
                  </p>
              </div>
              <div class="message-logredirect"></div>

              <div class="login-button">
                  <button type="submit">LOG IN</button>

              </div>



              <!-- <a href="createUser.php"><button> create login info</button></a> -->
          </form>

          <form method="POST" action="registration.php">
              <button type="button" class="submit">Create your account</button>
          </form>

          <?php
            // session_start();
            // $_SESSION['username'] = $_POST['username'];
            ?>

          <div class="testing-admin">

          </div>
      </div>
  </div>


  <?php
    include_once 'navbarLogin.php';
    ?>