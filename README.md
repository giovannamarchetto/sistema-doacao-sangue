# sistema-doacao-sangue

Este repositório contém a estrutura do banco de dados para um sistema de gestão de doações de sangue.

## Estrutura

O banco de dados consiste em duas tabelas principais:

- **doadores**: Armazena informações sobre os doadores registrados no sistema
- **doacoes**: Registra cada doação realizada pelos doadores

## Instruções de Uso

Para implementar este banco de dados:

1. Execute o script `schema.sql` em seu sistema de gerenciamento de banco de dados PostgreSQL
2. As tabelas serão criadas com alguns dados de exemplo já inseridos

## Próximos Passos

- Adicionar tabela para controle de estoque de sangue
- Implementar triggers para atualizar automaticamente a data da última doação
- Criar views para relatórios gerenciais
