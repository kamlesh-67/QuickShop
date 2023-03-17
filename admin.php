<?php
include('init.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $rewiew = $_POST["rewiew"];
    $rating = $_POST["rating"];

    $file = $_FILES['my_file']['name'];
    if (($_FILES['my_file']['name'] != "")) {
        // Where the file is going to be stored
        $target_dir = "upload/";
        // $file = $_FILES['my_file']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['my_file']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $ext;

        // Check if file already exists
        if (file_exists($path_filename_ext)) {
            echo "Sorry, file already exists.";
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);
            echo "Congratulations! File Uploaded Successfully.";
        }
    }

    mysqli_query($server, "INSERT INTO $ptable (title,description,price,rating,rewiew,img) VALUES ('$title','$description','$price','$rating','$rewiew','$file')");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
    <style>
        .admin-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }

        form {
            width: 50vw;
            display: grid;
            grid-gap: 20px;
        }

        input,
        textarea {
            outline: none;
            border: 1px solid gray;
            border-radius: 25px;
            padding: 0 10px;
        }

        input {
            height: 30px;
        }

        textarea {
            padding: 10px 10px;
        }

        h1 {
            text-align: center;
            text-transform: uppercase;
            font-size: 42px;
        }

        input:nth-child(7) {
            outline: none;
            border: 0px solid gray;
            border-radius: 0px;
            padding: 0 10px;
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <h1>Admin</h1>
            <input type="text" name="title" id="title" placeholder="Title">
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
            <input type="text" name="price" id="price" placeholder="Price">
            <input type="text" name="rating" id="rating" placeholder="rating">
            <input type="text" name="rewiew" id="rewiew" placeholder="Review">
            <input type="file" name="my_file">
            <input type="submit" value="Submit">

        </form>

    </div>

</body>

</html>