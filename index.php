<?php
function Utils(): string{
    $pages = array('home', 'produtos', 'carrinho', 'login', 'admin', 'info'); 
    $page = isset($_GET['content']) && in_array($_GET['content'], $pages)? $_GET['content'] : 'home';

    return $page;
}

function abaAtiva(bool $flag): string{
    if($flag){
        return "class='nav-link active' aria-current='page'";
    } else {
        return "class='nav-link'";
    }
}

$files = ["header.php", "content.php", "footer.php"];
$filesFounded = array_filter(
    $files,
    function ($file) {
        return file_exists($file);
    }
);
foreach ($filesFounded as $file) {
    include $file;
}
?>