function deleteModel(event) {
    event.preventDefault();
    // var link = $(this).attr('href');
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Bạn chắc chắn muốn xóa bản ghi này',
        text: "Bản ghi sẽ được xóa và không được khôi phục",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Hủy bỏ',
        confirmButtonText: 'Đồng ý',
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire({
                            // position: 'top-end',
                            icon: 'success',
                            title: 'Đã xóa',
                            text: "Đã xóa bản ghi thành công",
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                },
                error: function () {
                }
            });
        }
    })
}
// function updateStatus(event) {
//     event.preventDefault();
//     // var link = $(this).attr('href');
//     let urlRequest = $(this).data('url');
//     let that = $(this);

//         $.ajax({
//             type: 'GET',
//             url: urlRequest,
//             success: function (data) {
//                 if (data.code == 200) {
//                     Swal.fire({
//                         // position: 'top-end',
//                         icon: 'success',
//                         title: 'Thành công',
//                         text: "Thay đổi trạng thái thành công",
//                         showConfirmButton: false,
//                         timer: 1500
//                     })
//                 }
//             },
//             error: function () {
//             }
//         });


// }
function deleteImageDetail(event) {
    event.preventDefault();
    // var link = $(this).attr('href');
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                },
                error: function () {
                }
            });
        }
    })
}
// $(function () {
//     $(document).on('click', '.action_update_status', updateStatus);
// });
$(function () {
    $(document).on('click', '.action_delete', deleteModel);
});
$(function () {
    $(document).on('click', '.action_delete_detail', deleteImageDetail);
});
