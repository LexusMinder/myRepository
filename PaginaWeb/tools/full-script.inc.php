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

Conexion::openConexion();

for($users = 0; $users < 100; $users++){
    $username = sa(10);
    $email = sa(5) . '@' . sa(5) . '.com';
    $password = password_hash('123456', PASSWORD_DEFAULT);
    
    $user1 = new User('', $username, $password, $email, '', '');
    UserRepository::userInsert(Conexion::getConexion(), $user1);
}

for($homeworks = 0; $homeworks<100; $homeworks++){
    $title = sa(10);
    $profesor_id = rand(1, 100);
    $description = lorem();
    
    $homework = new Homework('', $title, $profesor_id, $description, '', '');
    HomeworkRepository::homeworkInsert(Conexion::getConexion(), $homework);
    
}

for($comments=0; $comments<100; $comments++){
    $title = sa(12);
    $user_id = rand(1,100);
    $comment_id = rand(1,100);
    $text = lorem();
    
    $comment = new Comment('', $title, $user_id, $comment_id, $text, '');
    CommentRepository::commentInsert(Conexion::getConexion(), $comment);
}

for ($entrys = 0; $entrys < 100 ; $entrys++) {
    $title = sa(12);
    $user_id = rand(1, 100);
    $comment_id = rand(1, 100);
    $url = $title;
    $text = lorem();
    
    $entry = new Entry('', $title, $user_id, $url, $text, '', $comment_id);
    EntryRepository::entryInsert(Conexion::getConexion(), $entry);
}

function sa($length){
    $character = '0123456789abcdefghijklmnopqrstuvwxyz';
    $character_number = strlen($character);
    $random_string = '';
    
    for($i=0; $i<$length; $i++){
        $random_string .=$character[rand(0, $character_number - 1)];
    }
    
    return $random_string;
        
}

function lorem() {
    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in enim erat. Praesent metus nibh, rutrum sit amet orci nec, vehicula tincidunt tellus. Aliquam nibh purus, consectetur in leo at, convallis posuere lorem. Etiam quis efficitur magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut non tortor vitae sapien feugiat luctus at non est. Sed dapibus purus eu lectus gravida, a aliquam massa aliquet.

Nullam porta neque vel massa varius, eget efficitur quam iaculis. Morbi sagittis in neque et dignissim. Suspendisse potenti. Morbi vitae iaculis augue. Ut euismod vel purus quis varius. Suspendisse porta neque sed leo interdum, eget ullamcorper tellus porttitor. Sed tempus nisl eu lectus varius, iaculis porta orci eleifend. Praesent varius, neque sit amet sollicitudin placerat, nunc eros fermentum lacus, non finibus lectus ex vitae ipsum. Ut ac libero nec nulla varius hendrerit eu non diam. Nullam hendrerit est eu pulvinar hendrerit. Aliquam erat volutpat. Quisque nec tincidunt velit. Nullam sed egestas nulla. Morbi nec erat lorem.

Proin sit amet diam nulla. Donec sagittis ipsum at metus maximus, eget condimentum quam placerat. Fusce imperdiet metus a porttitor semper. Aliquam porta sodales elit vitae vehicula. Sed vitae interdum justo. Vestibulum laoreet suscipit condimentum. Aliquam tellus lorem, consectetur sed elit a, sagittis iaculis nisl. Nam sit amet tempus libero, et suscipit felis.

Phasellus sed sagittis neque, et tincidunt nunc. Duis efficitur dolor urna, non elementum urna consectetur in. Aenean eget purus sapien. Donec pharetra vehicula metus, ac dignissim elit porttitor id. Sed mollis varius dolor vel fermentum. Integer efficitur, nulla a tristique aliquet, dolor ex consectetur ante, eget aliquam mauris metus a velit. Proin quis hendrerit ligula, eget euismod lorem. Duis nunc ipsum, aliquam at euismod at, consectetur quis elit. Nulla at metus feugiat, venenatis diam eget, posuere metus. Curabitur convallis nec diam placerat ultricies. Maecenas mauris tortor, sagittis eu rhoncus nec, dignissim ac metus.

Proin ac diam nunc. Sed elementum ex nec malesuada aliquet. Suspendisse luctus viverra ultrices. Cras vehicula maximus odio, a ornare massa interdum vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur quis viverra risus. Morbi ultrices tellus ac mi interdum, nec suscipit massa pellentesque. Aenean nec dolor nisl. Pellentesque vehicula non orci at rutrum. Quisque sagittis vitae metus a consequat. Aliquam dui est, tempus sed libero id, dictum imperdiet arcu. Etiam vehicula rutrum ipsum, eget lobortis nisl vehicula a. Nullam eleifend consectetur dictum. Quisque vel rhoncus felis.';
    return $lorem;
    
}

