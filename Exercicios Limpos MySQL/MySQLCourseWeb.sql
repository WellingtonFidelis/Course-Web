/*SELECT get column and FROM get the table*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos;

/*how much DISTINCT has*/
SELECT DISTINCT tempoentrega FROM produtos;

/* LIMIT how much the first  will be printed*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos LIMIT 10;

/* LIMIT how much the last will be printed */
SELECT nomeproduto, precounitario, tempoentrega FROM produtos ORDER BY produtoID DESC LIMIT 10;

/* ORDER BY nomedeproduto */
SELECT nomeproduto, precounitario, tempoentrega FROM produtos ORDER BY nomeproduto ASC LIMIT 10;

/* ORDER BY precounitario*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos ORDER BY precounitario DESC LIMIT 10;

/* ORDER BY precounitario and tempoentrega*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos ORDER BY precounitario ASC, tempoentrega ASC;

/* WHERE simple*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos WHERE tempoentrega = 5;

/* WHERE multi*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos WHERE tempoentrega = 5 AND precounitario = 12;

/* WHERE WITH < > <= >=*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos WHERE precounitario <= 12;

/* WHERE WITH BETWEEN*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos WHERE precounitario BETWEEN 5 AND 12 ORDER BY precounitario ASC;

/* WHERE WITH OR*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos WHERE tempoentrega = 5 OR tempoentrega = 30;

/* WHERE WITH IN*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos WHERE tempoentrega IN (5,30,8);

/* WHERE WITH NOT IN*/
SELECT nomeproduto, precounitario, tempoentrega FROM produtos WHERE tempoentrega NOT IN (5,30,8) ORDER BY precounitario DESC;

/* LIKE */
SELECT nomeproduto FROM produtos WHERE nomeproduto LIKE "%Brave%";

/* MIN */
SELECT MIN(precounitario) AS MenorPreco, nomeproduto FROM produtos;

/* MAXVALUE */
SELECT MAX(precounitario) AS MaiorPreco, nomeproduto FROM produtos;

/* average */
SELECT AVG(precounitario) AS MenorPreco FROM produtos;

/* SUM */
SELECT SUM(valor_pedido) FROM pedidos WHERE YEAR(data_pedido) = '2006';

/* SUM AND count*/
SELECT SUM(valor_pedido), COUNT(pedidoID) AS QtdPedidos FROM pedidos WHERE YEAR(data_pedido) = '2007';

/* COUNT AND GROUP BY*/
SELECT tempoentrega AS TempoDeEntrega, COUNT(produtoID) as Total FROM produtos GROUP BY tempoentrega;

/* filtering values HAVING with GROUP BY*/
SELECT tempoentrega AS TempoDeEntrega, COUNT(produtoID) as Total FROM produtos GROUP BY tempoentrega HAVING Total >= 5;

/* relacionamento entre tabelas produtos e fornecedores */
SELECT nomeproduto, nomefornecedor FROM produtos, fornecedores WHERE produtos.fornecedorID = fornecedores.fornecedorID;

/* WHERE is used, basicly, for filters. For relacionamento used INNER JOIN */
SELECT nomeproduto, nomefornecedor FROM produtos INNER JOIN fornecedores ON produtos.fornecedorID = fornecedores.fornecedorID;

/* WHERE is used, basicly, for filters. For relacionamento used INNER JOIN with alias*/
SELECT nomeproduto, nomefornecedor FROM produtos as p INNER JOIN fornecedores as f ON p.fornecedorID = f.fornecedorID;

/*relationship BETWEEN three tables*/
SELECT nomeproduto, nomefornecedor, nomecategoria 
FROM produtos as p 
INNER JOIN fornecedores as f ON p.fornecedorID = f.fornecedorID
INNER JOIN categorias as c ON p.categoriaID = c.categoriaID;

/*relationship and GROUP BY*/
SELECT nomecategoria, COUNT(produtoID) as Total
FROM produtos AS p
INNER JOIN categorias AS c ON p.categoriaID = c.categoriaID
GROUP BY p.categoriaID
ORDER BY Total DESC;

/* INSERT INTO */
INSERT INTO estados(nome, sigla) VALUES ('New York', 'NY');
SELECT * FROM estados;

/* UPDATE, should will be with WHERE*/
UPDATE estados
SET nome = 'Washington'
WHERE estadoID = 31;
SELECT * FROM estados;
UPDATE estados
SET sigla = 'WS'
WHERE estadoID = 31;
UPDATE estados
SET sigla = 'NY', nome = 'New York'
WHERE estadoID = 31;
SELECT * FROM estados;

/* DELETE a record*/
DELETE FROM estados where estadoID = 31;
SELECT * FROM estados;