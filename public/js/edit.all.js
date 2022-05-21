   //Xoa tat ca san pham

   $(".edit-all").on("click", function() {
       var lists = [];
       $("table tbody tr td").each(function() {
           $(this).find("input").each(function() {
               var element = { key: $(this).data("id"), value: $(this).val() };
               lists.push(element);
           })
       });
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       $.ajax({
           url: 'save-all',
           type: 'POST',
           data: {
               //    "_token": "{{ csrf_token() }}",
               "data": lists,
           }
       }).done(function(response) {
           location.reload();
           alertify.warning('Update successfully');
       });
   });

   function updateQuantity(quantity) {
       if (quantity != "") {
           console.log(quantity);
       }
   }