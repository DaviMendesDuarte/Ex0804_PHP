# Ex0804_PHP
Lições do dia 08/04 feito por Davi Mendes Duarte e Izabela de Souza Santos

# Exercícios PHP – Geração de Números Aleatórios e Estrutura DO WHILE

Este repositório contém exercícios em PHP com foco na geração de números aleatórios e na utilização da estrutura de repetição `do...while`.

---

## 📌 Gerando Números Aleatórios

```php
$numero = rand(0,10);
```

> Gera um número aleatório entre 0 e 10 e armazena na variável `$numero`.

```php
$numero = rand(3,20);
```

> Gera um número aleatório entre 3 e 20 e armazena na variável `$numero`.

---

## 🧠 Exercícios com DO WHILE

### 1️⃣ Cédulas de Dinheiro

> F.U.P. (Faça um Programa) que o usuário entre com um valor em dinheiro e o programa exiba quantas notas de:
- R$100,00  
- R$50,00  
- R$20,00  
- R$10,00  
- R$5,00  
- R$2,00  
- R$1,00  

...são necessárias para compor o valor digitado.

---

### 2️⃣ Subtração Aleatória

> F.U.P. que:
- Pergunte ao usuário um número;
- Gere um número aleatório entre 1 e 10 (`rand(1, 10)`);
- Subtraia o número aleatório do número do usuário;
- Informe quantas vezes o processo foi executado até o valor ser igual ou menor que zero.

---

### 3️⃣ Adivinhação Automática

> F.U.P. que:
- Gere um número aleatório de 0 a 100 como **base**;
- Gere números aleatórios de 0 a 100 até acertar o valor da base;
- Exiba:
  - Quantos números foram necessários gerar;
  - Os números gerados.

---

## 🎯 DESAFIO – Número da Sorte

> F.U.P. onde:
- O usuário deve digitar o "número da sorte";
- O sistema gera um número aleatório;
- O usuário continuará digitando até acertar;
- O sistema informa se o número é maior ou menor a cada tentativa;
- Ao acertar, o programa mostra:
  - O número sorteado;
  - Quantas tentativas foram feitas.

### 🔒 Dica:
Não é necessário usar estruturas de repetição. O sistema deve ser dividido em **3 páginas** e utilizar inputs ocultos (`<input type='hidden'>`) para armazenar:
- O número aleatório gerado
- O número de tentativas

```html
<input type='hidden' name='sorte' value='$al'>
```