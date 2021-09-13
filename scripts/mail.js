$(document).ready(function () {

  $("#form").submit(function () {
    $.ajax({
      type: "POST",
      url: "postEmail.php",
      data: $(this).serialize()
    }).done(function () {
      $(this).find("input").val("");
      swal({
        title: "Спасибо за заявку!",
        text: "Скоро мы с Вами свяжемся.",
        icon: "success",
      });
      $("#form").trigger("reset");
    });
    return false;
  });

});
