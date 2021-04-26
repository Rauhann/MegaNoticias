## Pré-requisitos

1. Ter instalado no computador o Docker: https://docs.docker.com/engine/install/

2. Ter instalado no computador o Docker Compose: https://docs.docker.com/compose/install/

## Instruções de uso

1. Acessar o diretorio do projeto pelo terminal e subir a aplicação através do comando 'make up'.

2. Abrir outra aba do terminal e executar o comando 'make php' para habilitar o bash dentro do container.

3. Executar o comando 'make install' para instalar as dependências do projeto.

4. Executar o comando 'make env' para gerar o env do projeto.

5. Executar o comando 'make migrate' para criar as tabelas do banco de dados.

6. Executar o comando 'make seed' para popular o banco com dados de teste.

7. Abra um terminal em que não esteja dentro do container e execute o comando 'make serve' para simular o ambiente front. Vai gerar um link no terminal, é através dele que se acessa a interface.

8. Para acessar o banco de dados, bastar abrir outra aba do terminal e executar o comando 'make db'.
