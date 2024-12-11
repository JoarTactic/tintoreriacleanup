function MyModal(deleteUrl, dato){
    document.getElementById("MyFormDelete").action = deleteUrl;
    var label = document.getElementById("MyLabelEliminar");
    label.textContent = dato;
    $('#MyModal').modal('show');
}

$('#MyModal').on('hidden.bs.modal', function (e) {
    document.getElementById("MyFormDelete").action = "";
    var label = document.getElementById("MyLabelEliminar");
    label.textContent = "";
});

$(".closeModal").on("click", function (){
    $('#MyModal').modal('hide');
    document.getElementById("MyFormDelete").action = "";
    var label = document.getElementById("MyLabelEliminar");
    label.textContent = "";
});
