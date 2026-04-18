document.addEventListener('DOMContentLoaded', function () {
    const select = document.getElementById('dzienSelect');
    const komunikat = document.getElementById('komunikat');

    select.addEventListener('change', function () {
        const dzien = select.value;
        let text = '';

        switch (dzien) {
            case 'poniedziałek':
                text = '月曜日：また一週間が始まった…がんばろう。';
                break;
            case 'wtorek':
                text = '火曜日：まだ火曜日か…先は長いな。';
                break;
            case 'środa':
                text = '水曜日：週の真ん中、あと少し！';
                break;
            case 'czwartek':
                text = '木曜日：もうちょっとで週末だよ！';
                break;
            case 'piątek':
                text = '金曜日：やった！週末が来た！';
                break;
            case 'sobota':
                text = '土曜日：ゆっくり休もう〜';
                break;
            case 'niedziela':
                text = '日曜日：のんびりしよう。でも明日は月曜…。';
                break;
            default:
                text = 'エラー：そんな曜日はないよ！';
        }

        komunikat.textContent = text;
    });
});