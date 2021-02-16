function btn_crea(){
    $('.col-md-4[data-type="Tech"]').toggleClass('is-hidden');
    $('.col-md-4[data-type="Créa"]').removeClass('is-hidden');
    $('#All').removeClass('active');
}

function btn_tech(){
    $('.col-md-4[data-type="Créa"]').toggleClass('is-hidden');
    $('.col-md-4[data-type="Tech"]').removeClass('is-hidden'); 
}

function btn_all(){
    $('.col-md-4[data-type="Créa"]').removeClass('is-hidden');
    $('.col-md-4[data-type="Tech"]').removeClass('is-hidden');
}

ScrollReveal({ duration: 1500 })
ScrollReveal().reveal('.logo_Ln6', {delay : 500});
ScrollReveal().reveal('.title_Ln6', {delay : 500});
ScrollReveal().reveal('.video-1', {delay : 500});
ScrollReveal().reveal('.video-2', {delay : 600});
ScrollReveal().reveal('#All', {delay : 500});
ScrollReveal().reveal('#Crea', {delay : 550});
ScrollReveal().reveal('#Tech', {delay : 600});
ScrollReveal().reveal('.personne');
ScrollReveal().reveal('.card-body', {delay : 500});
ScrollReveal().reveal('.promo');
ScrollReveal().reveal('.propos');
ScrollReveal().reveal('.bottom');
ScrollReveal().reveal('.carousel');
ScrollReveal().reveal('.logo');
ScrollReveal().reveal('.partenaires', {delay : 500});