<?php
// Router para o servidor PHP embutido
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Servir arquivos estáticos diretamente
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    // Determinar o tipo MIME
    $ext = pathinfo($uri, PATHINFO_EXTENSION);
    $mimes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'svg' => 'image/svg+xml',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'ico' => 'image/x-icon',
    ];
    
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
        readfile(__DIR__ . $uri);
        return true;
    }
    
    return false;
}

// Incluir o arquivo PHP solicitado
return false;
