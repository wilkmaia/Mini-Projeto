## Instru��o de Uso

Para testar o sistema, basta lan��-lo num servidor web com PHP incluso e acessar a p�gina inicial (index.html).

## Funcionamento

Foi criada uma empresa teste de nome "wilkmaia" no sistema do FaturaSimples para o desenvolvimento deste m�dulo.

Por quest�o de simplicidade, apenas o valor da venda � informado pelo cliente. N�o h� emiss�o de NFSe.

Quando o cliente insere o valor da venda e clica em "Inserir", h� uma nova inser��o de venda no sistema. O link do boleto � exibido para o cliente assim que gerado.

Na listagem de boletos, os 100 primeiros boletos s�o expostos (com data de emiss�o e valor). Caso houvesse mais de 100, uma solu��o para exibir todos seria um la�o de requisi��es com limite de 100 boletos e in�cio em 0, 100, 200, ... que parasse de executar quando n�o houvesse mais dados na resposta do servidor.