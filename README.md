# 🍪 Formulário com Cookies em PHP

Este projeto simples foi desenvolvido como parte dos meus estudos em PHP, com foco em manipulação de cookies, envio de formulário e personalização de conteúdo com base nos dados armazenados.

## 📋 Descrição

O sistema permite que o usuário preencha um formulário com nome, e-mail e número de telefone. Esses dados são salvos em cookies por 7 dias. Após o envio, as informações são exibidas diretamente na tela. Também é possível "resetar" os cookies clicando em um link.

## 🛠 Tecnologias Utilizadas

- PHP (7.4+)
- HTML5
- CSS3 (arquivo externo `style.css`)

## ⚙️ Funcionalidades

- Envio de formulário com método `POST`
- Armazenamento dos dados usando `setcookie()`
- Recuperação de dados usando `$_COOKIE`
- Redirecionamento automático após o envio (`header("Location:")`)
- Opção de "resetar" os cookies manualmente

## 🖼️ Exemplo de Uso

1. O usuário acessa a página e preenche o formulário.
2. Após enviar, os dados são salvos nos cookies e exibidos na tela.
3. Um link permite limpar os cookies e recomeçar o processo.

## 🚀 Como Executar Localmente

1. Salve os arquivos em uma pasta dentro do `htdocs` (XAMPP) ou `www` (WAMP).
2. Certifique-se de ter o PHP instalado e rodando.