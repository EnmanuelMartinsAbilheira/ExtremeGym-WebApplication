<?php
    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' 
?>


    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    
    <main class="contenedor seccion">

        <h1>Onde Localizarnos?</h1>

        <div class="contenido-nosotros"> <!-- Mapa y foto entrada -->

            <div id="mapa" class="mapa"></div>

            <div class="imagen">
                <picture>
                    <source srcset="build/img/entradaA.webp" type="image/webp">
                    <source srcset="build/img/entradaA.png" type="image/png">
                    <img loading="lazy" src="build/img/entradaA.png" alt="Entrada gym">
                </picture>
            </div>

        </div>

        <div class="texto-nosotros">
            <blockquote>
                4 anos e muitos mais vao a vir 
            </blockquote>
        </div>

        
        <div class="contenido-nosotros"> <!-- Foto gym y describcion-->

            <div class="imagen2">
                <picture>
                    <source srcset="build/img/GymDentro.webp" type="image/webp">
                    <source srcset="build/img/GymDentro.png" type="image/png">
                    <img loading="lazy" src="build/img/GymDentro.png" alt="Entrada gym">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    Quem Somos Nos
                </blockquote>
                <p class="QuienSomos">Extreme Gym Fit mais que um ginásio é um marco do "old school" . <br> Caracterizado pelo seu ambiente familiar, acolhedor e descontraído, estamos aqui para o servir da melhor forma possível. <br> Trabalho, esforço e dedicação são os únicos instrumentos que levam ao verdadeiro sucesso. <br> Para tal somos compostos por uma equipa de profissionais qualificados sempre preparados e dispostos a ajuda-los e motiva-los nesse caminho. <br> Queremos partilhar a nossa paixão consigo. Vem treinar connosco, contagia-te e junta-te à nossa família!</p> 
            </div>

        </div>
        
        <br>

        <div class="contenido-nosotros"> <!--Experiencia professionar y describccion-->

            <div class="texto-nosotros">
                <blockquote>
                    Experiência do Profissional
                </blockquote>
                <p class="QuienSomos">Josué Ruben Gomes de Sousa é Personal Trainer, Diretor Técnico e Monitor de Sala no Extreme Gym Fit. <br>Licenciado e Mestre na área e conta com mais de 20 anos de experiência. <br> Dedicado ao culto do corpo e atleta federado na I.F.B.B. há 15 anos o seu principal objetivo é ajudar os clientes a alcançarem as suas metas e vai em busca de resultados. <br>Trabalhando tanto com pessoas que queiram perder peso como com pessoas que queiram aumentar de peso e ganhar massa muscular, também faz correção de postura, trabalhando com pessoas que têm problemas de coluna e outras patologias.</p> 
            </div>

            <div class="imagen2">
                <picture>
                    <source srcset="build/img/josueOlimpic.webp" type="image/webp">
                    <source srcset="build/img/josueOlimpic.png" type="image/png">
                    <img loading="lazy" src="build/img/josueOlimpic.png" alt="Entrada gym">
                </picture>
            </div>

        </div>
        
        <div class="texto-resultados">
            <blockquote>
                Resultados Antes e Depois
            </blockquote>
        </div>

        <div class="contenido-nosotros-resultados"> <!--Experiencia professionar y describccion-->

            <div class="imagen">
                <picture>
                    <source srcset="build/img/RuiResultados.webp" type="image/webp">
                    <source srcset="build/img/RuiResultados.png" type="image/png">
                    <img loading="lazy" src="build/img/RuiResultados.png" alt="Entrada gym">
                </picture>
                <p class="QuienSomos">Rui Oliveira entrou no Extreme Gym Fit com 120 kg e tinha o objetivo de perder peso e ao fim de um ano atingiu a sua meta.</p> 
            </div>

            <div class="imagen">
                <picture>
                    <source srcset="build/img/DianaResultados.webp" type="image/webp">
                    <source srcset="build/img/DianaResultados.png" type="image/png">
                    <img loading="lazy" src="build/img/DianaResultados.png" alt="Entrada gym">
                </picture>
                <p class="QuienSomos">Diana Gonçalves entrou no Extreme Gym Fit com 81kg e tinha o objetivo de perder peso e aumentar a massa muscular. Ao fim de 6 meses já era possível verificar diferenças.</p> 
            </div>

            <div class="imagen">
                <picture>
                    <source srcset="build/img/NunoResultados.webp" type="image/webp">
                    <source srcset="build/img/NunoResultados.png" type="image/png">
                    <img loading="lazy" src="build/img/NunoResultados.png" alt="Entrada gym">
                </picture>
                <p class="QuienSomos">Nuno Lima entrou no Extreme Gym Fit com 56kg e tinha o objetivo de aumentar de peso e ganhar massa muscular. Ao fim de 3 meses já era possível verificar diferenças.</p> 
            </div>

        </div>

        <!-- <section class="section-scrolling">
            <div class="texto-scrolling">
                <h2 style="--i:0.5"><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span></h2>
                <h2 style="--i:1.5"><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span></h2>
                <h2 style="--i:2.0"><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span></h2>
                <h2 style="--i:1.65"><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span></h2>
                <h2 style="--i:1.25"><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span></h2>
                <h2 style="--i:0.25"><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span></h2>
                <h2 style="--i:0.75"><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span><span>Extreme Gym 2022</span></h2>
            </div>
        </section> -->

        <!-- <script>
            const position = document.documentElement;
            position.addEventListener("mousemove", e=> {
                position.style.setProperty('--x', e.clientX + 'px');
            })
        </script> -->

    </main>


<?php
    incluirTemplate('footer');
?>