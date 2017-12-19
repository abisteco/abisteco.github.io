# abisteco.github.io
# Insipiration

Avesta, da palavra pálavi p(y)stʾk/abestāg às vezes aportuguesado como **Abisteco**, faz parte das escrituras sagradas do zoroastrismo, que são os textos do Avesta e os textos do Pálavi.

- Construindo comunidades de boas vindas
- Construindo uma comunidade que incentive as pessoas a usar, contribuir e evangelizar seu projeto.

- Índice
  - Construindo comunidades de boas vindas
  - Configurando seu projeto para o sucesso
  - Você lançou seu projeto, você está espalhando a palavra, e as pessoas estão verificando isso. Impressionante! Agora, como você consegue ficar em volta?


> Uma comunidade acolhedora é um investimento no futuro e na reputação do seu projeto. Se o seu projeto está apenas começando as suas primeiras contribuições, comece por dar aos colaboradores adiantados uma experiência positiva, e facilite-os para que continuem voltando.

## Faça as pessoas se sentirem bem-vindas

# Funil do colaborador

> À medida que você constrói sua comunidade, considere como alguém no topo do funil (um usuário em potencial) pode, teoricamente, fazer o seu caminho para o fundo do funil (um mantenedor ativo). Seu objetivo é reduzir o atrito em cada etapa da experiência do colaborador. Quando as pessoas têm ganhos fáceis, eles se sentirão incentivados a fazer mais.

```
 |  \     U     /   Usuário        |
 |   \         /                   |
 |    \   C   /     Comunidade     |
 |     \     /                     |
 |      \ M /       Mantenedor     |
\|/      \ /                      \|/
 '        '                        '
```
# Comece com sua documentação:

A Documentação é o principal artefato para o iniciado. Seja honesto, pois o mesmo pode não gostar do que está por vir.
> Se a verdade não te inspira, talvez você nunca a tenha procurado.

## É importante sempre iniciar pelas boas práticas. O principal propósito é grande e universal.

É indicado o [RFC6749](https://tools.ietf.org/html/rfc6749) https://tools.ietf.org/html/rfc6749 para Autenticação e Autorização em plataformas híbridas. Estude e entenda-o. Muito suor e muito conhecimento está por traz deste algoritmo.

# Entendendo

## Fluxo abstrato do protocolo

```
  +--------+                               +---------------+
  |        |--(A)- Authorization Request ->|   Resource    |
  |        |                               |     Owner     |
  |        |<-(B)-- Authorization Grant ---|               |
  |        |                               +---------------+
  |        |
  |        |                               +---------------+
  |        |--(C)-- Authorization Grant -->| Authorization |
  | Client |                               |     Server    |
  |        |<-(D)----- Access Token -------|               |
  |        |                               +---------------+
  |        |
  |        |                               +---------------+
  |        |--(E)----- Access Token ------>|    Resource   |
  |        |                               |     Server    |
  |        |<-(F)--- Protected Resource ---|               |
  +--------+                               +---------------+
```
