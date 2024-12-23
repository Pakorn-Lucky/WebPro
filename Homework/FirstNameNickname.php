<html>

<head>
    <title> FirstNameNickname.php </title>
</head>

<body>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            $filename = $_POST['filename'];
            $text = file($filename);
            foreach ($text as $tr_data) {
                $column = 1;
                $array_word = explode(",", $tr_data);
                foreach ($array_word as $value) {
                    $value = trim($value);
                    if ($column == 1) {
                        echo $value;
                    }
                    else{
                        if ($value == "Robert"){
                            echo 'Dick<br>';
                        }
                        elseif($value == "Dick")
                        {
                            echo 'Robert<br>';
                        }
                        elseif($value == "William")
                        {
                            echo 'Bill<br>';
                        }
                        elseif($value == "Bill")
                        {
                            echo 'William<br>';
                        }
                        elseif($value == "James")
                        {
                            echo 'Jim<br>';
                        }
                        elseif($value == "Jim")
                        {
                            echo 'James<br>';
                        }
                        elseif($value == "John")
                        {
                            echo 'Jack<br>';
                        }
                        elseif($value == "Jack")
                        {
                            echo 'John<br>';
                        }
                        elseif($value == "Margaret")
                        {
                            echo 'Peggy<br>';
                        }
                        elseif($value == "Peggy")
                        {
                            echo 'Margaret<br>';
                        }
                        elseif($value == "Edward")
                        {
                            echo 'Ed<br>';
                        }
                        elseif($value == "Ed")
                        {
                            echo 'Edward<br>';
                        }
                        elseif($value == "Sarah")
                        {
                            echo 'Sally<br>';
                        }
                        elseif($value == "Sally")
                        {
                            echo 'Sarah<br>';
                        }
                        elseif($value == "Andrew")
                        {
                            echo 'Andy<br>';
                        }
                        elseif($value == "Andy")
                        {
                            echo 'Andrew<br>';
                        }
                        
                        elseif($value == "Anthony")
                        {
                            echo 'Tony<br>';
                        }
                        elseif($value == "Tony")
                        {
                            echo 'Anthony<br>';
                        }

                        elseif($value == "Deborah")
                        {
                            echo 'Debbie<br>';
                        }
                        elseif($value == "Debbie")
                        {
                            echo 'Deborah<br>';
                        }
                    $column++;
                    }
                }

            }

            echo "<a href='FirstNameNickname.php'> <big>Back </big></a>";
        } else { ?>
            <!DOCTYPE html>
            <html>

            <head>
                <title>FirstNameNickname</title>
            </head>

            <body>
                <form method="post" action="FirstNameNickname.php">
                    <b><big>FirstNameNickname.php </big><br><br></b>
                    <tr>
                    <tr>
                        <td>File name &nbsp;&nbsp;</td>
                        <td><input type="text" name="filename" size="50" value="" /> </td><br><br>

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value=" SUBMIT " />&nbsp;
                            <input type="reset" name="reset" value=" RESET " />
                        </td>
                    </tr>
                    </table>
                </form>
            </body>

            </html>
            <?php

        }
