<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';


include_once 'app/Homework.class.php';
include_once 'app/Comment.class.php';
include_once 'app/Entry.class.php';


include_once 'app/CommentRepository.inc.php';
include_once 'app/HomeworkRepository.inc.php';
include_once 'app/UserRepository.inc.php';
include_once 'app/EntryRepository.inc.php';



$url_components = parse_url($_SERVER["REQUEST_URI"]);
$path = $url_components['path'];
$path_part = explode("/", $path);
$path_part = array_filter($path_part);
$path_part = array_slice($path_part, 0);

$path_choosed = 'views/404.php';

if ($path_part[0] == 'PaginaWeb') {
    if (count($path_part) == 1) {
        $path_choosed = "views/home.php";
    } else if (count($path_part) == 2) {
        switch ($path_part[1]) {
            case 'login':
                $path_choosed = 'views/Login.php';

                break;
            case 'logout':
                $path_choosed = 'views/Logout.php';
                break;
                
            case 'register':
                $path_choosed = 'views/Register.php';
                break;
            case 'tool0';
                $path_choosed = 'tools/full-script.inc.php';
                break;
        }
    }elseif (count($path_part) == 3) {
        if ($path_part[1] == 'register-correct') {
            $username =  $path_part[2];
            $path_choosed = 'views/Correct-Register.php';
        }
        if ($path_part[1] == 'entry') {
            $url = $path_part[2];
            
            Conexion::openConexion();
            $entry = EntryRepository::getEntryUrl(Conexion::getConexion(), $url);
            if($entry != null){
                $author = UserRepository::getUserForId(Conexion::getConexion(), $entry -> getUserId());
                $randoms_entrys = EntryRepository::getRandomEntry(Conexion::getConexion(), $limit = 3);
                
                $comments = CommentRepository::getComments(Conexion::getConexion(), $entry->getCommentId());
                
                $path_choosed = 'views/entry.php';
                
            }
        }
    }
}

$variableX = 'Hola perras';

include_once $path_choosed;
