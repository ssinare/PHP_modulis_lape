document.querySelectorAll('button').forEach(b => {
    b.addEventListener('click', e => {
        console.log(b.value);
        console.log(b.closest('div').querySelector('input').value);//fetch metoda naudoti arba axios biblioteka
    })
})