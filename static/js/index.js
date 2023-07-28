/** @format */
// add

function submitinsert(event) {
  event.preventDefault();
  var fn = $("#name").val();
  var ln = $("#lastname").val();
  var label = $(event.target).attr("data-label");
  submituser("../controller/insert.php", fn, ln, label);
}
//edit
function submitedit(event) {
  event.preventDefault();
  var fn = $("#name").val();
  var ln = $("#lastname").val();
  var label = $(event.target).attr("data-label");
  submituser("../controller/update.php", fn, ln, label);
}
//delete
function submitdelete(event) {
  event.preventDefault();
  var fn = $("#name").val();
  var ln = $("#lastname").val();
  var label = $(event.target).attr("data-label");
  submituser("../controller/delete.php", fn, ln, label);
}

function submituser(url, firstname, lastname, label) {
  var form_data = new FormData();
  form_data.append("FirstName", firstname);
  form_data.append("LastName", lastname);

  $.ajax({
    url: url,
    type: "POST",
    data: form_data,
    contentType: false,
    processData: false,
    cache: false,
    success: function (dataResult) {
      if (dataResult == true) {
        label == "Delete" ? location.reload() : alert(label); : 
      
    } else {
        alert(dataResult);
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {},
  });
}
