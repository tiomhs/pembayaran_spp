<?php 

class Login extends Controller{

    public function index(){
        $data['judul'] = 'Login';
        $this->view('login/index',$data);
    }

    public function do_login(){
        $login = $this->model('User_model')->login($_POST);
        if ($login) {
            switch ($login[0]['role']) {
                case '0':
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $login[0]['id'];
                    $_SESSION['role'] = 0;
                    redirect("/admin/index");
                    break;
                case '1':
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $login[0]['id'];
                    $_SESSION['role'] = 1;
                    redirect("/admin/index");
                    break;
                case '2':
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $login[0]['id'];
                    $_SESSION['role'] = 2;
                    redirect("/home/index");
                    break;          
                default:
                    echo "<script>alert('Gagal Login');</script>";
                    break;
            }
        }else{
            echo "login gagal";
            redirect("/login/index");
        }
    }

    public function logout(){
        session_reset();
        session_destroy();
        redirect('/login');
    }
}