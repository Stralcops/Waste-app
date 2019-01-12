$(document).ready(function() {
  $('select').formSelect();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
  });

  setInterval(function() {
    $('.carousel').carousel('next');
  }, 10000);

  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      autoplay: true,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:8
          }
      }

  })
  $(document).ready(function(){

$("#btnMenu").click(function()
{
  if($('#section-menu-mobile').is(':hidden'))
  {
  $('#section-menu-mobile').slideDown(1000);
}
else
{
  $('#section-menu-mobile').slideUp(500);
}
}
)
  }
)


  $("#simulateur-pret .switch").click(function() {
    if ($('.off').hasClass('sw1')) {
      $('#simulateur-pret  .sw1').toggleClass('off on');
      $('#simulateur-pret  .sw2').toggleClass('on off');
      $('#range-montant').show();
      $('#range-mensualite').hide();
      calculePret();
    } else if ($('.off').hasClass('sw2')) {
      $('#simulateur-pret  .sw2').toggleClass('off on');
      $('#simulateur-pret  .sw1').toggleClass('on off');

      $('#range-mensualite').show();
      $('#range-montant').hide();
      calculeMontantPret();
    }
  })

  /**** SLIDER MENSUALITE ***/
  var mensualite = document.getElementById('mensualite');
  var mensualite_txt = document.getElementById('mensualite-txt');
  var slider_mensualite_credit = document.getElementById('slider-mensualite-credit');
  noUiSlider.create(slider_mensualite_credit, {
   start: [800],
   connect: true,
   tooltips:false,
   step: 10,
   orientation: 'horizontal', // 'horizontal' or 'vertical'
   range: {
     'min': 100,
     'max': 3000
   },
   format: wNumb({
     decimals: 0
   })
  });
  slider_mensualite_credit.noUiSlider.on('update', function( values, handle ) {
      var format_mensualite= Intl.NumberFormat( { style: 'currency', currency: 'EUR' }).format(Math.round(values));
      mensualite_txt.innerHTML = format_mensualite + " €";
      mensualite.value = values;
      calculeMontantPret();
  });

  /**** SLIDER MONTANT ***/
  var prix = document.getElementById('prix');
  var prix_txt = document.getElementById('prix-txt');
  var slider_montant_credit = document.getElementById('slider-montant-credit');
  noUiSlider.create(slider_montant_credit, {
   start: [180000],
   connect: true,
   tooltips:false,
   step: 10000,
   orientation: 'horizontal', // 'horizontal' or 'vertical'
   range: {
     'min': 50000,
     'max': 600000
   },
   format: wNumb({
     decimals: 0
   })
  });
  slider_montant_credit.noUiSlider.on('update', function( values, handle ) {
      var format_prix= Intl.NumberFormat( { style: 'currency', currency: 'EUR' }).format(Math.round(values));
      prix_txt.innerHTML = format_prix + " €";
      prix.value = values;
      calculePret();
  });

  /**** SLIDER DUREE ***/
  var duree = document.getElementById('duree');
  var duree_txt = document.getElementById('duree-txt');
  var slider_duree_credit = document.getElementById('slider-duree-credit');
  noUiSlider.create(slider_duree_credit, {
   start: [20],
   connect: true,
   tooltips:false,
   step: 1,
   orientation: 'horizontal', // 'horizontal' or 'vertical'
   range: {
     'min': 7,
     'max': 30
   },
   format: wNumb({
     decimals: 0
   })
  });
  slider_duree_credit.noUiSlider.on('update', function( values, handle ) {
      duree_txt.innerHTML = Math.round(values) + " ans";
      duree.value = values;
      if ($('.off').hasClass('sw1')) {
        calculeMontantPret();
      }else{
        calculePret();
      }

  });



  /*** INITIALIZE ***/
  calculePret();
  $('#range-montant').show();
  $('#range-mensualite').hide();

});

function calculeMontantPret(){
  var taux_interet = $("#taux-interet").val()/100;
  var taux_assurance = $("#taux-assurance").val()/100;
  var mensualiteCredit  = mensualite.value;
  var duree_credit = duree.value;
  var montant_credit,
      totalCredit,
      totalAssurance = 0;
  var totaldepense = mensualiteCredit*duree_credit*12;

  montant_credit=mensualiteCredit / ((taux_interet/12 / (1-Math.pow(1+(taux_interet/12) , -(duree_credit*12)))) + (taux_assurance / 12));

  totalAssurance=montant_credit*taux_assurance*duree_credit;
  totalCredit=mensualiteCredit*12*duree_credit;

  $("#simulateur-pret .result_titre").html("MONTANT EMPRUNTABLE : ");
  $('#mensualite-credit').html( Intl.NumberFormat('fr-Fr', { style: 'currency', currency: 'EUR' }).format(montant_credit));
  $('#total-credit').html(Intl.NumberFormat('fr-Fr',  { style: 'currency', currency: 'EUR' }).format(totalCredit));
  $('#total-assurance').html(Intl.NumberFormat('fr-Fr',  { style: 'currency', currency: 'EUR' }).format(totalAssurance));
}


function calculePret(){
  var taux_interet = $("#taux-interet").val()/100;
  var taux_assurance = $("#taux-assurance").val()/100;
  var montant_credit = prix.value;
  var duree_credit = duree.value;
  var mensualiteCredit,
      totalCredit,
      totalAssurance = 0;

  totalAssurance=montant_credit*taux_assurance*duree_credit;
  mensualiteCredit = formule_calculeMensualitePret(montant_credit, taux_interet / 12, duree_credit * 12)+(totalAssurance/duree_credit/12);
  totalCredit=mensualiteCredit*12*duree_credit;

  $("#simulateur-pret .result_titre").html("MONTANT À REMBOURSER: ");
  $('#mensualite-credit').html( Intl.NumberFormat('fr-Fr', { style: 'currency', currency: 'EUR' }).format(mensualiteCredit)+'/mois');
  $('#total-credit').html(Intl.NumberFormat('fr-Fr',  { style: 'currency', currency: 'EUR' }).format(totalCredit));
  $('#total-assurance').html(Intl.NumberFormat('fr-Fr',  { style: 'currency', currency: 'EUR' }).format(totalAssurance));
}

function formule_calculeMensualitePret(PR, IN, PE) {
  var PAY = (PR * IN) / (1 - Math.pow(1 + IN, -PE))
  return PAY
}
$(document).ready(function()
{
  $('#section-formulaire').hide();
  $('.btnConnect').click(function()
  {
    $('#page').css('position', 'relative');
    $('#section-topHeader').css('position', 'absolute');
    $('#section-topHeader').css('top', '-50px');
if($('#section-formulaire').is(':hidden'))
{

  $('#section-formulaire').slideDown('1000');
  $('#section-formulaire').css('display', 'flex');
}
else
{
  $('#section-formulaire').slideUp('500');
}

  });
})


/*
function updateTextInput(val, id, type) {
  var nombre = Intl.NumberFormat().format(val);
  document.getElementById(id).innerHTML = $nombre + type;
}*/
