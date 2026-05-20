# comunica-plus
MVP do projeto Comunica


# Quiz
O model Quiz foi criado para representar os quizzes do sistema, funcionando como a estrutura principal de armazenamento das informações relacionadas às triagens, questionários ou avaliações da aplicação. Ele utiliza o recurso HasFactory, permitindo a criação de dados fictícios para testes e desenvolvimento, além de definir explicitamente a tabela quizzes no banco de dados. O atributo $fillable protege contra inserções indevidas e permite preenchimento em massa apenas dos campos titulo, descricao, tipo, criado_por e ativo. O model também possui relacionamentos importantes com outras entidades do sistema: um quiz pode possuir várias perguntas através do método perguntas(), várias respostas por meio de respostas(), e diversos resultados de triagem através de resultadosTriagem(). Além disso, o método criador() estabelece a relação entre o quiz e o usuário responsável pela sua criação utilizando belongsTo. Dessa forma, o model organiza toda a lógica de relacionamento necessária para o funcionamento dos quizzes dentro da aplicação Laravel.

