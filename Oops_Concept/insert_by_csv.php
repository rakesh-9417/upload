<?php
//https://www.youtube.com/watch?v=QpM8VpyL4yU

$connect = mysqli_connect("localhost", "root", "", "test1");

if (isset($_POST["submit"]))
{
    //print_r('($_FILES');
    # code...
    if ($_FILES['file']['name'])
    {
        # code...
        $filename = explode('.', $_FILES['file']['name']);
        if ($filename[1] == 'csv')
        {
            # code...
            $handle = fopen($_FILES['file']['tmp_name'], "r");
            while ($data = fgetcsv($handle))
            {
                # code...
                $item1 = mysqli_real_escape_string($connect, $data[0]);
                $item2 = mysqli_real_escape_string($connect, $data[1]);

                $sql = "INSERT INTO csv(name, email) VALUES('$item1' , '$item2')";
                mysqli_query($connect, $sql);
            }
            fclose($handle);
            print "Import Done";
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Insert BY CSV file</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <p>upload csv file <input type="file" name="file"></p>
            <input type="submit" name="submit" value="import">




        </form>
    </body>
</html>