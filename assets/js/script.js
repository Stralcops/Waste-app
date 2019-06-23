var base_url = "http://localhost/waste-app/";

$(document).ready(function()
{
    $('.collapsible').collapsible();
    $.fn.dataTable.ext.errMode = 'none';
$('.data_table').DataTable({
  "language": {
    "sProcessing":     "Traitement en cours...",
    "sSearch":         "Rechercher&nbsp;:",
    "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
    "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
    "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
    "sInfoPostFix":    "",
    "sLoadingRecords": "Chargement en cours...",
    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
    "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
    "oPaginate": {
        "sFirst":      "Premier",
        "sPrevious":   "Pr&eacute;c&eacute;dent",
        "sNext":       "Suivant",
        "sLast":       "Dernier"
    },
    "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
    },
    "select": {
            "rows": {
                _: "%d lignes séléctionnées",
                0: "Aucune ligne séléctionnée",
                1: "1 ligne séléctionnée"
            }
    }
}
});

// $(".select2").select2();
   $('.tooltipped').tooltip();


$("#select_combat").change(function()
{
  $("#liste_mob_combat").load(base_url +"combats/liste_mob_combat", {
    "combat_id" : $("#select_combat").val()
  });
});

  $('.dropdown-trigger').dropdown();

$(".dropdown").mouseover(function(){
  var target = $(this).attr('data-target');
  // $(target).css(");
})


$("#ajout_mob").click(function()
{
  var data = {
    "select_mob" : $("#select_mob").val(),
    "combat_id" : $('#select_combat').val()
  };

  $.ajax({
    url:base_url +"combats/add_mob",
    type:"POST",
    data : data,
    success: function(result)
    {

      $("#liste_mob_combat").load(base_url +"combats/liste_mob_combat", {
        "combat_id" : $("#select_combat").val()
      });
      console.log(result);

    },
    error: function(result)
    {
      alert('erreur');
      console.log(result)

    }
  });
});



$("#ajout_combat").click(function()
{
  $('#modal1').load(base_url+'combats/modal_add_combat');
  $('.blocker').css('z-index', "99999");
  $('#modal1').modal('open');

});

    $('.dataTable').DataTable({
        "language": {
         "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
       }
    });
    // var table = $('#example').DataTable();

    // $('#example tbody').on('click', 'tr', function () {
    //     var data = table.row( this ).data();
    //     alert( 'You clicked on '+data[0]+'\'s row' );
    // } );

    $('.dropdown-trigger').dropdown();
    $('.collapsible').collapsible();
    $('.swalRemove').click( function()
    {
      swal({
    title: "Voulez-vous vraiment supprimer cet élément ?",
    text: "Une fois supprimé, il est impossible de restaurer cet élément!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("D'accord ! Cet élément a bien été supprimé !", {
        icon: "success",
      });
    } else {
      swal("D'accord, l'élément est conservé !");
    }
    });

      });
  });
