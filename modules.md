1 - Que o PDO é uma abstração para acesso a diversos bancos de dados
2 - Que, para acessar cada um dos bancos, um driver específico é necessário
3 - Que os drivers são habilitados através da instalação de extensões no PHP
4 - Que SQLite é um gerenciador de banco de dados que não precisa de um servidor
5 - A criar a nossa primeira conexão com um banco de dados

--
Ao tentar buscar dados do banco de dados, você pode informar como quer que os métodos do PDO formatem esses dados pra você. Os principais fetch modes ou fetch styles são:

PDO::FETCH_ASSOC: Retorna cada linha como um array associativo, onde a chave é o nome da coluna, e o valor é o valor da coluna em si
PDO::FETCH_BOTH (esse é o padrão): Retorna cada linha como um array com as chaves sendo tanto o índice da coluna (começando do 0) quanto o nome da coluna, ou seja, os valores acabam ficando duplicados nesse formato
PDO::FETCH_CLASS: Cada linha do resultado é retornado como uma instância da classe especificada em outro parâmetro. A classe não pode ter parâmetros no construtor e cada coluna terá o seu valor atribuído a uma propriedade de mesmo nome no objeto criado
PDO::FETCH_INTO: Funciona de forma muito semelhante ao FETCH_CLASS, mas ao invés de criar o objeto para você, ele preenche um objeto já criado com os valores buscados
PDO::FETCH_NUM: Retorna cada linha como um array, onde a chave é o índice numérico da coluna, começando do 0, e o valor é o valor da coluna em si
Para ver os demais modos de busca e ler com mais detalhes os explicados aqui, você pode conferir a documentação oficial do PHP: PDOStatement::fetch.
--

- A executar queries sem precisar conferir os seus resultados, como queries de INSERT, utilizando o método exec
- Que o método exec retorna apenas o número de linhas afetadas, e não o resultado de uma query em si
- A buscar dados no banco, utilizando o método query
- Os diversos métodos para recuperar dados utilizando o PDO:
    - fetch
    - fetchObject
    - fetchColumn
    - fetchAll
- Os diferentes Fetch Modes do PHP, ou seja, as diferentes formas de trazer dados do banco para o PHP

Bancos de dados possuem diversas formas de representar números que nós conhecemos como decimais. FLOAT, DECIMAL, NUMERIC, etc. Cada banco pode chamar de uma forma e até ter mais de uma representação.

Para não lidar com essas particularidades, o PHP simplesmente recomenda que você envie os dados como string (PDO::PARAM_STR), que é o tipo padrão, e o banco tratará esses tipos.

Inclusive é muito comum receber números decimais do banco e tê-los representados como strings no PHP. Isso não é nenhum problema e é um comportamento replicado em diversas linguagens.

Trabalhar com números decimais é um problema conhecido da computação, então acho que vale citar esse material bem legal: What Every Programmer Should Know About Floating-Point Arithmetic or Why don’t my numbers add up?.

O que é SQL Injection e como realizar esse ataque em nossa aplicação
Que adicionar parâmetros na string SQL é perigoso
A resolver esse problema, utilizando Prepared Statements
Que prepared statements podem inclusive ajudar na performance da aplicação
As diferenças entre bindValue e bindParam para vincular parâmetros aos prepared statements
Que podemos informar o tipo de dado que estamos passando através do PDO, utilizando o terceiro parâmetro de bindValue e bindParam

As boas práticas e padrões de projeto com orientação a objetos
O padrão Entity e vimos que ele já está sendo aplicado em nosso projeto
O padrão Creation Method, que cria uma conexão, de forma que não precisemos repetir esse código pela aplicação
O padrão Repository, que permite extrair a lógica de persistência para uma classe específica
A abstrair a implementação de um repository, através de uma interface, para podermos trocar a implementação no futuro, caso seja necessário
O conceito de injeção de dependências e suas diversas vantagens no desenvolvimento

Que o PDO nos fornece uma API muito simples para gerenciar transações
Como iniciar e finalizar uma transação, com beginTransaction e commit
Que é possível "cancelar" uma transação, com o método rollBack