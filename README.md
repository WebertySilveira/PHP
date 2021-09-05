## :ledger: Projetos PHP

Os projetos estão divididos em três níveis, baseado nos conhecimentos e experiências necessárias para realizá-los.

### Nível-1: Iniciante

| Projeto                                                                              | Descrição                     |
| --------------------------------------------------------------------------------- | ---------------------------------|
| [Bin2Dec](./Projects/1-Beginner/Bin2Dec)                                          | Conversor de Binário para decimal|
| [UsersCRUD](./Projects/1-Beginner/UsersCRUD)                                          | Criar CRUD de Usuários|

### Executando os arquivos com o Docker

docker  run -p 8080:8080 --rm -v $(pwd):$(pwd) php -S 0.0.0.0:8080  $(pwd)/index.php

http://localhost:8080/
