   // Them san pham vao gio hang
   function AddCart(id) {
        $.ajax({
            url: 'add-to-cart/' + id,
            type: 'GET',
        }).done(function(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            alertify.success('Item added successfully');
        });
    }

    //Xoa san pham khoi gio hang
    function DeleteItemCart(id) {
        $.ajax({
            url: 'delete-to-cart/' + id,
            type: 'GET',
        }).done(function(response) {
            $("#delete-cart").empty();
            $("#delete-cart").html(response);
            alertify.warning('Delete items successfully');
        });
    }


