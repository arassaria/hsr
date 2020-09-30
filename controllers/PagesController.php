<?php

Class PagesController
{
    public function home() {
        $posts = App::get('database')->selectAll("posts");

        $sortposts = array($posts);
        rsort($posts);

        return view('index', compact('posts'));
    }

    public function ods() {
        return view('ods');
    }

    public function oda() {
        return view('oda');
    }

    public function season() {
        return view('ods-season');
    }

    public function post() {
        if (!empty($_SESSION['username'] && $_SESSION['securitykey'] >= 2)) {
            return view('post');
        }   else {
            return redirect('');
        }   
    }

    public function player() {
        $players = App::get('database')->selectAll("players");

        return view('players', compact('players'));
    }

    public function createpost() {

        App::get("database")->insert("posts", [
            "title" => $_POST["title"],
            "content" => $_POST["content"],
            "author" => $_SESSION['username']

        ]);

        return redirect('');
    }

    public function contact() 
    {
        return view('contact');
    }

    public function sendmail()
    {
        App::get('database')->insert('tickets', [
            'email' => $_POST['email'],
            'name' => $_POST['name'],
            'betreff' => $_POST['betreff'],
            'nachricht' => $_POST['nachricht'],
        ]);

        return redirect ('');
    }

    public function newmatch() 
    {
        if ($_SESSION['securitykey'] >= 2) {
            return view('new-match');
        } else {
            return redirect ('');
        }
    }

    public function matchstore()
    {
        App::get('database')->insert('matches', [
            'season' => $_POST['season'],
            'spieltag' => $_POST['spieltag'],
            'opponent' => $_POST['opponent'],
            'ods' => $_POST['ods'],
            'home' => $_POST['home'],
            'result1' => $_POST['result1'],
            'result2' => $_POST['result2'],
        ]);

        return redirect('new-match');
    }

    public function results()
    {
        return view('results');
    }

    public function media()
    {
        return view('media');
    }

    public function showvideo()
    {
        return view('media2');
    }

    public function tickets()
    {
        if ($_SESSION['securitykey'] >= 2) {
            return view('tickets');
        } else {
            return redirect ('');
        }        
    }

    public function deleteticket()
    {
        $id = $_POST['id'];
        App::get('database')->delete('tickets', $id);
        return redirect('tickets');
    }

    public function jerseys()
    {
        if ($_SESSION['username'] == '') {
            return redirect('login');
        } else {
            return view('jerseys');
        }
    }

    public function jerseystore()
    {
        App::get('database')->insert('jerseys', [
            'username' => $_SESSION['username'],
            'email' => $_SESSION['email'],
            'name' => $_POST['name'],
            'nummer' => $_POST['nummer'],
            'size' => $_POST['size'],
            'menge' => $_POST['menge'],
            'liefer1' => $_POST['liefer1'],
            'liefer2' => $_POST['liefer2'],
            'liefer3' => $_POST['liefer3'],
        ]);
        return redirect('users');
    }

    public function orders()
    {
        $orders = App::get('database')->selectAll('jerseys');

        return view('orders', compact('orders'));
    }

    public function paid()
    {
        App::get('database')->updateorders($_POST['id'], $_POST['status']);

        return redirect('orders');
    }

    public function deleteorder()
    {
        $id = $_POST['id'];
        App::get('database')->delete('jerseys', $id);
        return redirect('orders');
    }

    public function deletepost()
    {
        $id = $_POST['id'];
        App::get('database')->delete('posts', $id);
        return redirect('');
    }
}