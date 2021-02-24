<!Doctype html>
<html lang="en">
    <head>
        <title>Student Records</title>
    <script> 
      $(function(){
       $('.alert').delay(1000).fadeOut();
      });
    </script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap');
      label{
        margin-right: 20px;
        float: left;
      }
      input {
        float: right;
      }
      button{
        text-align: center;
        position: absolute;
        left: 70%;
        top: 110%;

      }
      form {
        position: absolute;
        top: 15%;
        left: 80%;
      }
      .contain {
        margin-left: 20px;
        width: 75%;
      }
      h1{
        text-align: center;
        font-size: 30px;
        font-family: 'Sansita Swashed', cursive;
      }
    </style>
    </head>
    <body>
        <?php require_once 'CjMateo.php'; ?>
        
        <?php 
          if (isset($_SESSION['message'])):
        ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>
        <div class="contain">
        <?php 
          $mysqli = new mysqli('localhost', 'root_ad', 'sanaol', 'labsql') or die (mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM studsol") or die ($mysqli->error);
          
        ?>
        <div class="row justify-content-center">
        <h1>Sana Ol Saint University</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Address</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
        <?php
          while($row = $result->fetch_assoc()):
        ?>    
            <tr>
              <td><?php echo $row['ID']; ?></td>
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['lname']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['addr']; ?></td>
              <td>
                <a href="CjMateoHTML.php?edit=<?php echo $row['ID']; ?>" class="btn-warning">Edit</a>
                <a href="CjMateo.php?delete=<?php echo $row['ID']; ?>" class="btn-danger">Delete</a>
              </td>
            </tr>
        <?php endwhile; ?>
          </table>
        </div>
        <?php
          function pre_t($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
          }
        ?>
        <div class="row justify-content-center">
        <form action="CjMateo.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="fname" class="in" value="<?php echo $fname; ?>" placeholder="Enter First Name"><br>
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lname" class="in" value="<?php echo $lname; ?>" placeholder="Enter Last Name"><br>
              </div>
              <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" class="in" value="<?php echo $age; ?>" placeholder="Age"><br>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="in" value="<?php echo $addr; ?>" placeholder="Enter Address"><br>
              </div>
              <div class="form-group">
                <button type="submit" class ="btn btn-primary" name="save">Add</button>
              </div>
          </form>
        </div>
      </div>    
    </body>
</html>