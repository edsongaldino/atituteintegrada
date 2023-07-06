<?php
include("site-mod-include.php");
$status_envio = protege($_GET["envio"]); // id_empreendimento
// Gera recaptcha
$numeros_recaptcha = substr(str_shuffle("0123456789"), 0, 3);
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">

	<head>
		<meta charset="utf-8">
        <title>Atitude Integrada - Treinamento de Desenvolvimento Humano</title>
        <meta name="description" content="The description should optimally be between 150-160 characters.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Madeon08">
		<base href="https://www.atitudeintegrada.com.br/" />
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-retina-ipad.png">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-retina-iphone.png">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-standard-ipad.png">
        <!-- Standard iPhone Touch Icon--> 
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicon-standard-iphone.png">
		
		<!-- Author Meta -->
		<meta name="author" content="Datapix Tecnologia">
		<!-- Meta Description -->
		<meta name="description" content="Atitude Integrada é uma empresa de Treinamentos e Desenvolvimento Humano com o objetivo de valorizar o capital humano nas organizações.">
		<meta name="twitter:image" content="https://www.atitudeintegrada.com.br/img/logo-atdh.jpg">
		<meta property="og:url" content="https://www.atitudeintegrada.com.br" />
		<meta property="og:title" content="Atitude Integrada - Desenvolvimento Humano" />
		<meta property="og:description" content="Atitude Integrada é uma empresa de Treinamentos e Desenvolvimento Humano com o objetivo de valorizar o capital humano nas organizações." />
		<meta property="og:image" content="https://www.atitudeintegrada.com.br/img/logo-atdh.jpg" />
   
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="1067">
		<meta property="og:image:height" content="600">

        <!-- ============== Resources style ============== -->
        <link rel="stylesheet" href="css/style.css" />

		<!-- Modernizr runs quickly on page load to detect features -->
		<script src="js/modernizr.custom.js"></script>
	</head>
	
	<body>

		<?php if($status_envio == "erro"){?>
		<div class="box-message">
			<div class="alert alert-warning alert-dismissible show" role="alert">
				<strong><strong>Ops!</strong> Algo deu errado com sua solicitação. Pedimos desculpas! Tente novamente mais tarde.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
		<?php }?>

		<?php if($status_envio == "sucesso"){?>
		<div class="box-message">
			<div class="alert alert-success alert-dismissible show" role="alert">
				<strong><strong>OK!</strong> Sua solicitação foi enviada. <br/>Aguarde nosso contato em até 48h.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
		
		<?php }?>

		<!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
		
		<!-- Page preloader -->
		<div id="loading">
			<div id="preloader">
				<span></span>
				<span></span>
			</div>
		</div>

		<!-- Overlay and Star effect -->
		<div class="global-overlay">
			<div class="overlay skew-part light-overlay">

				<div id='stars'></div>
				<div id='stars2'></div>
				<div id='stars3'></div>

			</div>
		</div>

		<!-- START - Home/Left Part -->
		<section id="left-side">

			<!-- Your logo -->
			<img src="img/logo.png" alt="" class="brand-logo" />

			<div class="content">

				<h1 class="text-intro opacity-0">Começa em:
					<div id="getting-started"></div>
				</h1>

				<h2 class="text-intro opacity-0">Treinamento de Desenvolvimento Humano</h2>

				<nav>
					<ul>
						<li>
							<a href="#" id="open-more-info" data-target="right-side" class="light-btn text-intro opacity-0">Mais informações</a>
						</li>
						<li>
							<a data-dialog="somedialog" class="action-btn trigger text-intro opacity-0">Reserva</a>
						</li>
					</ul>
				</nav>

			</div>

			<!-- Social icons -->
			<div class="social-icons">

				<a href="https://wa.me/5565999091975?text=Gostaria de mais informações sobre o treinamento"><i class="fa fa-whatsapp fa-2x"></i></a>
				<a href="#"><i class="fa fa-facebook fa-2x"></i></a>
				<a href="#"><i class="fa fa-instagram fa-2x"></i></a>
				

			</div>

		</section>
		<!-- END - Home/Left Part -->

		<!-- START - More Informations/Right Part -->
		<section id="right-side" class="hide-right">

			<div class="content">

				<h3>Quem somos</h3>

				<p>Atitude Integrada é uma empresa de Treinamentos e Desenvolvimento Humano com o objetivo de valorizar o capital humano nas organizações.</p>

				<br><br>

				<div class="photo-line">
					
					<div class="my-gallery row" itemscope itemtype="https://schema.org/ImageGallery">

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6 clear-second">
							
							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-1.jpg" itemprop="contentUrl" data-size="1920x1280">
								
								<!-- Your picture -->
								<img src="img/gallery-3.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<p>Ampliar</p>
								
							</a>
								
							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">
								
									<h4>Nossa Equipe</h4>

									<span class="border"></span>

									<p>Nossa equipe é formada por consultores altamente qualificados que, juntos, agregam conhecimento técnico e experiência profissional na utilização dos mais modernos processos de aprendizado do mercado.</p>

								</div>

							</figcaption>

						</figure>

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6">
							
							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-2.jpg" itemprop="contentUrl" data-size="1920x1280">
								
								<!-- Your picture -->
								<img src="img/gallery-2.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<p>Click</p>
								
							</a>
								
							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">
								
									<h4>Treinamento de Desenvolvimento Humano</h4>

									<span class="border"></span>

									<p>Desenvolvemos treinamentos, palestras, seminários, destinados à atualização, reciclagem de conhecimento e aprendizado organizacionalcom a visão holística para o desenvolvimento pessoal.</p>

								</div>

							</figcaption>

						</figure>
							
					</div>

				</div>

				<span class="separator"></span>

				<h3>O Treinamento</h3>

				<p>Fechamento do treinamento com o impacto motivacional interno e as competências desenvolvidas, lançando o treinamento à consolidação prática dos conceitos e técnicas adquiridas.</p>

				<br><br>

				<div class="photo-line">
					
					<div class="my-gallery row" itemscope itemtype="https://schema.org/ImageGallery">

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6 clear-second">
							
							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-4.jpg" itemprop="contentUrl" data-size="1920x1280">
								
								<!-- Your picture -->
								<img src="img/gallery-4.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<p>Ampliar</p>
								
							</a>
								
							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">
								
									<h4>Objetivos</h4>

									<span class="border"></span>

									<ul>
										<li>Auto Avaliação;</li>
										<li>Reflexo do comportamento no ambiente profissional e pessoal;</li>
										<li>Desenvolvimento de competência para equilíbrio relacional;</li>
										<li>Otimização de Performance Profissional e Organizacional;</li>
										<li>Quebra de Paradigmas;</li>
										<li>Motivação;</li>
										<li>Superação de auto impacto.</li>
									</ul>

								</div>

							</figcaption>

						</figure>

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6">
							
							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-2.jpg" itemprop="contentUrl" data-size="1920x1280">
								
								<!-- Your picture -->
								<img src="img/gallery-2.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<p>+</p>
								
							</a>
								
							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">
								
									<h4>Ferramentas Utilizadas</h4>

									<span class="border"></span>

									<ul>
										<li>Técnicas de PNL (Programação Neurolinguística) e Linguagem Transformacional;</li>
										<li>Exercícios voltados ao desbloqueio e alinhamento das emoções básicas – quando limitantes;</li>
										<li>Vivências participativas com recursos audiovisuais;</li>
										<li>Jogos de comunicação interpessoal, desenvolvendo o espírito de equipe e atitude frente à própria equipe.</li>
									</ul>
								</div>

							</figcaption>

						</figure>

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6 clear-second">
							
							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-3.jpg" itemprop="contentUrl" data-size="1920x1280">
								
								<!-- Your picture -->
								<img src="img/gallery-3.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<span class="widget-angle-bottom-left">
									<span class="icon-text">
										<i class="icon ion-ios-star"></i>
									</span>
								</span>
								<p>+</p>
								
							</a>
								
							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">
								
									<h4>Benefícios</h4>

									<span class="border"></span>

									<ul>
										<li>Reflexos nos relacionamentos pessoais e profissionais</li>
										<li>Desenvolvimento de competências para equilíbrio relacional</li>
										<li>Trabalhar pela sinergia da equipe</li>
										<li>Desenvolver um clima organizacional favorável, impactando os resultados e criando oportunidades de melhoria.</li>
										<li>Valorização da afetividade nos relacionamentos pessoais e profissionais</li>
										<li>Compreensão da motivação, e sua relação com o comportamento.</li>
										<li>Reconhecimento de times vencedores</li>
									</ul>

								</div>

							</figcaption>

						</figure>
							
					</div>

				</div>

				<span class="separator"></span>

				<h3>Facilitador</h3>

				<p>Ubirajara Souto</p>

				<br><br>

				<div class="photo-line">
					
					<div class="my-gallery row" itemscope itemtype="https://schema.org/ImageGallery">

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6 clear-second">
							
							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/bira.jpg" itemprop="contentUrl" data-size="1920x1280">
								
								<!-- Your picture -->
								<img src="img/bira.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<p>Ampliar</p>
								
							</a>

						</figure>

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6">
														
							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">
								
									<h4>Formação</h4>

									<span class="border"></span>

									<ul>
										<li>Administrador de Empresas, com especialização em Marketing (FAUC);</li>
										<li>Consultor de empresas há mais de 15 anos;</li>
										<li>Ceo - Executivo do Sindicato da Habitação - Secovi MT, membro titular de Desenvolvimento Corporativo da Executiva Nacional Secovi Brasil;</li>
										<li>Trainer em PNL (Programação Neurolinguística);</li>
										<li>Master em Hipnose Clinica;</li>
										<li>Com formação em Hipnose Ericksoniana e Liderança Comportamental, com certificação internacional pela ACT.</li>
									</ul>
								</div>

							</figcaption>

						</figure>
							
					</div>

				</div>

				<h3>Informações e Reservas</h3>
				
				<p>Entre em contato que lhe enviaremos mais informações!</p>

                <!-- START - Contact Form -->
            	<form id="form-contact" name="contact-form" method="POST" action="envia-contato.php">
            		<div class="row">

                        <!-- Full name -->
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form form-control" placeholder="Seu Nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu Nome'" name="nome" data-name="Name" required>
                            </div>
                        </div>

                        <!-- E-mail -->
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu E-mail'" name="email" data-name="Email Address" required>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" id="subject" class="form form-control" placeholder="Telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Write the subject'" name="telefone" data-name="Subject">
                            </div>
						</div>
						
						<!-- Subject -->
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" id="subject" class="form form-control" placeholder="Assunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escreva o assunto'" name="assunto" data-name="Assunto">
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
                            <div class="form-group">
                                <textarea id="text-area" class="form textarea form-control" placeholder="Mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" name="mensagem" data-name="Text Area" required></textarea>
                            </div>
                        </div>

                    </div>

                	<!-- Button submit -->
					<input type="hidden" name="acao" value="envia-form-contato">
					<input type="submit" id="envia-form" class="btn btn-color" value="Quero mais informações">
    
                </form>
                <!-- END - Contact Form -->
	            
	            <!-- Answer for the contact form is displayed in the next div, do not remove it. -->       
                <div id="block-answer">

					<div id="answer"></div>

				</div>

				
				<div class="info-contact row">

                    <div class="col-xs-12 col-sm-4 col-lg-4 item-map">
                        <div class="contact-item"><i class="icon ion-ios-telephone"></i>
                            <p>Celular: (65) 99909-1975
                            <br>WhatsApp: (65) 99909-1975</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-lg-4 item-map">
                        <div class="contact-item"><i class="icon ion-ios-location"></i>
                            <p>Pousada São Francisco <br>Chapada dos Guimarães - MT</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-lg-4 item-map">
                        <div class="contact-item"><i class="icon ion-ios-email"></i>
                            <p><a href="mailto:atitudeintegrada@atitudeintegrada.com.br">atitudeintegrada@atitudeintegrada.com.br</a>
                            </p>
                        </div>
                    </div>

				</div>
				

			</div>
			<!-- /. Content -->

			<footer>

				<p>© Atitude Integrada - Treinamento de Desenvolvimento Humano</p>

			</footer>

		</section>
		<!-- START - More Informations/Right Part -->

		<!-- Button Cross to close the More Informations/Right Part -->
		<button id="close-more-info" class="hide-close"><i class="icon ion-ios-close-outline"></i></button>

		<!-- START - Newsletter Popup -->
		<div id="somedialog" class="dialog">

			<div class="dialog__overlay"></div>
					
			<div class="dialog__content">
						
				<div class="dialog-inner">
							
					<h4>Gostaria de Participar?</h4>
							
					<p>Preencha o formulário <strong>e se surpreenda!</strong></p>

					<!-- Newsletter Form -->
					<div id="subscribe">

		                <form action="envia-contato.php" id="contato-modal" method="POST">

		                    <div class="form-group">

		                        <div class="controls">
		                            
		                        	<!-- Field  -->
									<input type="text" id="nome-sub" name="nome" placeholder="Nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" class="form-control nome srequiredField" />
									<input type="text" id="mail-sub" name="email" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" class="form-control email srequiredField" />
									<input type="text" id="telefone-sub" name="telefone" placeholder="Telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" class="form-control telefone srequiredField" />

		                        	<!-- Spinner top left during the submission -->
		                        	<i class="fa fa-spinner opacity-0"></i>

		                            <!-- Button -->
									<input type="hidden" name="acao" value="envia-form-contato-rapido">
									<input type="submit" class="btn btn-lg submit" value="Quero participar">
		                            <div class="clear"></div>

		                        </div>

		                    </div>

		                </form>

        			</div>
        			<!-- /. Newsletter Form -->

				</div>
				<!-- /. dialog-inner -->

				<!-- Button Cross to close the Newsletter Popup -->
				<button class="close-newsletter" data-dialog-close><i class="icon ion-close-round"></i></button>

			</div>
			<!-- /. dialog__content -->
						
		</div>
		<!-- END - Newsletter Popup -->

		<!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		    <!-- Background of PhotoSwipe. 
	        	It's a separate element as animating opacity is faster than rgba(). -->
		    <div class="pswp__bg"></div>

		    <!-- Slides wrapper with overflow:hidden. -->
		    <div class="pswp__scroll-wrap">

		        <!-- Container that holds slides. 
		            PhotoSwipe keeps only 3 of them in the DOM to save memory.
		            Don't modify these 3 pswp__item elements, data is added later on. -->
		        <div class="pswp__container">
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		        </div>

		        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		        <div class="pswp__ui pswp__ui--hidden">

		            <div class="pswp__top-bar">

		                <!--  Controls are self-explanatory. Order can be changed. -->

		                <div class="pswp__counter"></div>

		                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

		                <button class="pswp__button pswp__button--share" title="Share"></button>

		                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

		                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

		                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
		                <!-- element will get class pswp__preloader--active when preloader is running -->
		                <div class="pswp__preloader">
		                    <div class="pswp__preloader__icn">
		                      <div class="pswp__preloader__cut">
		                        <div class="pswp__preloader__donut"></div>
		                      </div>
		                    </div>
		                </div>

		            </div>

		            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
		                <div class="pswp__share-tooltip"></div> 
		            </div>

		            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
		            </button>

		            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
		            </button>

		            <div class="pswp__caption">
		                <div class="pswp__caption__center"></div>
		            </div>

		        </div>

		    </div>

		</div>
		<!-- /. Root element of PhotoSwipe. Must have class pswp. -->

	<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
    <!-- ********** Resources jQuery ********** -->
    <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->
	
	<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easings.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- PhotoSwipe Core JS file -->
	<script src="js/velocity.min.js"></script> 

	<!-- PhotoSwipe UI JS file -->
	<script src="js/velocity.ui.min.js"></script> 

	<!-- Newsletter plugin -->
	<script src="js/notifyMe.js"></script>

	<!-- Contact form plugin -->
	<script src="js/contact-me.js"></script>

	<!-- Slideshow/Image plugin -->
	<script src="js/vegas-youtube-mobile.js"></script>

	<!-- YouTube plugin -->
	<script src="js/jquery.mb.YTPlayer.js"></script>

	<!-- Scroll plugin -->
	<script src="js/jquery.mousewheel.js"></script>

	<!-- Custom Scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.js"></script>

	<!-- Popup Newsletter Form -->
	<script src="js/classie.js"></script>
	<script src="js/dialogFx.js"></script>

	<!-- PhotoSwipe Core JS file -->
	<script src="js/photoswipe.js"></script> 

	<!-- PhotoSwipe UI JS file -->
	<script src="js/photoswipe-ui-default.js"></script>

	<!-- Countdown plugin -->
	<script src="js/jquery.countdown.js"></script>

	<script>
	$("#getting-started")
		// Year/Month/Day Hour:Minute:Second
		.countdown("2023/08/04 18:30:30", function(event) {
			$(this).text(
				event.strftime('%D Dias %Hh %Mm %Ss')
			);
	});
	</script>

	<!-- Main JS File -->
	<script src="js/main.js"></script>
	
	<!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

	</body>

</html>