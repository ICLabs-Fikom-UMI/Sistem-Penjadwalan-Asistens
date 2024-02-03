<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
class Controller {

    public function view($view, $data = [])
    {
        if (!isset($_SESSION['nama'])){
            require_once '../app/views/' . $view . '.php';
        }
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function checkLoginSession() {
        if (!isset($_SESSION['id_user'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function checkRoleAndRedirect($allowedRole, $redirectPage) {
        if ($_SESSION['rol'] != $allowedRole) {
            header('Location: ' . BASEURL . $redirectPage);
            exit;
        }
    }
}