$(document).ready(function () {
  $("#contact-form").on("submit", function (e) {
    e.preventDefault()

    var form = $(this)
    var isChecked = form.find("#confirm-checkbox").prop("checked")

    if (isChecked) {
      $.ajax({
        url: "/mail.php",
        method: "POST",
        data: form.serialize(),
        success: function (result) {
          if (!result.success) {
            $("#inputs").hide()
            $("#success-message").show()
            setTimeout(function () {
              $("#inputs").show()
              $("#success-message").hide()
            }, 1500)
          } else {
            $("#inputs").hide()
            $("#error-message").show()
            setTimeout(function () {
              $("#inputs").show()
              $("#error-message").hide()
            }, 1500)
          }
        },
      })
    }
    return false
  })
})
