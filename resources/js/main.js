(function() {
    'use strict';

    let cmds = document.getElementsByClassName('del');
    let i;

    for (i = 0; i < cmds.length; i++) {
        cmds[i].addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('削除します。よろしいですか?')) {
                document.getElementById('form_' + this.dataset.id).submit();
            }
        });
    }
})();

$(document).ready(function() {

    // チェック状態の初期値取得
    let ck_state = $('#ref').val();

    if (ck_state === '1') {
        $('#ref').prop('checked', true);
    } else {
        $('#ref').prop('checked', false);
    }

    $('#ref').click(function() {
        //チェックボックスのチェック状態を取得する
        let result = $('#ref').prop('checked');

        //チェック状態のバリュー値を設定する
        if (result) {
            $('#ref').val('1');
        } else {
            $('#ref').val('0');
        }
    });
});
