<?php
require_once __DIR__ . '/vendor/autoload.php';
\App\Common\Environment::loadEnv();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminário Servos de Cristo - Fazendo discípulos</title>

    <meta name="title" content="Seminário Servos de Cristo - Fazendo discípulos">
    <meta name="description" content="O Seminário Servos de Cristo fica localizado em Guarapari no estado do Espírito Santo.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://seminariosdc.com.br/">
    <meta property="og:title" content="Seminário Servos de Cristo - Fazendo discípulos">
    <meta property="og:description" content="O Seminário Servos de Cristo fica localizado em Guarapari no estado do Espírito Santo.">
    <meta property="og:image" content="imagens/SEO.jpg">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://seminariosdc.com.br/">
    <meta property="twitter:title" content="Seminário Servos de Cristo - Fazendo discípulos">
    <meta property="twitter:description" content="O Seminário Servos de Cristo fica localizado em Guarapari no estado do Espírito Santo.">
    <meta property="twitter:image" content="imagens/SEO.jpg">

    <link rel="shortcut icon" href="imagens/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/45b8095e03.js" crossorigin="anonymous"></script>
    <script src="script/jquery.min.js"></script>
    <script src="script/index.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</head>

<body>
    <header class="menu initial">
        <img class="menu__logo" src="imagens/logoBW--header.png" alt="Logo seminário SDC">
        <div class="nav__links">
                <a href="https://t.me/secretariasdc" target="_blank" rel="noreferrer noopener" aria-label="Contato telegram" class="menu__nav__icon">
                    <i class="fab fa-telegram-plane"></i>
                </a>
                <a href="https://api.whatsapp.com/send/?phone=5527981778384&text&app_absent=0" target="_blank" rel="noreferrer noopener" aria-label="Contato whatsapp" class="menu__nav__icon">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.instagram.com/sdcguarapari/" target="_blank" rel="noreferrer noopener" aria-label="Página no instagram" class="menu__nav__icon">
                    <i class="fab fa-instagram"></i>
                </a>
        </div>
    </header>


<div id="main" class="hero">
    <img class="hero__image" src="imagens/hero-index.jpg" alt="Jovens sorrindo para a camera" rel="preload" as="image">
</div>
<div class="card">
    <h1 class="card__title">Seminário Servos de Cristo</h1>
</div>
<div class="scroll"></div>

<section class="surfistas">
    <picture class="surfistas__image">
        <source type="image/webp" srcset="imagens/larry-elizabeth.webp"
            alt="Foto do pastor Larry Darby e de sua esposa Elizabeth Darby">
        <source type="image/jpg" srcset="imagens/larry-elizabeth.jpg"
            alt="Foto do pastor Larry Darby e de sua esposa Elizabeth Darby">
        <img src="imagens/larry-elizabeth.jpg" alt="Foto do pastor Larry Darby e de sua esposa Elizabeth Darby">
    </picture>
    </div>
    <div class="surfistas__row">
        <div class="surfistas__since">
            <div class="surfistas__age">
                <p id="-js-year"></p>
            </div>
            <div class="surfistas__phrase">
                <p>ANOS</p>
                <p>FAZENDO</p>
                <p>DISCÍPULOS</p>
            </div>
        </div>
        <div class="surfistas__content">
            <p>
                No ano de 1989, chegou em Guarapari o pastor americano Larry Darby e sua esposa Elizabeth Darby com a
                visão de fazer discípulos. O pastor já havia sido diretor de um seminário anteriormente e tinha o alvo
                de começar um novo seminário.
            </p>
            <br>
            <p>
                Com o crescimento da igreja em Guarapari e com a visão de preparar missionários, ele iniciou o seminário
                em 1999.
            </p>
            <br>
            <p>
                Desde então, temos tido o privilégio de ser uma ferramenta de Deus para preparar homens e mulheres, com
                o mesmo alvo de levar o nome de Jesus Cristo para todos os povos.
            </p>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta__intro">
        <h2 class="cta__title">Sobre o seminário</h2>
        <h3 class="cta__subtitle">Entenda um pouco de nossa rotina e do que fazemos no dia a dia em nossa base.</h3>
    </div>
    <div class="cta__content">
        <div class="cta__cards" data-number="01">
            <h4 class="title">Aulas</h4>
            <p class="content">
                Nossas aulas acontecem de terça a sábado, das 8h00 às 12h00. Todo o material didático é fornecido com
                apostilas em PDF, incluindo o questionário de perguntas, além do uso de livros de apoio para o
                desenvolvimento de cada matéria.
            </p>
        </div>
        <div class="cta__cards" data-number="02">
            <h4 class="title">Evangelismo</h4>
            <p class="content">
                Aos domingos, nossos alunos saem pela cidade de Guarapari para evangelizar. Nesse horário todos têm a
                oportunidade de colocar em prática a ordenança de Jesus: pregar o Evangelho (Marcos 16:15).
            </p>
        </div>
        <div class="cta__cards" data-number="03">
            <h4 class="title">Devocional</h4>
            <p class="content">
                O período devocional é um tempo separado para leitura bíblica e oração. Com duração de uma hora, é a
                primeira atividade na agenda dos alunos. Nossa escola entende que um período diário a sós com Deus é um
                hábito fundamental.
            </p>
        </div>
        <div class="cta__cards" data-number="04">
            <h4 class="title">Trabalho voluntário</h4>
            <p class="content">
                Os objetivos principais das atividades são a manutenção do campus e o aprendizado de uma ou mais
                profissões, assim como o desenvolvimento de responsabilidade, trabalho em grupo e conscientização em
                relação à administração dos recursos do Reino de Deus.
            </p>
        </div>
        <div class="cta__cards" data-number="05">
            <h4 class="title">Horário de estudo</h4>
            <p class="content">
                De segunda a sexta, nossos alunos têm como última atividade curricular do dia um período exclusivo para
                os estudos individuais. Cada aluno administra o uso desse período de estudos, a fim de cumprir com
                excelência suas obrigações acadêmicas.
            </p>
        </div>
        <div class="cta__cards" data-number="06">
            <h4 class="title">Escola</h4>
            <p class="content">
                O curso tem a duração de quatro anos, sendo três internos de estudo teórico e um de estágio
                supervisionado.
                Nossa escola visa preparar os alunos tanto no aspecto do conhecimento biblico quanto do seu
                desenvolvimento prático, ambos necessários aos trabalhos ministeriais.
            </p>
        </div>
    </div>
</section>

<div id="-js-instagram"></div>

<div id="footer">
    <section class="ending-page">
        <div class="ending__form">
            <form id="contato" action="send-email.php" method="POST">
                <h2 class="section__title">Contato:</h2>
                <p class="form__subtitle">Preencha nosso formulário e em breve entraremos em contato com você.</p>

                <div class="form__fields-wrapper">
                    <label class="form__label" for="nome">Nome:</label>
                    <input class="form__field" id="nome" type="text" name="nome" required></input>

                    <label class="form__label" for="email">E-mail:</label>
                    <input class="form__field" id="email" type="email" name="email" required></input>

                    <label class="form__label" for="whatsapp">Whatsapp:</label>
                    <input class="form__field" id="whatsapp" type="tel" name="whatsapp" minlength="15" maxlength="15"
                        pattern="\(\d{2}\)\s*\d{5}-\d{4}" required></input>

                    <label class="form__label" for="assunto">Assunto:</label>
                    <input class="form__field" list="assuntos" type="text" name="assunto" id="assunto">
                    <datalist id="assuntos">
                        <option value="Contato">
                        <option value="Desejo fazer uma visita">
                        <option value="Projetos">
                        <option value="Matrícula">
                        <option value="Informações">
                    </datalist>

                    <label class="form__label" for="mensagem">Digite sua mensagem:</label>
                    <textarea class="form__field form__field--textarea" id="mensagem" type="text" name="mensagem"
                        required></textarea>


                    <div class="g-cap-wrapper">
                        <div id="recaptcha" class="g-recaptcha"></div>
                        <div class="flex-message">
                            <button id="submit" type="submit" class="button">Enviar<span></span></button>
                            <div id="aviso-box" style="display: none;">
                                <i id="aviso-icon"></i>
                                <span id="aviso-span"></span>
                            </div>
                        </div>
                    </div>
                    <script src="./script/reCaptcha.js"></script>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer">
            <div class="footer__grid">
                <div class="footer__wrap">
                    <div>
                        <p class="footer__contato bold">E-mail:</p>
                        <p class="footer__contato">seminariosdc@gmail.com</p>
                    </div>

                </div>
                <div class="footer__wrap">
                    <div>
                        <p class="footer__contato bold">Telefone:</p>
                        <p class="footer__contato">+55 (27) 98177 8384</p>
                    </div>
                </div>
                <div class="footer__wrap">
                    <div>
                        <p class="footer__contato bold">Endereço:</p>
                        <p class="footer__contato">Rua Silvania Alves, 400 - Camurugi</p>
                        <p class="footer__contato">CEP 29210-310 - Guarapari - ES</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

</html>