
$(document).ready(function()
{
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

});
