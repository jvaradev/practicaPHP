var cont = 0;
function cambia() {
    cont += 1;
    if (cont%2==0) {
        document.getElementById('enlace').href='http://www.yahoo.es';
    }else{document.getElementById('enlace').href='http://www.google.com';}
    console.log(cont);
}