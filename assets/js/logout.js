function logout() {
    $.post("../api/logout.php")
        .done(function(result) {
            if (result == 'deslogado') {
                window.location.href = "../index.php";
            }
        });
}