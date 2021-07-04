$(function() {
    menuLeft = $('aside').hide()
    contentRight = $('section.contetn-right')

    var menu = $('.header-menu')
    
    menu.click(function() {
        menuLeft.toggleClass('active').show()
    })

    // Por animação na arrow ao clicar
    // $('#btn-prod').click(function() {
    //     $('#icon-arrow').css('transform','retate(180deg)')
    // })

    // $('#headerUm').collapse()
})