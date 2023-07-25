<?php
require_once("App/Models/AdminModel.php");

class AdminController {
    private $vista;

    public function index() {
        session_start();
        // unset($_SESSION['logedin']);
        // Nos fijamos si estamos logeados
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            // Si es así nos dirigimos a la página por parte de admin
            $vista = "App/Views/Admin/IndexAdminView.php";
             include_once("App/Views/Admin/PlantillaAdminView.php");
        } else {
            // En caso contrario, nos dirigimos a la parte del público
            $vista= "App/Views/Public/IndexPublicView.php";
            include_once("App/Views/Admin/ErrorAdminView.php");
        }
        
    }

    
        public function login() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contra'];
                $__model = new AdminModel();
                $mensaje = $__model->iniciarSesionAdmin($usuario, $contrasena);
    
                if ($mensaje === 'Inicio de sesión exitoso') {
                    session_start();
                    $_SESSION['logedin'] = true;
                    header("Location: http://localhost/EstampArte/?C=AdminController&M=index");
                    exit; // Asegúrate de agregar esta línea para detener la ejecución del script después de la redirección
                } else {
                    // Redirigir a la página de inicio de sesión con el mensaje de error en la URL
                    header("Location: http://localhost/EstampArte/?C=AdminController&M=index");
                    exit; // Asegúrate de agregar esta línea para detener la ejecución del script después de la redirección
                }
            }
        }
    
   
    public function CallFormLogin()
    {
        
        session_start();
       /*  unset ($_SESSION['logedin']); */
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            $vista = "App\View\Admin\IndexAdminView.php";
            include_once("app/View/admin/PlantillaAdminView.php");
        } else {
            $vista = "App/Views/Admin/IndexAdminLogin.php";
            include_once("App/Views/Admin/PlantillaAdminLogin.php");
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['logedin']);
        // Vista por parte del público
        header("Location: http://localhost/EstampArte/");
    }

}
?>
