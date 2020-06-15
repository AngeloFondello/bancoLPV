sqlite3 projetopedroca.sql

.mode tabs
.mode column
.headers on



Create table usuario(
id_usuario integer primary key,
nome_usuario text,
email_usuario text,
senha_usuario text,

Create table estoque(
id_estoque integer primari key,
qt_produto integer,
id_produto integer,
nome_produto text,

Create table produto(
id_produto integer primary key,
quantidade_produto integer foreign key,
nome_produto text foreign key,

Create table servico(
id_produto servico inteegr primary key,
nome_servico text,
nome_tipo_servico text,

Create table nota
id_nota integer primari key,
id_usuario integerforeign key,
nome_usuario text foreign key,
id_produto integer foreign key,
nome_produto text foreign key,
id_produto servico inteegrforeign key,
nome_servico text foreign key,
nome_tipo_servico text foreign key,

);
