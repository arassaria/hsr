<?php

class UserController
{
    public function index()
    {
         if (! empty($_SESSION['username'])) {
             $username = $_SESSION['username'];
             $orders = App::get('database')->order($username);
             return view('users', compact('orders'));
         } else {
             return redirect('login');
         }
    }

    public function story()
    {
        App::get("database")->insert("users", [
            "name" => $_POST["name"]
        ]);
        
        return redirect('users');
    }

    public function login() {
        if (empty($_SESSION['username'])) {
            return view('login');
        } else {
            return view('users');
        }
    }

    public function logout() {
        App::get('database')->deleteloginkey($_SESSION['username']);
        session_destroy();
        setcookie('loginkey', '', time() -3600);
        return redirect('');
    }

    public function loggedin() {
        $user = App::get('database')->finduser($_POST['username']);
              if (password_verify($_POST['password'], $user['password'])) {
                    $login = App::get('database')->loginkey($loginkey, $_POST['username']);
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['securitykey'] = $user['securitykey'];
                    $_SESSION['id'] = $user['id'];
                    setcookie('loginkey', $login, time()+3600);
                  return redirect('users');
              } else {
                  $_SESSION['loginfail'] = 1;
                   return redirect('login');
              };        
    }

    public function signup() {
        if (empty($_SESSION['username'])) {
            return view('signup');
        } else {
            return view('users');
        }
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'email' => $_POST['email'],
            'username' => $_POST['user'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ]);

        return redirect('login');
    }

    public function playerstore()
    {
        App::get('database')->insert('players', [
            'name' => $_POST['name'],
            'nummer' => $_POST['nummer'],
            'role' => $_POST['role'],
            'ods' => $_POST['ods'],
            's1' => $_POST['s1'],
            's2' => $_POST['s2'],
            's3' => $_POST['s3'],
            's4' => $_POST['s4'],
            's5' => $_POST['s5'],
            's6' => $_POST['s6'],
            'peak' => $_POST['peak'],
            'team' => $_POST['team'],
            'signature1' => $_POST['signature1'],
            'signature2' => $_POST['signature2'],
            'signature3' => $_POST['signature3']
        ]);

        return redirect('new-player');
    }

    public function newplayer()
    {
        if ($_SESSION['securitykey'] >= 2) {
            return view('new-player');
        } else {
            return redirect('');
        }
    }

    public function admin()
    {
        if ($_SESSION['securitykey'] >= 2) {
            $users = App::get('database')->selectAll('users');
            return view('admin', compact('users'));
        } else {
            return redirect('');
        }
        
    }

    public function adminchange()
    {
        $user = App::get('database')->finduser($_POST['username']);
        if ($_SESSION['securitykey'] <= $user['securitykey']) {
            echo 'Keine Berechtigungen zur Bearbeitung dieses Nutzers.';
            return redirect('admin');
        } elseif ($_SESSION['username'] == $_POST['username']) {
            echo 'Keine Berechtigungen zur Bearbeitung dieses Nutzers.';
            return redirect('admin');
        } else {
            App::get('database')->update($_POST['securitykey'], $_POST['username']);
            return redirect('admin');
        };
    }

    public function deleteuser()
    {
        $user = App::get('database')->findid($_POST['id']);
        if ($_SESSION['securitykey'] <= $user['securitykey']) {
            echo 'Keine Berechtigungen zum Löschen dieses Nutzers.';
        } elseif ($_SESSION['id'] == $_POST['id']) {
            echo 'Keine Berechtigungen zum Löschen dieses Nutzers.';
        } else {
            App::get('database')->delete('users', $_POST['id']);
            return redirect('admin');
        };
    }

    public function updatepw()
    {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        App::get('database')->updatepw($password, $_SESSION['username']);
        return redirect('users');
    }
}