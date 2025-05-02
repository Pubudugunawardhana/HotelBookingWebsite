<?php
function adminLogin() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] === true)) {
        redirect('index.php');
    }
}

function redirect($url) {
    header("Location: $url");
    exit;
}

function alert($type, $msg) {
    $bs_class = ($type === "success") ? "alert-success" : "alert-danger";
    echo <<<alert
      <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    alert;
}
?>