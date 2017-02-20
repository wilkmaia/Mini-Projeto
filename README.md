## Instrução de Uso

Para testar o sistema, basta lançá-lo num servidor web com PHP incluso e acessar a página inicial (index.html).

## Funcionamento

Foi criada uma empresa teste de nome "wilkmaia" no sistema do FaturaSimples para o desenvolvimento deste módulo.

Por questão de simplicidade, apenas o valor da venda é informado pelo cliente. Não há emissão de NFSe.

Quando o cliente insere o valor da venda e clica em "Inserir", há uma nova inserção de venda no sistema. Todas as vendas são assumidas com a forma de pagamento "Boleto". O link do boleto é exibido para o cliente assim que gerado.

Na listagem de boletos, as 100 primeiras vendas são expostas (com data e valor). Não há verificação da forma de pagamento nas vendas devido à restrição de que todas são feitas por meio de boleto, a fim de simplificar o desenvolvimento. Caso houvesse outras formas de pagamento, uma simples verificação da forma de pagamento de cada venda poderia ser usada para exibi-la ou não.

Caso houvesse mais de 100, uma solução para exibir todos seria um laço de requisições com limite de 100 boletos e início em 0, 100, 200, ... que parasse de executar quando não houvesse mais dados na resposta do servidor.