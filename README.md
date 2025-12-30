# 📱 PHP Agenda - Sistema de Gerenciamento de Contatos

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

> Sistema completo de gerenciamento de contatos telefônicos desenvolvido em PHP puro com interface moderna e responsiva.

## 📋 Sobre o Projeto

A **PHP Agenda** é uma aplicação web para gerenciamento de contatos telefônicos, permitindo que você organize suas informações de contato de forma simples e eficiente. O sistema oferece funcionalidades completas de CRUD (Create, Read, Update, Delete) com uma interface intuitiva e responsiva.

### ✨ Funcionalidades

- ✅ **Adicionar Contatos**: Cadastre novos contatos com nome, telefone e observações
- 👁️ **Visualizar Detalhes**: Veja informações completas de cada contato
- ✏️ **Editar Contatos**: Atualize informações de contatos existentes
- 🗑️ **Remover Contatos**: Exclua contatos que não são mais necessários
- 📱 **Design Responsivo**: Interface adaptável para desktop, tablet e mobile
- 💾 **Persistência de Dados**: Armazenamento seguro em banco de dados MySQL
- ⚡ **Interface Moderna**: Design clean e intuitivo com feedback visual

## 🚀 Tecnologias Utilizadas

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework CSS**: Bootstrap 4.5
- **Ícones**: Font Awesome 5.15
- **Banco de Dados**: MySQL 5.7+
- **Servidor**: Apache/Nginx

## 📦 Pré-requisitos

Antes de começar, você precisará ter instalado em sua máquina:

- [PHP](https://www.php.net/downloads) (versão 7.4 ou superior)
- [MySQL](https://www.mysql.com/downloads/) (versão 5.7 ou superior)
- [Apache](https://httpd.apache.org/download.cgi) ou [Nginx](https://nginx.org/en/download.html)
- Ou use [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/) ou [MAMP](https://www.mamp.info/)

## 🔧 Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/juliocsilvestre/php-agenda.git
cd php-agenda
```

### 2. Configure o banco de dados

Crie um banco de dados MySQL e execute o script SQL abaixo:

```sql
CREATE DATABASE agenda_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE agenda_db;

CREATE TABLE contacts (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  observations TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

### 3. Configure a conexão com o banco

Edite o arquivo `config/connection.php` com suas credenciais:

```php
<?php
  $host = "localhost";
  $dbname = "agenda_db";
  $user = "seu_usuario";
  $pass = "sua_senha";

  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    $error = $e->getMessage();
    echo "Erro: $error";
  }
?>
```

### 4. Configure a URL base

Edite o arquivo `config/url.php` com o caminho do seu projeto:

```php
<?php
  $BASE_URL = "http://localhost/php-agenda/";
?>
```

### 5. Inicie o servidor

#### Usando XAMPP/WAMP/MAMP:

- Coloque a pasta do projeto no diretório `htdocs` (XAMPP) ou `www` (WAMP)
- Inicie o Apache e MySQL
- Acesse: `http://localhost/php-agenda/`

#### Usando servidor embutido do PHP:

```bash
php -S localhost:8000
```

Acesse: `http://localhost:8000/`

## 📂 Estrutura do Projeto

```
php-agenda/
│
├── config/
│   ├── connection.php      # Configuração do banco de dados
│   ├── process.php          # Lógica de processamento CRUD
│   └── url.php              # URL base da aplicação
│
├── css/
│   └── styles.css           # Estilos customizados
│
├── img/
│   └── logo.svg             # Logo da aplicação
│
├── templates/
│   ├── header.php           # Cabeçalho global
│   ├── footer.php           # Rodapé global
│   └── backbtn.html         # Botão de voltar
│
├── index.php                # Página principal - lista de contatos
├── create.php               # Formulário de criação
├── show.php                 # Visualização de contato
├── edit.php                 # Formulário de edição
└── README.md                # Documentação
```

## 💻 Como Usar

### Adicionar um Contato

1. Clique em "Adicionar Contato" no menu
2. Preencha nome, telefone e observações (opcional)
3. Clique em "Cadastrar"

### Visualizar um Contato

1. Na lista de contatos, clique no ícone do olho (👁️)
2. Veja todos os detalhes do contato

### Editar um Contato

1. Na lista de contatos, clique no ícone de edição (✏️)
2. Modifique as informações desejadas
3. Clique em "Atualizar"

### Excluir um Contato

1. Na lista de contatos, clique no ícone de exclusão (❌)
2. O contato será removido imediatamente

## 🎨 Capturas de Tela

### Página Principal

Lista todos os contatos cadastrados com opções de visualizar, editar e excluir.

### Adicionar Contato

Formulário intuitivo para cadastrar novos contatos.

### Visualizar Contato

Exibição completa das informações do contato.

## 🤝 Contribuindo

Contribuições são sempre bem-vindas! Se você tem alguma sugestão para melhorar este projeto:

1. Faça um Fork do projeto
2. Crie uma Branch para sua Feature (`git checkout -b feature/NovaFuncionalidade`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova funcionalidade'`)
4. Push para a Branch (`git push origin feature/NovaFuncionalidade`)
5. Abra um Pull Request

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 👨‍💻 Autor

**Júlio César Silvestre**

- GitHub: [@juliocsilvestre](https://github.com/juliocsilvestre)
- Email: jcss.silvestre@gmail.com

## 📞 Contato

Se você tiver alguma dúvida ou sugestão, sinta-se à vontade para abrir uma issue ou entrar em contato!

---

⭐ Se este projeto foi útil para você, considere dar uma estrela no repositório!
