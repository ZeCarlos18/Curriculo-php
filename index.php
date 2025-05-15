<!DOCTYPE HTML>
<html lang='pt-BR'>
    <head>
        <meta chasrset='UTF-8'>
        <meta name='viewport' content='width = device - width, inicial-scale=1,0'>  
        <link rel='stylesheet' href = 'style.css'>
    </head>
    <body>
        <header>
            <?php
                $nomeCompleto = "JOSÉ CARLOS PINHEIRO RAMALHO";
                $idade = 20;
                $fotoperfil = "images/minha_foto.jpeg";
                $telefone = "(88) 9.9256-8070";
                $email = "jc443559@gmail.com";
            ?>
            <div class="perfil">
                <img src = "<?php echo $fotoperfil; ?>" alt="Foto de Perfil">
                <h1><?php echo $nomeCompleto; ?> </h1>
                <p>Idade: <?php echo $idade; ?> anos</p>
            </div>
            <div class="contato">
                <h3>CONTATOS:</h3>
                <p>Telefone: <?php echo $telefone; ?> </p>
                <p>Email: <?php echo $email; ?> </p>
            </div>
        </header>
        
        <section id='experiência'>
            <h2>Experiencia Profissional</h2>
            <?php 
                $experincias = [ 
                    [
                        "empresa" => "Peak Performance",
                        "cargo" => "Vendedor",
                        "periodo" => "2024 - 2025",
                        "descricao" => "Vendedor de consultoria"
                    ],
                    [
                        "empresa" => "Garapa",
                        "cargo" => "Bartender",
                        "periodo" => "2023 - ",
                        "descricao" => "Montador de drinks"
                    ]
            ];
            ?>
            <?php if (!empty($experincias)): ?>
                <ul>
                    <?php foreach ($experincias as $experincias): ?>
                        <li>
                            <h3><?php echo $experincias['cargo']; ?></h3>
                            <h4><?php echo $experincias['empresa']; ?></h4>
                            <p class="periodo"><?php echo $experincias['periodo']; ?></p>
                            <p><?php echo $experincias['descricao']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Sem experiencia profissional para mostrar.</p>
            <?php endif; ?>
        <h2>Objetivo</h2>
        <?php
            $objetivos =[
                [
                    "objetivo" => "Contribuir com minhas habilidades em beneficio desta empresa, fazendo parate efetiva do grau de colaboradores, tendo compromisso, respeito e fidelidade como funções principais"
                ]
            ];
            ?>
            <?php if (!empty($objetivos)): ?>
                <ul>
                    <?php foreach ($objetivos as $objetivo): ?>
                        <li>
                            <h3><?php echo $objetivo['objetivo']; ?></h3>                    
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php else: ?>
                    <p> Não tem nenhum objetivo a ser informado</p>
            <?php endif; ?>
        </section>
        <section id='cursos'>
            <h2>Cursos</h2>
            <?php
                $cursos = [
                    [
                        "nome" => "Bacharelado em Sistemas de Informação",
                        "instituicao" => "IFCE campus Cedro",
                        "periodo" => "06/03/2023 - "
                    ],
                    [
                        "nome" => "ENERGIF",
                        "instituicao" => "IFCE campus Cedro",
                        "periodo" => "23/08/2023 - 08/12/2023"
                    ]
                ];
            ?>
            <?php if(!empty($cursos)): ?>
                <ul>
                    <?php foreach ($cursos as $curso): ?>
                        <li>
                            <h3><?php echo $curso['nome']; ?></h3>
                            <h4><?php echo $curso['instituicao']; ?></h4>
                            <p class="periodo"><?php echo $curso['periodo']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Nenhum curso ou formação para mostrar</p>
            <?php endif; ?>
        </section>
        <section id='habilidades'>
            <h3>Habilidades</h3>
            <?php
                $habilidades =[
                        "PHP" => 5,
                        "HTML" => 9,
                        "CSS" => 9,
                        "JavaScript" => 0,
                        "Banco de Dados" => 9,
                        "PYTHON" => 9,
                        "C++" => 8,
                        "JAVA" => 7
                ];
                $hobbies = [
                        "Jogar Videogame" => 10,
                        "Estudar" => 8,
                        "Futebol" => 10,
                        "Correr" => 8,
                        "Viajar" => 10
                ];
            ?>
            <?php if (!empty($habilidades)): ?>
                <ul>
                    <?php foreach ($habilidades as $habilidade => $nivel): ?>
                        <li>
                            <?php echo $habilidade; ?>
                            <div class="barra-nivel">
                                <?php for ($i = 0; $i < $nivel; $i++): ?>
                                    <span class="preenchido habilidade"></span>
                                <?php endfor; ?>
                                <?php for ($i = $nivel; $i < 10; $i++): ?>
                                    <span></span>
                                <?php endfor; ?>
                                (<?php echo $nivel; ?>/10)
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <h3>Hobbies</h3>
            <?php if (!empty($hobbies)): ?>
                <ul>
                    <?php foreach ($hobbies as $hobby => $interesse): ?>
                        <li>
                            <?php echo $hobby; ?>
                            <div class="barra-nivel">
                                <?php for ($i = 0; $i < $interesse; $i++): ?>
                                    <span class="prenchido hobby"></span>
                                <?php endfor; ?>
                                <?php for ($i = $interesse; $i <10; $i++): ?>
                                    <span></span>
                                <?php endfor; ?>
                                (<?php echo $interesse; ?>/10)
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <h3>Idiomas</h3>
            <?php
                $idiomas = [
                        "ingles" => 6,
                        "portugues" => 10,
                        "espanhol" => 7
                    ];
            ?>
            <?php if (!empty($idiomas)): ?>
                <ul>
                    <?php foreach ($idiomas as $idioma => $fluente): ?>
                        <li>
                            <?php echo $idioma; ?>
                            <div class="barra-nivel">
                                <?php for ($i = 0; $i < $fluente; $i++): ?>
                                    <span class="preenchido idioma"></span>
                                <?php endfor; ?>
                                <?php for ($i = $fluente; $i < 10; $i++): ?>
                                    <span></span>
                                <?php endfor ?>
                                (<?php echo $fluente ?>/10)
                                </div>
                        </li>
                    <?php endforeach; ?>             
                </ul>
            <?php endif; ?>
        </section>
        <footer>
            <p>© José Carlos</p>
        </footer>
    </body>
</html>