<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">Sobre</a></li>
                <li><a href="#services" class="menu-btn">Projetos</a></li>
                <li><a href="#skills" class="menu-btn">Habilidades</a></li>
                <li><a href="#contact" class="menu-btn">Contato</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Olá, meu nome é</div>
                <div class="text-2">Vitor Reichert Gonçalves</div>
                <div class="text-3">E eu sou <span class="typing"></span></div>
                <a href="https://www.linkedin.com/in/vitor-reichert-960246240/" target="_blank">linkedin</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Sobre mim</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Esse sou eu, um: <span class="typing-2"></span></div>
                    <p>Estudante de Tecnologia da informação na universidade Uniasselvi, atualmente no quarto período,  trabalhando como desenvolvedor WEB na empresa Doppus. 
                        Acredito que a tecnologia é o futuro, sempre me interessei por todas as inovações e foi um dos motivos para entrar na área e buscar me desenvolver, atualmente estudo diversas linguagens de programação, tanto Front-end e Back-end, possuo diplomas na área e estou a cada dia buscando me aperfeiçoar mais.
                        Sou uma pessoa com espirito de liderança, companheirismo e que busca sempre melhorar o local de trabalho, me moldo para atuar em diversas situações e ambientes.</p>
                    <a href="_Currículo.pdf" target="_blank">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Meus projetos</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <a href="https://github.com/Reichertt?tab=repositories&q=&type=&language=css&sort=" target="_blank">
                            <div class="text">Web Design</div>
                        </a>
                        <p>Projetos realizados com frameworks e linguagens</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <a href="https://github.com/Reichertt?tab=repositories&q=&type=&language=html&sort=" target="_blank">
                            <div class="text">Front-end</div>
                        </a>
                        <p>Projetos realizados em front-end.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <a href="https://github.com/Reichertt?tab=repositories&q=&type=&language=php&sort=" target="_blank">
                            <div class="text">Back-end</div>
                        </a>
                        <p>Projetos realizados em Back-end.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Minhas habilidades</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Minhas habilidades e experiências criativas.</div>
                    <p>Anteriormente vocês puderam ver quem eu sou e alguns dos meus projetos, sem dúvidas apenas por aqui, nunca conseguiria demonstrar meu total conhecimento. Estou sempre buscando aprimorar minhas habilidades e conhecimentos, aprendendo todos os dias diversas funcionalidades novas.</p>
                    <a href="#">consulte Mais informação</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- teams section start -->
 <section class="teams" id="teams">
    <div class="max-width">
        <h2 class="title">Profissões</h2>
        <div class="carousel owl-carousel">
            <div class="card">
                <div class="box">
                    <img src="images/download.jpg" alt="">
                    <div class="text">desenvolvedor JR</div>
                    <p>Atualmente na empresa <a href="https://doppus.com/">Doppus</a></p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="images/download.jpg" alt="">
                    <div class="text">Ànalista de suporte</div>
                    <p>03/2023 - 05/2023</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="images/download.jpg">
                    <div class="text">Assistente de suporte</div>
                    <p>01/2023 - 03/2023</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="images/nutritionessential_logo.jpg" alt="">
                    <div class="text">Auxiliar de produção</div>
                    <p>12/2021 - 01/2023</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">contato</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Entrar em contato</div>
                    <p>Gostaria de me conhecer melhor? entre em contato.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nome</div>
                                <div class="sub-title">Vitor Reichert Gonçalves</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Endereço</div>
                                <div class="sub-title">CEP 88131-618 Rua Ermiliano Cavalcanti - Nova Palhoça - Palhoça, SC.</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">vitor.r.goncalves@hotmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Deixe sua mensagem</div>
                    <form action="/messageForm.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input 
                                    name="name" 
                                    type="text"
                                    maxlength="25"
                                    placeholder="Nome" 
                                    required
                                />
                            </div>
                            <div class="field email">
                                <input 
                                    name="email" 
                                    type="email"
                                    maxlength="45"
                                    placeholder="Seu melhor E-mail" 
                                    required
                                />
                            </div>
                        </div>
                        <div class="field">
                            <input 
                                name="subject" 
                                type="text"
                                maxlength="45"
                                placeholder="Assunto" 
                                required
                            />
                        </div>
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Messagem.." required></textarea>
                        </div>
                        <div class="input-area">
                            <input 
                                class="formulario__botao" 
                                type="submit" 
                                value="Enviar" 
                            />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Criado por <a href="https://github.com/Reichertt" target="_blank">Vitor Reichert Goncalves</a> | <span class="far fa-copyright"></span> 2023 Todos os direitos reservados.</span>
    </footer>
    <script src="script.js"></script>

    </body>
</html>