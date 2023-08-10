function openAction(actionType) {
    var i;
    var x = document.getElementsByClassName("actions");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(actionType).style.display = "block";
}
$(".ID").click(function() {
    var $row = $(this).closest("tr"); // Find the row
    var $text = $row.find(".id").text(); // Find the text
    var url = "{{ route('user.get_user', ':id') }}";
    url = url.replace(':id', text);
    location.href = url;
});
