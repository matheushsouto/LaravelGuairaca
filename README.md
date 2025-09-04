# 📘 Tutorial - Rodando o Projeto LaravelGuairaca  

Este guia vai te ensinar a rodar o projeto **LaravelGuairaca** do zero no seu computador, usando **XAMPP**.  

---

## 🔧 O que você precisa instalar antes  

Antes de começar, instale os seguintes programas:  

1. **XAMPP** (com PHP 8.1 ou superior e MySQL) → [Baixar aqui](https://www.apachefriends.org/pt_br/index.html)  
2. **Composer** (gerenciador de dependências PHP) → [Baixar aqui](https://getcomposer.org/)  
3. **Node.js** (já vem com NPM incluso) → [Baixar aqui](https://nodejs.org/)  
4. **Git** (para clonar o projeto) → [Baixar aqui](https://git-scm.com/)  

---

## 📥 Passo 1 - Clonar o repositório  

Abra o **Prompt de Comando** ou o **Git Bash** e rode:  

```bash
git clone https://github.com/matheushsouto/LaravelGuairaca.git
cd LaravelGuairaca
```

---

## ⚙️ Passo 2 - Instalar as dependências do projeto  

### 2.1 - Dependências PHP  
```bash
composer install
```

### 2.2 - Dependências JavaScript  
```bash
npm install
```

---

## 📄 Passo 3 - Configuração do ambiente  

1. Copie o arquivo de exemplo `.env` para `.env`:  

   ```bash
   copy .env.example .env
   ```
   (No **Git Bash**, use `cp .env.example .env`)  

2. Gere a chave da aplicação:  

   ```bash
   php artisan key:generate
   ```

3. Configure o banco de dados no arquivo `.env`. Procure e edite estas linhas:  

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravelguairaca
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   > ⚠️ No XAMPP, o usuário padrão é **root** e a senha normalmente fica **em branco**.  

4. Crie o banco de dados no **phpMyAdmin**:  
   - Acesse [http://localhost/phpmyadmin](http://localhost/phpmyadmin)  
   - Clique em **Novo** → Digite `laravelguairaca` → Clique em **Criar**  

5. Execute as migrations (e seeders, se existirem):  

   ```bash
   php artisan migrate --seed
   ```

---

## 🎨 Passo 4 - Compilar os arquivos CSS/JS (Laravel Mix)  

Para carregar corretamente os estilos e scripts do projeto:  

### Compilar para desenvolvimento  
```bash
npm run dev
```

### Compilar automaticamente enquanto edita  
```bash
npm run watch
```

### Compilar para produção  
```bash
npm run prod
```

---

## 🚀 Passo 5 - Rodar o projeto  

### Usando o servidor embutido do Laravel  
```bash
php artisan serve
```

Depois abra no navegador:  
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)  

---

## 👤 Login e Registro  

O projeto já vem configurado com **sistema de autenticação (Login e Cadastro)**.  

- Clique em **Registrar** para criar um novo usuário.  
- Depois faça **login** normalmente.  

---

## 🛠️ Comandos úteis do Laravel  

- Limpar cache de configuração:  
  ```bash
  php artisan config:clear
  ```

- Limpar cache de rotas:  
  ```bash
  php artisan route:clear
  ```

- Limpar cache de views:  
  ```bash
  php artisan view:clear
  ```

---

## ✅ Conclusão  

Seguindo esse passo a passo, você terá o projeto **LaravelGuairaca** rodando no seu computador com **XAMPP** 🎉.  

Se algo não funcionar, verifique:  
- Versão do PHP (precisa ser 8.2 ou superior)  
- Se o **Composer** e o **Node.js** estão instalados corretamente  
- Se o banco `laravelguairaca` foi criado no phpMyAdmin  
- Se rodou os comandos `composer install`, `npm install` e `php artisan migrate --seed`  

---
