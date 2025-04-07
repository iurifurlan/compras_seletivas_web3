<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Sistema de Gerenciamento de Compras Coletivas
Projeto desenvolvido para a disciplina de Web III utilizando o framework Laravel .
O objetivo é organizar compras coletivas realizadas por moradores de um grupo, gerenciando pedidos, produtos e pagamentos.

📚 Descrição do Projeto
Este sistema permite:

Cadastro de moradores ( residents)
Cadastro de produtos disponíveis ( products)
Registro de compras coletivas feitas pelo grupo ( collective_purchases)
Associação entre pedidos de moradores e produtos ( orders)
Controle de pagamentos por pedido ( payments)
🧱 Estrutura do Banco de Dados
O sistema possui 5 tabelas principais com relacionamentos:

moradores : moradores cadastrados
produtos : produtos comprados no atacado
compras_coletivas : compras feitas em grupo
pedidos : pedidos individuais às compras coletivas
pagamentos : status e dados de pagamento de cada pedido
Todos os relacionamentos estão definidos nas migrações usando foreignId()->constrained()->onDelete('cascade').
Os Modelos possuem os métodos de relacionamento protetor: hasOne, hasMany, belongsTo, belongsToMany.
