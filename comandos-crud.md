# Comandos SQL para operações de dador (CRUD)

## Resumo

- C: CREATE (INSERT) -> usado para inserir dados
- R: READ (SELECT) -> usado para ler/consultar dados
- U: UPDATE (UPDATE) -> usado para atualizar dados
- D: DELETE (DELETE) -> usado para excluir dados


## Exemplos


### INSERT na tabela de usuários
```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES(
    'João Victor S da Rocha', 
    'jvictor@gmail.com',
    '4567jvsr',
    'admin'
);
```
```sql
INSERT INTO usuarios(nome, email, senha, tipo)
VALUES(
'Fabio Barbosa',
'fabiobarbosa@gmail.com'
'2234'
'editor'
), (
'Beltrano Soares',
'beltrano@msn.com',
'000penha',
'admin'
), (
'Chapolin Colorado',
'chapolin@vingadores.com.br',
'marreta',
'editor'
);
```
### SELECT na tabela de usuários
```sql
SELECT * FROM usuarios;



SELECT nome, email FROM usuarios;


SELECT nome, email FROM usuarios WHERE tipo = 'admin';
```
### UPDATE em dados da tabela de usuários
```sql
UPDATE usuarios SET tipo = 'admin' WHERE id = 4;

-- Obs: NUNCA ESQUÇA DE PASSAR UMA CONDIÇÃO PARA O UPDATE!

```
### DELETE em dados da tabela de usuários
```sql
DELETE FROM usuarios WHERE id = 2;

-- Obs: NUNCA ESQUÇA DE PASSAR UMA CONDIÇÃO PARA O DELETE!

```
### INSERT na tabela de noticias
```sql
INSERT INTO noticias(titulo, resumo, texto, imagem, usuario_id)
VALUES(
    'Descoberto Oxigênio em Vênus',
    'Recentemente o telescópio no Havaí XYZ encontrou traços de oxigênio no planeta',
    'Nesta manhã, em um belo dia para a astronomia, foi feita uma descoberda incrivel...',
    'venus.jpg',
    1

);


INSERT INTO noticias(titulo, resumo, texto, imagem, usuario_id)
VALUES(
    'Nova Versão do VSCode',
    'Recentemente o VSCode recebeu uma nova ferramenta de IA... ',
    'A Microsoft trouxe recursos de Inteligência Artificial...',
    'vscode.jpg',
    4
);

INSERT INTO noticias(titulo, resumo, texto, imagem, usuario_id)
VALUES(
    'Onda de calor no Brasil',
    'Temperatura muito acima da média',
    'Efeitos do aquecimento global estão prejudicando a vida...',
    'sol.jpg',
    1
);
```



### Objetivo: consulta que mostre a data e o titulo da notícia e o nome do autor desta notícia.

### SELECT COM JOIN (CONSULTA COM JUNÇÃO DE TABELAS)

```sql
-- Especificamos o nome da coluna junto com o nome da tabela
SELECT 
noticias.data, 
noticias.titulo, 
usuarios.nome 

-- Especificamos quais tabelas serão relacionadas
FROM noticias JOIN usuarios

-- Fazemos uma comparação entre a FK com a PK
ON noticias.usuario_id = usuarios.id

-- opicional (ordenação/classificação pela data)
-- DESC indica ordem decrescente (maisvrecentes vem primeiro)
ORDER BY data DESC;
```











