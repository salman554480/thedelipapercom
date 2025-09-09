<?php session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Delipaper</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body style="background-image:url('assets/img/kraft-paper.webp');background-size:cover; background-position:center;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" id="inputEmail" type="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="inputPassword"
                                                type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>

                                        </div>

                                        <div class="d-flex-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" class="btn btn-danger" name="submit" value="Login">
                                        </div>
                                    </form>
                                    <?php
                                    require_once('parts/db.php');
                                    if (isset($_POST['submit'])) {
                                        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
                                         $password = trim($_POST['password']);

                                        $select = "SELECT * FROM admin WHERE admin_email='$email'";
                                        $run =  mysqli_query($conn, $select);
                                        if (mysqli_num_rows($run) > 0) {

                                            $row =  mysqli_fetch_array($run);


                                            $user_email =  $row['admin_email'];
                                            $user_password =  $row['admin_password'];
                                            $admin_role =  $row['admin_role'];

                                            if ($email ==   $user_email && $password ==  $user_password) {
                                                
                                                $current_date =  date('Y-m-d');
                                                $select_last_backup = "SELECT * FROM backup where backup_date='$current_date'";
                                                $result_last_transaction = mysqli_query($conn, $select_last_backup);
                                                if (mysqli_num_rows($result_last_transaction) > 0) {
                                                    if ($admin_role == "admin") {
                                                        //header('Location:index.php');
                                                        echo "<script>window.open('index.php','_self');</script>";
                                                        $_SESSION['admin_email'] =  $user_email;
                                                        } else {
                                                            echo "<script>window.open('post_view.php','_self');</script>";
                                                            $_SESSION['admin_email'] =  $user_email;
                                                        }
                                                } else {
                                                    // Directory to store the backups
                                                    $backupDir = 'database_backup/';
                                                    // Ensure the backup directory exists, if not, create it
                                                    if (!file_exists($backupDir)) {
                                                        mkdir($backupDir, 0777, true);
                                                    }
                                        
                                                    $backup =  "delipaper" . "_" . date("Y-m-d_H-i-s") . ".sql";
                                                    // Set a backup file name based on the current date and time
                                                    $backupFile = $backupDir . $backup;
                                        
                                                    // Open the backup file for writing
                                                    $file = fopen($backupFile, 'w');
                                        
                                                    // Get all tables from the database
                                                    $tables = $conn->query("SHOW TABLES");
                                        
                                                    if ($tables) {
                                                        // Loop through all tables and dump each table
                                                        while ($row = $tables->fetch_row()) {
                                                            $table = $row[0];
                                        
                                                            // Write the table structure to the backup file
                                                            $createTable = $conn->query("SHOW CREATE TABLE `$table`");
                                                            $createTableRow = $createTable->fetch_row();
                                                            fwrite($file, "\n\n" . $createTableRow[1] . ";\n\n");
                                        
                                                            // Dump the table data
                                                            $result = $conn->query("SELECT * FROM `$table`");
                                                            while ($dataRow = $result->fetch_assoc()) {
                                                                $columns = array_keys($dataRow);
                                                                $values = array_map(function ($value) {
                                                                    return "'" . addslashes($value) . "'";
                                                                }, array_values($dataRow));
                                        
                                                                $sql = "INSERT INTO `$table` (`" . implode('`, `', $columns) . "`) VALUES (" . implode(', ', $values) . ");\n";
                                                                fwrite($file, $sql);
                                                            }
                                                        }
                                        
                                                        // Close the file
                                                        fclose($file);
                                                        $insert_backup = "INSERT into backup(backup_file) VALUES('$backup')";
                                                        $conn->query($insert_backup);
                                                        
                                                        
                                                        if ($admin_role == "admin") {
                                                        //header('Location:index.php');
                                                        echo "<script>window.open('index.php','_self');</script>";
                                                        $_SESSION['admin_email'] =  $user_email;
                                                        } else {
                                                            echo "<script>window.open('post_view.php','_self');</script>";
                                                            $_SESSION['admin_email'] =  $user_email;
                                                        }
                                                        
                                                        
                                                    } else {
                                                        echo "Error fetching tables: " . $conn->error;
                                                    }
                                        
                                                }
                                            } else {
                                                echo "Invalid Login";
                                            }
                                        } else {
                                            echo "No Email Found";
                                        }
                                    }


                                    ?>





                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>