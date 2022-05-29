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

   function AddCartMul(id) {
       $.ajax({
           url: 'add-to-cart-mul/' + id + '/' + $('#quantity-item-' + id).val(),
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
           $(".delete-cart").empty();
           $(".delete-cart").html(response);
           alertify.error('Delete items successfully');
           location.reload();
           var proQty = $('.pro-qty');
           proQty.prepend('<span class="dec qtybtn">-</span>');
           proQty.append('<span class="inc qtybtn">+</span>');
           proQty.on('click', '.qtybtn', function() {
               var $button = $(this);
               var oldValue = $button.parent().find('input').val();
               if ($button.hasClass('inc')) {
                   var newVal = parseFloat(oldValue) + 1;
               } else {
                   // Don't allow decrementing below zero
                   if (oldValue > 0) {
                       var newVal = parseFloat(oldValue) - 1;
                   } else {
                       newVal = 0;
                   }
               }
               $button.parent().find('input').val(newVal);
           });
       });

   }
