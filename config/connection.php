<?php

  // Usando SQLite para facilitar (não precisa de servidor MySQL)
  $db_file = __DIR__ . "/../database/agenda.db";
  
  // Criar diretório database se não existir
  if (!file_exists(__DIR__ . "/../database")) {
    mkdir(__DIR__ . "/../database", 0777, true);
  }

  try {
    $conn = new PDO("sqlite:" . $db_file);
    
    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Criar tabela se não existir
    $conn->exec("CREATE TABLE IF NOT EXISTS contacts (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      name TEXT NOT NULL,
      phone TEXT NOT NULL,
      observations TEXT,
      created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");

  } catch(PDOException $e) {
    // erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
    die();
  }