#Atividade de manipulação de JSON com php

Consiste em uma atividade de programação web, o exercio proposto foi manipular um arquivo .json com php, 
onde o JSON contem enunciado de questões suas respectivas alternativas e as respostas corretas. Os alunos deveriam Criar uma tela de login,
uma de questionario e uma com o resultado do questionario, caso o aluno acerte 70% ou mais das questões ele é aprovado, caso contrario,
é reprovado, a seguir mostrarei o resultado da minha atividade.


Tela de Login:


![Cat](https://github.com/LeonardoAmorimjob/Questionariojson/blob/master/telas%20aplicacao/login.PNG)

Caso um dos campos fique em branco é disparado um alert informando que há campo(s) em branco, solicitando o preenchimento de todos os campos

![Cat](https://github.com/LeonardoAmorimjob/Questionariojson/blob/master/telas%20aplicacao/loginspreencher.PNG)

Se for preenchido usuario e senha então a seguinte tela sera apresentada.
![Cat](https://github.com/LeonardoAmorimjob/Questionariojson/blob/master/telas%20aplicacao/questionario.PNG)

Caso o usuario esqueça de assinalar alguma alternativa ao clicar no botão enviar sera exibido um alert para cada questão não assinalada e
e a quantidade de questões que faltam assinalar.
![Cat](https://github.com/LeonardoAmorimjob/Questionariojson/blob/master/telas%20aplicacao/questdesmarc.PNG)

Se a quantidade de questões assinaladas com a resposta certar for maior ou igual a 7 que equivale a 70% das questões exibira a seguinte
tela.
![Cat](https://github.com/LeonardoAmorimjob/Questionariojson/blob/master/telas%20aplicacao/telaaprovado.PNG)


Caso a quantidade de acerto for inferior a 7 correspondendo a menos de 70% de acertos exibira a seguinte tela.
![Cat](https://github.com/LeonardoAmorimjob/Questionariojson/blob/master/telas%20aplicacao/telarep.PNG)




