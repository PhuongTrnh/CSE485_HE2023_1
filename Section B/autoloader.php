<?php
spl_autoload_register(function ($class) {
    // Định nghĩa thư mục chứa các file lớp
    $classFolders = array('classes');

    // Duyệt qua các thư mục và tìm file chứa định nghĩa lớp
    foreach ($classFolders as $folder) {
        $classFile = __DIR__ . '/' . $folder . '/' . $class . '.php';
        if (file_exists($classFile)) {
            require_once($classFile);
            return;
        }
    }
});
