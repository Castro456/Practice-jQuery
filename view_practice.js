// $(document).ready(function(){
  $(document).on("click",".editbtn",function(){
    console.log("Working....")
  var id=($(this).data('role'));
  // var oid = $("#6").text();
    var task = $('#'+id).children("td[data-target=task]").text();    
    console.log(id);
    console.log(task);

    // alert(task);
  })
// })