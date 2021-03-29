# SimpleAcademySystem (Sistema simples de academia)
Nesta tarefa você irá desenvolver um site para academia, onde a pessoa que treina deve inserir seu nome, sexo, peso altura e escolher uma modalidade, ex: dança, musculação, boxe.  Após escolher a modalidade deve escolher seu plano de pagamento e informar quantidade de parcelas que deseja pagar. Ao final das escolhas o site deve imprimir na tela o Nome do aluno, sua situação de peso ideal, a modalidade que escolheu, valor do plano e todas parcelas de acordo com a opção selecionada.   

# Descrição dos arquivos

**index.html** = Entramos com nome, sexo, peso, altura e modalidade.

Através do método POST somos enviados ao arquivo:

**valor.php** = Onde é iniciada a sessão para armazenarmos todos os dados da pessoas em globais. É nesse arquivo que também é feito o cálculo do peso ideal. Também nesse arquivo que é exibido o preço das modalidades e oferecido planos e métodos de pagamentos.

Através do método POST somos enviados ao arquivo:

**pay.php** = É calculado o preço final baseada no preço do plano e é exibido a possibilidade de parcelar em até 12x.

Através do método POST somos enviados ao arquivo:

**finalizar.php** = É exibido tudo que foi criado como global. É dito se o peso da pessoa está ideal ou não, o preço da parcela, a quantidade de parcelas e o preço final, a modalidade e todos os dados pessoais da pessoa

Todos os arquivos possuem uma estruturação básica de CSS.
