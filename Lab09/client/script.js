$(document).ready(function() {


  $("#buttonSubmit").click(function(event) {

    event.preventDefault();

    var name = $("#subName").val();
    var desc = $("#subDesc").val();
    var url = $("#subUrl").val();

    var arr = {
      'name': name,
      'desc': desc,
      'url': url
    };

    var json = JSON.stringify(arr);

    $.ajax({
      type: "POST",
      dataType: "text",
      data: json,
      url: '../service/api.php',
      success: function(result) {
        $("#divSub").html(result);
      }
    });



  });


  $("#buttonRetrieve").click(function(event) {
    event.preventDefault();



    $.ajax({
      type: "GET",
      url: '../service/api.php',
      data: $("#retrieve").serialize(),
      dataType: "text",
      success: function(result) {
        $("#ret").html(result)
      },

      error: function(result){
				$("#ret").html(result);
			}
    });

  });


  $("#buttonUpdate").click(function(event) {
    event.preventDefault();


    var identifier = $("#select1").val();
    var match = $("#whatToUpdate").val();
    var change = $("#selects").val();
    var inputToChange = $("#update").val();


    var arr = {
      'identifier': identifier,
      'match': match,
      'change': change,
      'inputToChange': inputToChange
    };
    var json = JSON.stringify(arr);

    $.ajax({
      type: "PUT",
      url: '../service/api.php',
      data: json,
      dataType: "JSON",
      success: function(result) {
        $("#divUpd").html("Success");
      }
    });

    $("#divUpd").html("Success");


  });

  $("#buttonDelete").click(function(event) {
    event.preventDefault();

    var deleteID = $("#deleteID").val();

    var arr = {
      'ID': deleteID
    };
    var json = JSON.stringify(arr);

    $.ajax({
      type: "DELETE",
      url: '../service/api.php',
      data: json,
      dataType: "JSON",
      success: function(result) {
        $("#del").html("Success");

      }
    });

    $("#del").html("Success");

  });






});
