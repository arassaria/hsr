<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            "insert into %s (%s) values (%s)",
            $table,
            implode(", ", array_keys($parameters)),
            ":" . implode(", :", array_keys($parameters))
        );

        try {

        $statement = $this->pdo->prepare($sql);

        $statement->execute($parameters);
        } catch (Exception $e) {
            die("Whoops, something went wrong.");
        }
    }

    public function finduser($username)
    {
        $stmt = $this->pdo->prepare("select id, email, username, password, securitykey from users where username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findid($userid)
    {
        $stmt = $this->pdo->prepare("select id, username, password, securitykey from users where id = ?");
        $stmt->execute([$userid]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectplayerss1($season, $ods, $ods2)
    {
        $statement = $this->pdo->prepare("select name, nummer, role, ods, s1 from players where s1='$season' and (ods='$ods' or ods='$ods2')");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectplayerss2($season, $ods, $ods2)
    {
        $playerss2 = $this->pdo->prepare("select name, nummer, role, ods, s2 from players where s2='$season' and (ods='$ods' or ods='$ods2')");
        $playerss2->execute();
        return $playerss2->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectseason($season, $ods)
    {
        $season1 = $this->pdo->prepare("select * from matches where season='$season' and ods='$ods'");
        $season1->execute();
        return $season1->fetchAll(PDO::FETCH_CLASS);
    }

    public function gettable($season, $ods)
    {
        $season1 = $this->pdo->prepare("select * from leaderboard where season='$season' and ods='$ods'");
        $season1->execute();
        return $season1->fetchAll(PDO::FETCH_CLASS);
    }

    public function getplayoffs($season, $ods)
    {
        $season1 = $this->pdo->prepare("select * from playoffs where season='$season' and ods='$ods'");
        $season1->execute();
        return $season1->fetchAll(PDO::FETCH_CLASS);
    }

    public function update($securitykey, $username)
    {
        $sql = $this->pdo->prepare("UPDATE users SET securitykey='$securitykey' WHERE username='$username'");
        $sql->execute();
    }

    public function updateorders($id, $status)
    {
        $upd = $this->pdo->prepare("UPDATE jerseys SET paid='$status' WHERE id='$id'");
        $upd->execute();
    }

    public function delete($table, $parameters)
    {
        $del = $this->pdo->prepare("DELETE FROM {$table} WHERE ID='$parameters'");
        $del->execute();
    }

    public function order($username)
    {
        $order = $this->pdo->prepare("select * from jerseys where username=?");
        $order->execute([$username]);
        return $order->fetchAll(PDO::FETCH_CLASS);
    }

    public function updatepw($password, $username)
    {
        $sql = $this->pdo->prepare("UPDATE users SET password='$password' WHERE username='$username'");
        $sql->execute();
    }

    public function loginkey($loginkey, $username)
    {
        $loginkey = bin2hex(random_bytes(32));
        $sql = $this->pdo->prepare("UPDATE users SET loginkey='$loginkey' WHERE username='$username'");
        $sql->execute();
        return $loginkey;
    }

    public function deleteloginkey($username)
    {
        $sql = $this->pdo->prepare("UPDATE users SET loginkey=NULL WHERE username='$username'");
        $sql->execute();
    }

    public function findloginkey($loginkey)
    {
        $login = $this->pdo->prepare("select id, email, username, securitykey from users where loginkey = ?");
        $login->execute([$loginkey]);
        return $login->fetch(PDO::FETCH_ASSOC);
    }
};