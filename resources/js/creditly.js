$(document).ready(function() {
    let i_card = document.getElementById('cardnumber');
    if( i_card != null ) {
        i_card.addEventListener('input', function(e) {
            const digits = e.target.value.replace(/[^0-9]/g, '');
            e.target.value = _.chunk(digits, 4).map(a => a.join('')).join(' ');
        });
    }
}, false);