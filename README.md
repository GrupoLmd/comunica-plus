# comunica-plus
MVP do projeto Comunica
# Migration
Esta migration cria a tabela usuarios no banco de dados do sistema Comunica Plus, contendo os campos id, nome, email (único), senha, perfil (com valores possíveis: aluno, gestão e psicopedagoga), escola, turma e serie (opcionais), além do campo status (ativo ou inativo, com padrão ativo) e os timestamps created_at e updated_at. Ela define a estrutura básica de usuários do sistema, permitindo o controle de diferentes tipos de acesso e informações acadêmicas associadas, enquanto o método down() realiza a remoção da tabela em caso de rollback da migration.
# Tabela Quizzes
Esta migration cria a tabela quizzes no banco de dados do sistema Comunica Plus, contendo os campos id, titulo, descricao (opcional), tipo (com valores possíveis triagem_inicial e psicopedagogico, tendo triagem_inicial como padrão), criado_por (chave estrangeira opcional relacionada ao usuário criador), ativo (booleano com padrão true) e os timestamps created_at e updated_at, além de estabelecer uma chave estrangeira que referencia o campo id da tabela usuarios com regra nullOnDelete, garantindo que, caso o usuário criador seja removido, o campo criado_por seja definido como nulo; o método down() deveria ser responsável por remover a tabela em caso de rollback da migration.
# Respostas
Este código é uma migration do Laravel que cria a tabela respostas, responsável por armazenar as respostas dos usuários em quizzes. A tabela possui chaves estrangeiras que relacionam cada resposta a um usuário (usuarios), a um quiz (quizzes) e a uma pergunta específica (perguntas), todas configuradas com exclusão em cascata para manter a integridade referencial. Além disso, inclui os campos resposta_texto (texto da resposta, opcional), peso (valor numérico padrão 0, usado para atribuir pontuação ou relevância) e os timestamps padrão (created_at e updated_at). O método down garante a reversão da migration, removendo a tabela caso seja necessário desfazer a operação.
# Resultados Triagem
Este código é uma migration do Laravel que cria a tabela resultados_triagem, usada para armazenar os resultados de uma triagem aplicada a usuários em quizzes. A tabela possui chaves estrangeiras que relacionam cada resultado a um usuário (usuarios) e a um quiz (quizzes), ambas com exclusão em cascata para manter a consistência dos dados. Os campos incluem informações como dificuldade_principal, perfil_aprendizagem e objetivo_principal, além de um nível de atenção definido por um enum (baixo, moderado, alto, com padrão baixo). Também há espaço para recomendações em texto (recomendacao_texto, opcional) e os timestamps padrão (created_at e updated_at). O método down garante a reversão da migration, removendo a tabela caso seja necessário desfazer a operação.
# Tabela Trilhas
Este código é uma migration do Laravel que cria a tabela trilhas, destinada a organizar percursos de aprendizagem ou sequências de conteúdos. A tabela inclui campos como titulo (nome da trilha), descricao (texto opcional explicativo), disciplina (área de conhecimento associada) e perfil_indicado (perfil de estudante recomendado). Também define o nível da trilha por meio de um enum (basico ou intermediario, com padrão basico) e um campo booleano ativa para indicar se a trilha está disponível, além dos timestamps padrão (created_at e updated_at). O método down garante a reversão da migration, removendo a tabela caso seja necessário desfazer a operação.
# Recomendações Trilhas
Este código é uma migration do Laravel que cria a tabela recomendacoes_trilha, responsável por registrar quais trilhas de aprendizagem são recomendadas a cada usuário. A tabela possui chaves estrangeiras que vinculam a recomendação a um usuário (usuarios), a um resultado de triagem (resultados_triagem) e a uma trilha específica (trilhas), todas com exclusão em cascata para manter a integridade dos dados. Além disso, define os campos origem (enum que indica se a recomendação foi gerada de forma automatica ou manual, com padrão automatica) e status (enum que acompanha o progresso da recomendação: recomendada, iniciada ou concluida, com padrão recomendada). Também inclui os timestamps padrão (created_at e updated_at). O método down garante a reversão da migration, removendo a tabela caso seja necessário desfazer a operação.
# Progresso Trilhas
Este código é uma migration do Laravel que cria a tabela progresso_trilhas, destinada a acompanhar o avanço dos usuários em cada trilha de aprendizagem. A tabela possui chaves estrangeiras que relacionam o progresso a um usuário (usuarios) e a uma trilha específica (trilhas), ambas com exclusão em cascata para manter a integridade dos dados. Os campos incluem percentual (inteiro que indica a porcentagem concluída, com padrão 0), concluida (booleano que marca se a trilha foi finalizada, padrão false) e ultima_atividade (texto opcional para registrar a última atividade realizada). Também são adicionados os timestamps padrão (created_at e updated_at). O método down garante a reversão da migration, removendo a tabela caso seja necessário desfazer a operação.
# Sinalizações Pedagogicas
Este código é uma migration do Laravel que cria a tabela sinalizacoes_pedagogicas, utilizada para registrar alertas ou acompanhamentos pedagógicos relacionados aos usuários. A tabela possui chaves estrangeiras que vinculam cada sinalização a um usuário (usuarios) e a um resultado de triagem (resultados_triagem), ambas com exclusão em cascata para manter a integridade dos dados. Os campos incluem nivel_atencao (enum com valores baixo, moderado ou alto, padrão baixo), motivo (texto explicando a razão da sinalização), origem (enum que indica se a sinalização veio da triagem ou de uma analise_psicopedagogica, padrão triagem) e status (enum que acompanha o andamento: novo, em_acompanhamento ou finalizado, padrão novo). Também são adicionados os timestamps padrão (created_at e updated_at). O método down garante a reversão da migration, removendo a tabela caso seja necessário desfazer a operação.
# Oportunidades
# Quiz

Este projeto contém o model `Quiz`, desenvolvido em Laravel, responsável por representar e gerenciar os dados de questionários na aplicação.

## Funcionalidades

- Define a tabela `quizzes`
- Permite preenchimento em massa dos campos principais
- Utiliza `HasFactory` para testes e seeders
- Relaciona o quiz com perguntas, respostas, resultados de triagem e criador

# Pergunta

A model `Pergunta` representa as perguntas de um quiz no sistema, utilizando o Eloquent ORM do Laravel.

## Funcionalidades

- Define a tabela `perguntas`
- Permite preenchimento dos campos `quiz_id`, `enunciado`, `tipo_resposta`, `categoria`, `ordem` e `ativo`
- Relaciona cada pergunta a um quiz
- Relaciona cada pergunta a várias respostas

# Resposta

A model `Resposta` representa as respostas fornecidas pelos usuários dentro do sistema de quizzes.

## Funcionalidades

- Define a tabela `respostas`
- Armazena `usuario_id`, `quiz_id`, `pergunta_id`, `resposta_texto` e `peso`
- Relaciona a resposta com usuário, quiz e pergunta

# ResultadoTriagem

A model `ResultadoTriagem` representa os resultados obtidos a partir das triagens realizadas pelos usuários.

## Funcionalidades

- Define a tabela `resultados_triagem`
- Armazena informações como dificuldade principal, perfil de aprendizagem, objetivo principal, nível de atenção e recomendação
- Relaciona o resultado com usuário e quiz
- Permite vínculo com recomendações de trilha e sinalizações pedagógicas

# Trilha

A model `Trilha` representa as trilhas de aprendizagem disponíveis na plataforma.

## Funcionalidades

- Define a tabela `trilhas`
- Armazena título, descrição, disciplina, perfil indicado, nível e status de atividade
- Relaciona trilhas com recomendações e progressos dos usuários

# RecomendacaoTrilha

A model `RecomendacaoTrilha` representa as recomendações de trilhas de aprendizagem geradas para os usuários.

## Funcionalidades

- Define a tabela `recomendacoes_trilha`
- Armazena usuário, resultado de triagem, trilha, origem e status
- Relaciona a recomendação com usuário, resultado de triagem e trilha

# ProgressoTrilha

A model `ProgressoTrilha` representa o acompanhamento do progresso dos usuários nas trilhas de aprendizagem.

## Funcionalidades

- Define a tabela `progresso_trilhas`
- Armazena percentual de avanço, conclusão e última atividade
- Relaciona o progresso com usuário e trilha

# SinalizacaoPedagogica

A model `SinalizacaoPedagogica` representa as sinalizações pedagógicas geradas pelo sistema com base nos resultados das triagens.

## Funcionalidades

- Define a tabela `sinalizacoes_pedagogicas`
- Armazena usuário, resultado de triagem, nível de atenção, motivo, origem e status
- Relaciona a sinalização com usuário e resultado de triagem

# Oportunidade

O model `Oportunidade` representa as oportunidades cadastradas no sistema.

## Funcionalidades

- Define a tabela `oportunidades`
- Permite cadastrar título, descrição, categoria, datas, orientação e status de atividade
- Utiliza `HasFactory` para testes e factories

# Usuario

O `UsuarioSeeder` foi desenvolvido para popular automaticamente o banco de dados com usuários iniciais.

## Funcionalidades

- Cria usuários iniciais para testes
- Inclui perfis como gestão escolar, psicopedagogo(a) e alunos
- Criptografa senhas com `Hash::make()`
- Permite simular autenticação e funcionamento real do sistema

# Configuração do Vite

Responsável por configurar o ambiente frontend da aplicação.

## Funcionalidades

- Integra o React ao Vite
- Integra o Tailwind CSS ao sistema de build
- Define os plugins ativos do projeto
- Melhora a velocidade de desenvolvimento
- Permite hot reload durante o desenvolvimento
- Facilita a escalabilidade do frontend
- Otimiza o build final da aplicação

## Recursos utilizados

- `defineConfig`: estrutura e exporta a configuração principal do Vite
- Plugin React: adiciona suporte ao React, JSX e Fast Refresh
- Plugin Tailwind CSS: integra o Tailwind CSS ao processo de build

## Tecnologias

- Vite
- React
- Tailwind CSS

# Configuração Vite + React + Tailwind CSS

Responsável por configurar a base global de estilos da aplicação.

## Funcionalidades

- Configura a base global de estilos
- Define a tipografia padrão do sistema
- Define cores globais da interface
- Configura o tema visual dark mode da aplicação
- Melhora a renderização e a legibilidade dos textos
- Suaviza fontes em diferentes navegadores
- Padroniza o dimensionamento dos elementos da interface
- Remove estilos padrões do navegador
- Define a estrutura visual principal da aplicação
- Garante melhor responsividade em diferentes dispositivos
- Estabelece uma base moderna para React + Vite + Tailwind CSS
- Melhora a organização visual e a consistência da interface
- Prepara a aplicação para estilização escalável e otimizada

# Configuração Global de Estilos

Responsável pela padronização visual e estrutural da aplicação.

## Recursos

- Importação do Tailwind CSS
- Configuração global em `:root`
- Melhoria de legibilidade e suavização das fontes
- Reset global com `*`
- Configuração visual do `body`
- Tema escuro da interface
- Responsividade base

# Componente Sidebar

Componente responsável pela navegação lateral da aplicação.

## Funcionalidades

- Navegação entre páginas utilizando `NavLink` do React Router DOM
- Exibição da logo da aplicação
- Acesso às páginas Dashboard, Alunos e Professores
- Destaque automático da rota ativa
- Organização lateral do menu
- Melhoria da navegação e da experiência do usuário

## Tecnologias

- React
- React Router DOM
- Tailwind CSS

# Topbar Component

Componente responsável pelo topo da página principal do dashboard.

## Funcionalidades

- Exibe o título principal da página
- Mostra uma descrição do painel
- Apresenta informações do perfil do usuário
- Identifica o perfil como `Gestão Escolar`

## Tecnologias

- React
- Tailwind CSS

# Componente Principal da Aplicação

Responsável por inicializar a aplicação frontend.

## Funcionalidades

- Importa o sistema principal de rotas da aplicação
- Renderiza o componente `AppRoutes`
- Controla o carregamento principal da interface
- Serve como ponto de entrada da aplicação React
- Permite a exibição das páginas do sistema
- Centraliza a navegação da aplicação
- Exporta o componente principal do frontend

# Migration: oportunidades

Este código é uma migration do Laravel que cria a tabela `oportunidades`, destinada a registrar eventos, avisos ou competições relevantes para os usuários.

## Campos principais

- `titulo`: nome da oportunidade;
- `descricao`: texto opcional explicativo;
- `categoria`: define o tipo da oportunidade, podendo ser `olimpiada`, `competicao` ou `aviso`, com padrão `aviso`;
- `data_inicio`: data opcional para início da oportunidade;
- `data_fim`: data opcional para encerramento da oportunidade;
- `orientacao`: texto opcional com instruções ou recomendações;
- `ativo`: indica se a oportunidade está disponível, com padrão `true`;
- `created_at` e `updated_at`: timestamps adicionados automaticamente.

O método `down()` garante a reversão da migration, removendo a tabela caso seja necessário desfazer a operação.

# StatCard

Componente reutilizável para exibir indicadores e métricas importantes no dashboard.

## Funcionalidades

- Exibição de valor destacado
- Título e subtítulo
- Suporte a ícone personalizado
- Design com sombra e borda colorida

## Tecnologias

- React
- Tailwind CSS

# fetchApi

Função responsável pela comunicação com a API da aplicação.

## Recursos

- Define a URL base da API
- Realiza requisições utilizando `fetch`
- Trata erros de resposta
- Retorna dados em formato JSON

# getDashboardGestao

Serviço responsável por buscar os dados do dashboard de gestão através da API da aplicação.

## Funcionalidades

- Consumo do endpoint do dashboard
- Integração com `fetchApi`
- Organização da camada de serviços
- Retorno de dados da gestão

# DashboardGestaoPage

Página responsável pelo carregamento e exibição do dashboard de gestão da aplicação.

## Funcionalidades

- Busca de dados da API
- Controle de loading
- Tratamento de erros
- Integração com Sidebar
- Estrutura principal do dashboard

# DashboardPsicoPage

Página responsável pela exibição do painel psicopedagógico da aplicação.

## Funcionalidades

- Carregamento de dados da API
- Controle de loading e erros
- Exibição de métricas psicopedagógicas
- Visualização de motivos recorrentes
- Status de acompanhamento dos alunos
- Integração com Sidebar e StatCard

# AppRoutes

Componente responsável pelo gerenciamento das rotas da aplicação.

## Funcionalidades

- Configuração de navegação com React Router
- Redirecionamento da página inicial
- Rotas para dashboard de gestão
- Rotas para painel psicopedagógico
- Navegação entre páginas da aplicação

# getDashboardPsicopedagogico

Serviço responsável por buscar os dados do dashboard psicopedagógico através da API.

## Funcionalidades

- Consumo do endpoint psicopedagógico
- Integração com `fetchApi`
- Retorno de dados da API
- Organização dos serviços da aplicação

# getAlunosSinalizadosPage

Página responsável pela visualização detalhada dos alunos sinalizados no painel psicopedagógico.

## Funcionalidades

- Carregamento de dados da API
- Controle de loading e erros
- Exibição de métricas dos alunos
- Listagem detalhada de acompanhamento
- Visualização de níveis de atenção e status
- Integração com Sidebar
