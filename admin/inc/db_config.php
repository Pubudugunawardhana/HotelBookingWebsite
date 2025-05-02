<?php

$hname = 'localhost';
$uname = 'root';
$pass = 'mysql';
$db = 'hotel_booking_website';

$con = mysqli_connect($hname, $uname, $pass, $db);

if (!$con) {
    error_log("Database Connection Error: " . mysqli_connect_error());
    die("Cannot connect to the database.");
}

function filteration($data) {
    if (!is_array($data)) {
        return htmlspecialchars(strip_tags(trim($data)));
    }

    foreach ($data as $key => $value) {
        $data[$key] = htmlspecialchars(strip_tags(trim($value)));
    }
    return $data;
}

function select($sql, $values, $datatypes) {
    global $con; // Use global connection variable
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            error_log("Select Query Execution Error: " . mysqli_error($con));
            mysqli_stmt_close($stmt);
            return false; // Return false instead of terminating the script
        }
    } else {
        error_log("Select Query Preparation Error: " . mysqli_error($con));
        return false; // Return false instead of terminating the script
    }
}

function update($sql, $values, $datatypes) {
    global $con; // Use global connection variable
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            error_log("Update Query Execution Error: " . mysqli_error($con));
            mysqli_stmt_close($stmt);
            return false; // Return false instead of terminating the script
        }
    } else {
        error_log("Update Query Preparation Error: " . mysqli_error($con));
        return false; // Return false instead of terminating the script
    }
}
?>