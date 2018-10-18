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
})