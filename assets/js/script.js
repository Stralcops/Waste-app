
$(document).ready(function()
{
  M.AutoInit();

  $('.draggable').draggable();
  $('.sortable').sortable();
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
