<?php
require_once("App/Models/UserModel.php");

class UserController
{
    private $vista;
    private $__model;

    public function __index()
    {
        session_start();
        // unset($_SESSION['logedin']);
        // Nos fijamos si estamos logeados
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            // Si es así nos dirigimos a la página por parte de admin
            $vista = "App/Views/Public/IndexPublicView.php";
            include_once("App/Views/Public/PlantillaPublicView.php");
        } else {
            // En caso contrario, nos dirigimos a la parte del público
            $vista= "App/Views/Public/IndexPublicView.php";
            include_once("App/Views/Public/Error/ErrorPublicView.php");
        }
    }

    public function CallFormAdd()
    {
        session_start(); 
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            $vista = "App/View/Admin/AddUserAdminView.php";
            include_once("app/View/admin/PlantillaAdminView.php");
        } else {
            $vista = "App/Views/Public/IndexRegistroView.php";
            include_once("App/Views/Public/PlantillaRegistroView.php");
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
            $vista = "App/Views/Public/IndexLoginView.php";
            include_once("App/Views/Public/PlantillaLoginView.php");
        }
    }

    public function register() {
        // Verificar si el formulario se envió
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];

            // Instanciar el UserModel
            $__model = new UserModel();

            // Llamar al método para agregar el usuario
            $mensaje = $__model->addUser($nombre, $apellidos, $email, $contrasena);

            // Mostrar el mensaje de éxito o manejar errores
            echo $mensaje;
        }
    }
    
       
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contra'];
            $__model = new UserModel();
            $mensaje = $__model->iniciarSesion($correo, $contrasena);

            if ($mensaje === 'Inicio de sesión exitoso') {
                session_start();
                $_SESSION['logedin'] = true;
                header("Location: http://localhost/EstampArte/?C=UserController&M=__index");
                exit; // Asegúrate de agregar esta línea para detener la ejecución del script después de la redirección
            } else {
                // Redirigir a la página de inicio de sesión con el mensaje de error en la URL
                header("Location: http://localhost/EstampArte/?UserController&M=__index");
                exit; // Asegúrate de agregar esta línea para detener la ejecución del script después de la redirección
            }
        }
    }

    public function __login_out()
    {
        session_start();
        unset($_SESSION['logedin']);
        // Vista por parte del público
        header("Location: http://localhost/EstampArte/");
    }
}


?>