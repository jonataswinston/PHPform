<html>
<body>
<HEAD>
    <TITLE>Gerenciando Registros</TITLE>
</HEAD>
<BODY>
Preencha os campos abaixo:
</BODY>
<form method="post" action="gerencia-registro.php?acao=adicionar">
    <table>
        <tr>
            <TD>Nome do livro:</TD>
            <td>
                <input name="FormNomeLivro" maxlength="64">
            </td>
        </tr>
        <tr>
            <td>Nome do Autor:</td>
            <td>
                <input name="FormNomeAutor" maxlength="32">
            </td>
        </tr>
        <tr>
            <td>Nome da Editora:</td>
            <td>
                <input name="FormNomeEditora" maxlength="16">
            </td>
        </tr>
        <tr>
            <td colspan=2 align=right>
                <input type="reset" value="Limpar">
                <input type="submit" value="Cadastrar">
            </td>
        </tr>
    </table>
</form>
</body>
</HTML>