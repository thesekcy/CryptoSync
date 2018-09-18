# Bem-Vindo ao Sync!

Este é o projeto **CryptoSync**, uma plataforma de SmartContracts utilizando **Blockchain**.


# Arquivos

Abaixo alguns arquivos importantes para o desenvolvimento do projeto como **Diagrama de Classe**, **Diagrama de Caso De uso** entre outros diagramas.



> **Diagrama de Caso de Uso**
![enter image description here]https://github.com/thesekcy/CryptoSync/blob/master/_utilitarios/Diagrama_Caso_de_Uso.png?raw=true)

> **Diagrama de Classe**
> *Em desenvolvimento!*

> **Diagrama de Sequencia**
> *Em desenvolvimento!*

> **Diagrama de Atividade**
> *Em desenvolvimento!*

> **Mapa de Atividades**
> ![enter image description here](https://github.com/thesekcy/CryptoSync/blob/master/_utilitarios/Mapa%20De%20Atividades.png?raw=true)

# Como usar o GitHub

Está parte é voltada para o método correto de usar o GitHub no projeto, onde será aplicado as regras das Branches e como as usar de maneira correta.

> ## O que são Branches?
> Ao trabalhar com um time de desenvolvimento em um sistema, é comum termos diversos membros trabalhando em uma mesma funcionalidade ou termos que alterar uma funcionalidade já dada como pronta - arrumar bugs, por exemplo. Para evitar **avacalhar** com algo que já está pronto, podemos criar um _branch_. Um _branch_ serve como uma caixa de areia, criando uma cópia do estado atual do repositório onde se pode alterar sem a preocupação de estragar uma parte importante do sistema. Uma vez que as alterações propostas em um branch estiverem testadas e funcionando, é possível realizar a operação _merge_ com o _branch_ "original", ou seja, inserir as alterações na versão estável da funcionalidade.
> 
> >### O Sistema de Branches para o nosso projeto
> > Para devs, testers e demais membros do time, segue algumas explicações sobre o esquema de branches e deste repositório em geral:
> >
> 
> >-   **O branch  _master_** 
>  **nunca**  deve ser alterado diretamente. Nele está/estará contido a versão estável do sistema, que ja foi aprovada
> 
> >-   **O branch  _development_** 
> deve ser o ambiente onde as alterações feitas nos demais branches sejam aplicadas para testes para serem aprovadas para ir a branch _'master'_ .
> Uma vez que tais modificações sejam aprovados nos testes, poderá ser realizado um  _merge_  desse branch(_'development'_) com o _'master'_.
> 
> > -   **O branch  _feature/_**  
> São _branches_ nas quais serão desenvolvidos e implementados novos recursos (Stories/Issues). Essas _branches_ têm o nome começando com feature/* (exemplo: feature/login) e são criadas a partir da _branch_ _development_. Ao término do desenvolvimento da feature em questão, esta _branch_ será mesclada com a _development_ e em seguida apagada.
> 
> > -   **O branch  _hotfix/_**  
> São _branches_ nas quais são realizadas correções de bugs críticos encontrados no código em nível de produção, e que por isso são criadas a partir da _branch master_, e após correções são juntadas diretamente com a _branch master_, para que a versão atual seja corrigida, e com a _branch_ _development_ e a _branch release/, para que essa correção persista para as próximas versões. Essas _branches_ têm o nome começando com hotfix/ e terminando com o próximo sub-número de versão (exemplo: hotfix/2.31.1); Seguindo a nomenclatura de versionamento, abaixo.
> 
> > -   **O branch  _release/_**  
> São _branches_ com um nível de confiança maior do que a _branch_ _development_e a última chance de identificar e corrigir algum bug antes de ir para a _branch master_. Estas se encontram em nível de preparação para ser juntada com a _branch_ master e com a _branch_ _development_(para caso tenha ocorrido alguma correção de bug na branch release/* em questão). Essas _branches_ têm o nome começando com release/ e terminando com o número da próxima versão do software (seguindo o exemplo do hotfix, dado acima, seria algo como release/2.32.0).
> 
>> Basicamente, a hierarquia de branchs é a seguinte:
>> 
>> **master <-- release/ <-- development <-- feature/ feature2.
Tendo ainda a hotfix/ ligada diretamente a master, release e development.**      			


>### **Nomenclatura de versionamento**
>
>"Versão X.Y.Z", onde X,Y e Z são números positivos representando, respectivamente: Projeto, Features, Bugfix. Ou seja, esta >primeira versão do CryptoSync, Feature 5, correção do segundo bug achado ficaria: "Versão 1.5.2"
> 

> ## Padrões de Commit
> 
>     Atualização de Conteúdo 1.5.2 -- CryptoSync
>     Fábio Santana - 17/09/2018  
> 
> ###### **--seguindo a regra de Nomenclatura de Versionamento acima.**
> 
>  
> 
>     ||Conteúdo adicionado
>              
>      - Lista de conteúdo adicionado sem termos muito técnicos, será a visualização para o usuário final.
> 
> 
>     ||Conteúdo técnico adicionado
>     
>     - Lista de conteúdo adicionado com termos técnicos,será usado para o entendimento da equipe
>      no que foi realmente alterado ou adicionado.
> 
> 
>     ||Bugs/Problemas corrigidos
>     
>     - Relatar bugs e problemas que já foram encontrados e respectivamente corrigidos.
>     
>     
>     ||Bugs/Problemas encontrados
>     	
>     - Relatar bugs encontrados que ainda não foram corrigidos,
>     caso o bug seja critico é aconselhável que seja corrigido imediatamente.
