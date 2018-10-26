$(function(){


    $('.toggle').click(function() {
        if($('.nav-website').hasClass('active')){
            $('.nav-website').slideUp('slow', function() {
                $(this).removeClass('active');
            });
        }else {
            $('.nav-website').addClass('active').hide().slideDown('slow');
        }
    })
    
    ScrollReveal().reveal('.scroll-frame-nav', { delay: 400, distance: '60px' });
    ScrollReveal().reveal('.scroll-frame-1', { delay: 700, distance: '90px' });
    ScrollReveal().reveal('.scroll-frame-2', { delay: 400, distance: '90px' });
    ScrollReveal().reveal('.scroll-frame-logo-1', { delay: 800, distance: '90px' });
    ScrollReveal().reveal('.scroll-frame-logo-2', { delay: 900, distance: '90px' });
    ScrollReveal().reveal('.scroll-frame-3', { delay: 700,  distance: '60px' });
    ScrollReveal().reveal('.scroll-frame-work-card', { delay: 500,  distance: '90px' });
    ScrollReveal().reveal('.scroll-frame-work-cards', { delay: 750,  distance: '70px' });

    if (!localStorage.getItem('visited') === 'yes') {
        swal({
            title: 'Olá!',
            text: 'Bem vindo! Espero que possas ter uma ideia em relação ao meu trabalho e também de mim.',
            icon: 'success',
            button: 'Navegar!'
        }).then(function() {
            localStorage.setItem('visited', 'yes');
        })  
    }

    $(window).resize(function() {
        $('.nav-website').show();
    })

    $(window).on('scroll', function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            //scrolling down
            $('header').addClass('fixed-mode');
        } else {
            //start position
            $('header').removeClass('fixed-mode');
        }
    })
})