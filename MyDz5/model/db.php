<?php
function CreatDB(){
    $db = new PDO ('mysql:host='.DB_HOST.';dbname='.DB_NAME ,DB_USER, DB_PASS, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
            $db -> exec('SET NAMES UTF8');
            return $db;
}

    function EditArticle(array $arr) : bool{
        $db = CreatDB();
        $sql = "INSERT INTO articles (title, content, id_cat) VALUES (:title, :content, :cat_id)
               "; 
            $query = $db -> prepare($sql);
            $query -> execute($arr);
            return true;
    }
    function GetArticle() : array{
        $db = CreatDB();
        $param = [];
    $sql = "SELECT * FROM articles ORDER BY dt DESC ";
    $query = $db -> prepare($sql);
    $query -> execute($param);
    $row = $query -> fetchAll();
            return $row;
    }

    function GetOneArticle(int $id) : array{
        $db = CreatDB();
        $param = [];
    $sql = "SELECT * FROM articles WHERE id_article = '$id' ";
    $query = $db -> prepare($sql);
    $query -> execute($param);
    $row = $query -> fetchAll();
            return $row;
    }
    
    function DelArticle($id){
        $db = CreatDB();
        $sql = "DELETE  FROM articles WHERE id_article = '$id'";
        $query = $db -> prepare($sql);
        $query -> execute($_GET);
        return $query;
    }

    function AddArticle($id){
        $db = CreatDB();
        $arr = [];
        $sql = "SELECT * FROM articles  WHERE id_article = '$id'";
    $query = $db -> prepare($sql);
    $query -> execute($arr);
    $row = $query -> fetchAll();
            return $row;
    }

    function GetOneArticleCAT(int $id) : array{
        $db = CreatDB();
        $arr = [];
        $sql = "SELECT * FROM articles  WHERE id_cat = '$id'";
    $query = $db -> prepare($sql);
    $query -> execute($arr);
    $row = $query -> fetchAll();
            return $row;
    }
    
    
    function EditErrors(array &$arr) : array{ 
        $errors = [];
        $leightContent = mb_strlen($arr['content']);
        $leightTitle= mb_strlen($arr['title']);

        if($arr['title'] === '' || $arr['content'] === ''){
            $errors[] = 'Заполните все поля!';
        }
                elseif( $leightContent < 10){
                        $errors[] = 'Статься не короче 10 символов!';
                }
                elseif($leightTitle < 2){
                    $errors[] = 'Имя не короче 2х символов!';
                }
        return $errors;
    }

    function checkControllerName(string $name) : bool{
		return !!preg_match('/^[aA-zZ0-9_-]+$/', $name);
	}

    
