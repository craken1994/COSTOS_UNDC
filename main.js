document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('myModal');
    var openModalBtn = document.getElementById('openModalBtn');
    var closeModalBtns = document.querySelectorAll('.close, #cancelBtn, #acceptBtn');

    openModalBtn.onclick = function() {
        modal.style.display = 'flex';
    }

    closeModalBtns.forEach(function(btn) {
        btn.onclick = function() {
            modal.style.display = 'none';
        }
    });

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});
