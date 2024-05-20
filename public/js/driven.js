

base_api = "http://127.0.0.1:8000/api/";
base_web = "http://127.0.0.1:8000/";

function getConsualtations() {
    alert();
    console.log("I am running ....");
    $.ajax({
        type: "GET",
        contentType: "application/json",
        dataType: "json",
        url: base_api+"consultations",
        success: function(response) {
            console.log(response);
            $('#userstable').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],

                "data": response,
                "columns": [{
                        "data": "file_number"
                    },

                    {
                        "data": "id",
                        "render": function(data, type, row) {
                            return ' <a href="/edit_product/' + row.id + '" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a><a href="/delete_product/' + row.id + '" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash"></i></a>'
                        }
                    }

                ]
            }).buttons().container().appendTo($('#example'));
        }

    });
}

// $(document).on("click", ".generateExpenses", function() {
//     $('#userstable').DataTable().destroy();
//     var start_date = $('#start_date').val();
//     var end_date = $('#end_date').val();
//     var branch_id = $('#branch_id').val();
//     $.post(base_api+"generate_expense_report", {
//             branch_id: branch_id,
//             start_date: start_date,
//             end_date: end_date
//         },
//         function(response) {
//             $('#userstable').DataTable({
//                 "responsive": true,
//                 "lengthChange": true,
//                 "autoWidth": false,
//                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],

//                 "data": response,
//                 "columns": [{
//                         "data": "date_captured"
//                     },
//                     {
//                         "data": "description"
//                     },
//                     {
//                         "data": "amount"
//                     },

//                 ]
//             }).buttons().container().appendTo($('#example'));
//         });
// });




// $(document).on("click", ".generate", function() {
//     $('#userstable').DataTable().destroy();
//     var start_date = $('#start_date').val();
//     var end_date = $('#end_date').val();
//     var branch_id = $('#branch_id').val();
//     $.post(base_api+"generate_report", {
//             branch_id: branch_id,
//             start_date: start_date,
//             end_date: end_date
//         },
//         function(response) {
//             $('#userstable').DataTable({
//                 "responsive": true,
//                 "lengthChange": true,
//                 "autoWidth": false,
//                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],

//                 "data": response,
//                 "columns": [{
//                         "data": "date_sold"
//                     },
//                     {
//                         "data": "code"
//                     },
//                     {
//                         "data": "name"
//                     },
//                     {
//                         "data": "selling_price"
//                     },

//                     {
//                         "data": "quantity"
//                     },
//                     {
//                         "data": "total_payed"
//                     }

//                 ]
//             }).buttons().container().appendTo($('#example'));
//         });
// });



// function showSuccessNotification(message, title) {
//     $(document).Toasts('create', {
//         class: 'bg-success',
//         title: title,
//         subtitle: '',
//         body: message
//       })
// }

// function showErrorNotification(message,title){
//     $(document).Toasts('create', {
//         class: 'bg-danger',
//         title: title,
//         subtitle: '',
//         body: message
//       })

// }

// Thumbnail image controls
