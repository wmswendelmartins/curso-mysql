# curso-mysql

# 🍕 Pizzaria do João

<div align="center">
  <p><b>Um sistema web para gerenciamento de pedidos de pizza.</b></p>
</div>

<div align="center">

  ![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=flat-square&logo=mysql&logoColor=white)
  ![PHP](https://img.shields.io/badge/PHP-7.4%2B%20%2F%208.x-777BB4?style=flat-square&logo=php&logoColor=white)
  ![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6-563D7C?style=flat-square&logo=bootstrap&logoColor=white)
  ![License](https://img.shields.io/badge/license-MIT-green.svg?style=flat-square)

</div>

---

## 📋 Sobre o Projeto

A Pizzaria do João é um projeto prático desenvolvido durante estudo do curso de SQL / MySQL. A aplicação simula o fluxo completo de uma pizzaria, dividida em duas frentes principais:
1. Área do Cliente (`index.php`): Onde o usuário monta sua pizza personalizada escolhendo a borda, a massa e até 3 sabores diferentes.
2. Dashboard de Gerenciamento (`dashboard.php`): Painel administrativo onde é possível visualizar todos os pedidos realizados, alterar o status: *Em produção*, *Em entrega*, *Concluído*) ou remover pedidos finalizados.

---
<img width="1366" height="1195" alt="screencapture_1788199998432" src="https://github.com/user-attachments/assets/1de4c565-000f-401c-a6c0-28cfd9278ff3" />

<img width="1366" height="780" alt="screencapture_1788200031517" src="https://github.com/user-attachments/assets/dd48254f-ead1-45d6-bd3c-d7bcb9fd69f5" />



---

## 🛠️ Tecnologias Utilizadas

* **MySQL** (Banco de dados relacional)
* **PHP**
* **Bootstrap 4**
* **HTML5 & CSS3**

---

## 🗂️ Estrutura do Projeto

```text
├── css/
│   └── style.css          # Estilizações customizadas e responsivas
├── img/                   # Imagens e ícones do projeto
├── process/
│   ├── conn.php           # Arquivo de conexão com o banco de dados (PDO)
│   ├── orders.php         # Lógica de backend para listagem, update e delete de pedidos
│   └── pizza.php          # Lógica de resgate de insumos e criação do pedido
├── templates/
│   ├── header.php         # Cabeçalho padrão com navbar e alertas
│   └── footer.php         # Rodapé padrão com scripts JS
├── dashboard.php          # Painel administrativo de gerenciamento de pedidos
└── index.php              # Página inicial (Formulário de montagem da pizza)
