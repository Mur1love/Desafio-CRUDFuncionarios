# Desafio - CRUD de Funcionáriso com Autenticação

Este é um sistema web desenvolvido em **Laravel** para o gerenciamento de funcionários. O projeto utiliza **Laravel Breeze** para autenticação, **SQLite** como banco de dados e **jQuery Mask** para mascarar campos de entrada.

---

## 📌 **Requisitos**

Para rodar o projeto na sua máquina, você precisa ter instalado:

- **PHP 8.x**
- **Composer**
- **Node.js e NPM**
- **SQLite**

Se ainda não tem algum desses itens, instale-os antes de continuar.

---

## 🚀 **Como Rodar o Projeto**

### 1⃣ **Clone o Repositório**
```bash
git clone https://github.com/Mur1love/Desafio-CRUDFuncionarios.git
cd Desafio-CRUDFuncionarios/ 
```

### 2⃣ **Instale as Dependências**
```bash
composer install
npm install
```

### 3⃣ **Configure o Ambiente**
Crie o arquivo **.env** baseado no exemplo:
```bash
cp .env.example .env
```
Quando executar esse comando o banco de dados já deve estar configurado corretamente, senão, faça o passo 4.

### 4⃣ **Configure o Banco de Dados**
Edite o arquivo **.env** e altere as configurações do banco de dados para usar SQLite:

Usando o VSCODE é Recomendável instalar a extensão *SQLite Viewer* para visualização do arquivo database.sqlite.

```
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

Crie o arquivo do banco de dados:
```bash
touch database/database.sqlite
```

### 5⃣ **Gere a Chave da Aplicação**
```bash
php artisan key:generate
```

### 6⃣ **Execute as Migrações e Seeders**
```bash
php artisan migrate:fresh --seed
```
Isso recriará todas as tabelas e populará a tabela de **funcionários** e **usuários** com dados iniciais.

### 7⃣ **Compilar Assets**
```bash
npm run dev
```

### 8⃣ **Inicie o Servidor**
```bash
php artisan serve
```

Acesse o projeto em: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🎭 **Login Padrão**
Caso você queira acessar o sistema com um usuário já criado, utilize as credenciais padrão:

- **E-mail:** `user@example.com`
- **Senha:** `user`

Caso queira criar um novo usuário, utilize a tela de registro.

---

## 🛠️ **Tecnologias Utilizadas**

- **Laravel**
- **Laravel Breeze** (autenticação)
- **SQLite** (banco de dados)
- **jQuery Mask** (máscaras de formulário)
- **Vite** (build frontend)

---

## 📝 **Observações**
- Caso encontre problemas com permissões no SQLite, tente rodar:
  ```bash
  chmod -R 777 database/
  ```
- Para redefinir o banco de dados e rodar os seeders novamente, execute:
  ```bash
  php artisan migrate:fresh --seed
  ```

---


