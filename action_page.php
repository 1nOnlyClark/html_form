<?php
    var_dump($_POST);

    $fullname = '';
    $gender = '';
    $country = '';
?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "wait_lang_sir";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    ?>

        <?php
        $sql = "INSERT INTO student_record (id, full_name, gender, country)
        VALUES ('', '$fullname', '$gender', '$country')";
        
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        ?>