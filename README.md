#PetTOP

## Projeto Trainee, Code Jr, 2019.1



Desenvolvedores:
-Fabrício,
-Luiz Eduardo,
-Rodrigo,
-Vinicius




Scrum Master:
-Felippe Lôbo




Acompanhante:
-Gabriel Chaves



## GIT TUTORIAL


### Primeira configuração



- Entre na pasta onde irá guardar o projeto: cd /caminho/para/a/pasta

- Inicialize o git na pasta: git init



- Crie um clone do repositório: git clone <link-para-o-repositorio>

- Entre na pasta criada pelo comando clone: cd /caminho/para/a/pasta/nova



- Crie sua branch usando como o padrão o nome da feature que você está a desenvolver: git checkout -b frontend_painel_adm



### Rotina


- Adicione as alterações feitas: git add .



- Cheque em qual branch está e quais alterações foram adicionadas: git status



- Dê um commit com uma mensagem especificando as alterações realizadas: git commit -m "mensagem especificando o que foi feito"



- Envie o commit feito para sua branch: git push origin suabranch

### Quando estiver tudo prontinho

- Para mesclar sua branch com a master (estando dentro da sua branch) para resolver possíveis conflitos com a master: git merge master



- Peça para o Scrum Master avaliar a sua branch.


### Quando tiver sido avaliado e estiver tudo certinho


- Volte para a master: git checkout master



- Mescle a master com as alterações enviadas para sua branch (apenas quando solicitado pelo SM): git merge suabranch



- Confirme o merge (apenas quando solicitado pelo SM): git push origin master

- Para atualizar a master: git pull



- Para atualizar alguma branch: git pull origin branch



- Para mesclar sua branch com a master (estando dentro da sua branch): git merge master



- Para confirmar o merge: git push origin suabranch
