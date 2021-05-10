<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Devs</title>
</head>
<body>
    <div class="conteiner">
        <div class="box">
            <h1>Cadastro de Devs</h1>

            <form method="post" action="register_in_bd.php">
                <div>
                    <label>Nome</label></br>
                    <input class="enter-text" type="text" name="name" placeholder="Nome aqui"/>
                </div></br>
                <div>
                    <label>Email</label></br>
                    <input class="enter-text" type="email" name="email" placeholder="Email"/>
                </div></br>
                <div id="technologies">
                    <label>Tecnologias</label>
                    <label class="description">Selecione as tecnologias que possui especialidade</label>
                    
                    <div class="checkbox-display">
                        <div class="checkbox">
                            <input type="checkbox" name="techs[]" value="HTML">
                            <label for="HTML">HTML</label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="techs[]" value="CSS">
                            <label for="CSS">CSS</label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="techs[]" value="JavaScript">
                            <label for="JavaScript">JavaScript</label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="techs[]" value="React">
                            <label for="React">React</label>
                        </div>
                    </div>
                   
                    <div class="checkbox-display">
                        <div class="checkbox">
                            <input type="checkbox" name="techs[]" value="Python">
                            <label for="Python">Python</label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="techs[]" value="Node">
                            <label for="Node">Node</label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="techs[]" value="PHP">
                            <label for="PHP">PHP</label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="techs[]" value="Outra">
                            <label for="Outra">Outra</label>
                        </div>
                    </div>

                </div></br>
                <div>
                    <label>Experiências</label>
                    <label class="description">Descreva trabalhos e projetos que você participou</label>
                    <textarea type="text" id="message" name="description" rows="5" cols=30></textarea>
                </div>
                <div id="botao">
                   <input type="submit" class="btn_send" name="cadastrar" onclick="confirmaCad()" value="Cadastrar">
                </div>
            </form>
    
        </div>    
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</html>