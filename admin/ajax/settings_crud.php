<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_general'])) {
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");

    if ($res) {
        $data = mysqli_fetch_assoc($res);
        echo json_encode($data);
    } else {
        error_log("Error fetching general settings.");
        echo json_encode(["error" => "Failed to fetch settings."]);
    }
}

if (isset($_POST['upd_general'])) {
    $frm_data = filteration($_POST);

    $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');

    if ($res) {
        echo $res;
    } else {
        error_log("Error updating general settings.");
        echo 0; // Indicate failure
    }
}

if (isset($_POST['upd_shutdown'])) {
    $frm_data = ($_POST['upd_shutdown'] == 1) ? 0 : 1;

    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
    $values = [$frm_data, 1];
    $res = update($q, $values, 'ii');

    if ($res) {
        echo $res;
    } else {
        error_log("Error updating shutdown mode.");
        echo 0; // Indicate failure
    }
}
?>