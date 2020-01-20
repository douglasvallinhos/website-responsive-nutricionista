<?php include_once 'includes/header.html' ?>
<?php
session_start();
?>

    <style>
        body{
            background-color: #e7ffda;

        }
    </style>

    <div class="parallax-container col s12 m12 l12 parallax-pages" style="height: 400px;">
        <div class="parallax"><img src="imagens/contato.jpg" class="responsive-img"></div>



        <section class="col s12 m12 l12">

            <div class="col offset-l4" style="padding-top:130px;">
                <h1 class="white-text light center wow flip parallaxh1" data-wow-delay="1s" style="text-shadow: 0.1em 0.1em 0.2em black;">Contato</h1>
            </div>


        </section>
    </div>

    <section class="col s12 m12 l12 center-align" style="font-family: quicksand">
        <?php
        if(isset($_SESSION['msg3'])):
            echo $_SESSION['msg3'];
            unset($_SESSION['msg3']);
        endif;
        ?>
        <h2 >Marque</h2>
        <h5 style="font-family: Brush Script MT">Sua Consulta!</h5>
        <h5>Atendimento aos Sábados das 9h às 17h</h5>
        <h6>Estou a inteira disposição por todas redes sociais, terei o imenso prazer em tirar todas as suas dúvidas.</h6>
    </section>


    <br>
    <br>
    <br>
    <div class="center-align">
        <div class="row">
            <section class="col s12 m12 l12">

                <article class="col  offset-s1 s12 offset-m4 m12">
                    <ul class="ulsocial2">



                        <li>
                            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511976701909">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.facebook.com/NutricionistaCarolineVallinhos/">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/nutricionistacarolinevallinhos/">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://br.linkedin.com/in/caroline-vallinhos-72657b37">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </article>
            </section>
        </div>
    </div>

    <br><br>
    <section class="col s12 m12 l12 center-align" style="font-family: quicksand">
        <h5>Email: <b>contato@carolinevallinhos.com.br</b></h5>
    </section>




    <div class="row container" style="border-radius: 20px;">
        <p>&nbsp</p>
        <form action="enviar_email.php" method="post" class="col s12 m12 offset-l2 l8">
            <fieldset class="formulario white" style="border-color: #103321;">
                <legend><img src="imagens/carol_avatar.jpg" class="circle" alt="[Imagem de Cadastro]" width="100"></legend>
                <h4 class="light center quicksandbold wow fadeInUp" data-wow-offset="150">Entre em contato</h4>



                <div class="input-field col s12 l12 wow fadeInUp" data-wow-offset="150">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlength="40" required>
                    <label for="nome">Nome(Obrigatório)</label>
                </div>

                <div class="input-field col s12 l12 wow fadeInUp" data-wow-offset="150">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" maxlength="50" required>
                    <label for="email">E-mail(Obrigatório)</label>
                </div>

                <div class="input-field col s12 l12 wow fadeInUp" data-wow-offset="150">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" maxlength="15" placeholder="(XX)XXXXX-XXXX">
                    <label for="telefone">Celular</label>
                </div>



                <div class="input-field col s12 l12 wow fadeInUp" data-wow-offset="150">
                    <i class="material-icons prefix">list_alt</i>
                    <textarea id="mensagem" name="mensagem" class="materialize-textarea" maxlength="500" required></textarea>
                    <label for="detalhamento">Mensagem(Obrigatório)</label>
                </div>






                <div class="input-field col s12">
                    <input type="submit" value="Enviar" class="btn blue">
                    <input type="reset" value="Limpar" class="btn red">
                </div>


            </fieldset>
        </form>
    </div>


    <section class="col s12 m12 l12 center-align" style="font-family: quicksand">
        <h2 >SPA VINTAGE</h2>
        <h5 style="font-family: Brush Script MT">Conforto total em seu atendimento!</h5>
        <h5></h5>
        <h6>R. Franco da Rocha, 24 - Jardim Maia, Guarulhos - SP, 07115-200</h6>
    </section>
    <br>



    <section class="s12 m12 l12 hide-on-large-only">
        <div class="video-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.0320943715137!2d-46.53458598549186!3d-23.459306784733737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef54112470b21%3A0x44d049aa72202704!2sSPA+Vintage!5e0!3m2!1spt-BR!2sbr!4v1556756750486!5m2!1spt-BR!2sbr" width="1343" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>

    <section class="s12 m12 l12 hide-on-med-and-down">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.0320943715137!2d-46.53458598549186!3d-23.459306784733737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef54112470b21%3A0x44d049aa72202704!2sSPA+Vintage!5e0!3m2!1spt-BR!2sbr!4v1556756750486!5m2!1spt-BR!2sbr" width="1343" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>







<?php include_once 'includes/footer.html' ?>