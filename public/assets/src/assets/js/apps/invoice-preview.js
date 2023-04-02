document.querySelector('.action-print').addEventListener('click', function(event) {
    event.preventDefault();
    /* Act on the event */
    var element = document.getElementById("res");
    element.classList.remove("table-responsive");
    window.print();
    var element = document.getElementById("res");
    element.classList.add("table-responsive");
});