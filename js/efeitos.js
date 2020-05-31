$(document).ready(function(){
	
	// ####### EFEITO LOGOTIPO #######
	$("#logotipo").on("mouseover",function(){
		$("#banner h1").addClass("efeito");
	}).on("mouseout",function(){
		$("#banner h1").removeClass("efeito");
	});
	$("#logotipo").on("mouseover",function(){
		$("#banner-noticias h1").addClass("efeito");
	}).on("mouseout",function(){
		$("#banner-noticias h1").removeClass("efeito");
	});
	$("#logotipo").on("mouseover",function(){
		$("#banner-unidari h1").addClass("efeito");
	}).on("mouseout",function(){
		$("#banner-unidari h1").removeClass("efeito");
	});
	$("#logotipo").on("mouseover",function(){
		$("#banner-noticias-impacto h1").addClass("efeito");
	}).on("mouseout",function(){
		$("#banner-noticias-impacto h1").removeClass("efeito");
	});
	$("#logotipo").on("mouseover",function(){
		$("#banner-especialidades h1").addClass("efeito");
	}).on("mouseout",function(){
		$("#banner-especialidades h1").removeClass("efeito");
	});
	$("#logotipo").on("mouseover",function(){
		$("#banner-academia h1").addClass("efeito");
	}).on("mouseout",function(){
		$("#banner-academia h1").removeClass("efeito");
	});
	$("#logotipo").on("mouseover",function(){
		$("#banner-lideri h1").addClass("efeito");
	}).on("mouseout",function(){
		$("#banner-lideri h1").removeClass("efeito");
	});

	// ####### EFEITO MENU DESCENDO PARA CONTEUDO #######
	$('.nav-menu a[href^="#"]').on('click', function(e) {
		e.preventDefault();
		var id = $(this).attr('href'),
				targetOffset = $(id).offset().top;
						
		$('html, body').animate({ 
			scrollTop: targetOffset - 100
		}, 500);
	});

	// ####### EFEITO BUSCA #######
	$("#input-busca").on("focus",function(){
		$("li.search").addClass("ativo");
	}).on("blur",function(){
		$("li.search").removeClass("ativo");
	});

	$(".thumbnails").owlCarousel({
		items: 3,
		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true
	});

	// ####### FUNÇÃO AVANCAR E VOLTAR CAROUSEL EVENTOS #######
	var owl = $(".thumbnails").data('owlCarousel');

	$('#btn-news-prev').on("click", function(){
		owl.prev();
	});
	$('#btn-news-next').on("click", function(){
		owl.next();
	});

	$(window).scroll(function(){
	    if ($(this).scrollTop() < 100) {
	        $('.titulo').fadeIn();
	    } else {
	        $('.titulo').fadeOut();
	    }
	});

	//Verifica se a Janela está no topo
	$(window).scroll(function(){
	    if ($(this).scrollTop() > 100) {
	        $('.scrollToTop').fadeIn();
	    } else {
	        $('.scrollToTop').fadeOut();
	    }
	});

	//Onde a mágia acontece! SUBIR AO TOPO
	$('.scrollToTop').click(function(){
	    $('html, body').animate({scrollTop : 0},800);
	        return false;
	});

	$('.scrollToTop-mobile').click(function(){
	    $('html, body').animate({scrollTop : 0},800);
	        return false;
	});

	// ####### MANTER O BARRA DE MENU FIXO NO TOPO #######
	$(window).scroll(function(){
	    if ($(this).scrollTop() > 50) {
	        $('.navbar').addClass('navbar-fixed-top');
	    } else {
	        $('.navbar').removeClass("navbar-fixed-top");
	    }
	});

	// ####### EFEITO IMAGEM BARRA DE MENU #######
	$(window).scroll(function(){
	    if ($(this).scrollTop() > 0) {
	        $("#bs-example-navbar-collapse-1 img").addClass("efeitoimg");
	    } else {
	        $("#bs-example-navbar-collapse-1 img").removeClass("efeitoimg");
	    }
	});

	function abreModal(){
      $.ajax({
        method: 'GET',
        //Caminho do arquivo do seu modal
        url: 'modal.html',
        success: function(data){              
          $('.modal').html(data);
          $('#myModal-galeria-teste').modal('show');
        }
      });
    }

	// ####### ALERTAS #######
	function alertagaleria() {
	  alert("Deseja fazer parte da familia X-Dbv (Desbravador Xtreme)?! É muito fácil. Envie o brasão e uma foto xtreme do seu clube para o nosso e-mail: 'contato@x-dbv.com.br' e seja um X-Dbv.")
	}
	// ####### EVENTOS CAROUSEL SLICK ########
	$(document).ready(function(){
	  $('.carousel-unidari').slick({
		dots: true,
		focusonselect: true,
	   	pauseOnFocus: false,
	   	pauseOnHover: false,
	    infinite: true,
	    speed: 300,
	    slidesToShow: 3,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 2000,
	    responsive: [
	      {
	        breakpoint: 1024,
	        settings: {
	          slidesToShow: 3,
	          slidesToScroll: 1,
	          infinite: true,
	          autoplay: true,
	    	  autoplaySpeed: 2000,
	          dots: true
	        }
	      },
	      {
	        breakpoint: 600,
	        settings: {
	          slidesToShow: 2,
	          slidesToScroll: 1,
	          infinite: true,
	          autoplay: true,
	    	  autoplaySpeed: 2000,
	          dots: true
	        }
	      },
	      {
	        breakpoint: 480,
	        settings: {
	          slidesToShow: 1,
	          slidesToScroll: 1,
	          infinite: true,
	          autoplay: true,
	    	  autoplaySpeed: 2000,
	          dots: true
	        }
	      }
	    ]
	  });
	});
});