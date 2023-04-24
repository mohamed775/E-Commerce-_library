$(document).on('click', '#checkout', function (e) {
    e.preventDefault();
   $.ajax({
      type: 'get',
      url: "{{route('get-checkout')}}",
      data: {
          amount: $('#price').val(),
      },
      success: function (data) {
          if (data.status == true) {
              $('#showPayForm').empty().html(data.content);
          } else {
           }
      }, error: function (reject) {
      }
  });
});