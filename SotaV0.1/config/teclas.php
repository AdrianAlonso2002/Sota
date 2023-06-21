<script>
    var cartasj1 = <?php echo json_encode($cartasj1); ?>;
    var cartasj2 = <?php echo json_encode($cartasj2); ?>;
    var modo = <?php echo json_encode($modo); ?>;
    var tipobot = <?php echo json_encode($j2); ?>;
    var barajaenjuego = [];

    document.addEventListener('keydown', function(event) {
        verificarCartas(cartasj1, cartasj2);
        if (event.key === 'z' && cartasj1.length > 0) {
            var cartaenjuego = document.getElementById('cartaenjuego');
            cartaenjuego.src = 'img/' + cartasj1[0] + '.PNG';

            barajaenjuego.push(cartasj1[0]);
            cartasj1.splice(0, 1);

            var cartasnumj1 = document.getElementById('numcartasj1');
            var numcartasj1 = numcartasj(cartasj1);
            cartasnumj1.textContent = numcartasj1;
            var cartasnumj2 = document.getElementById('numcartasj2');
            var numcartasj2 = numcartasj(cartasj2);
            cartasnumj2.textContent = numcartasj2;

        }
        if (event.key === ' ') {
            if (barajaenjuego.length >= 2) {
                var ultimaCarta = barajaenjuego[barajaenjuego.length - 1];
                var penultimaCarta = barajaenjuego[barajaenjuego.length - 2];

                if (ultimaCarta.charAt(0) === penultimaCarta.charAt(0)) {
                    alert("¡Bien! Las dos cartas tienen el mismo palo.");
                    cartasj2 = cartasj2.concat(barajaenjuego);
                } else {
                    alert("Mal, te quedas las cartas.");
                    cartasj1 = cartasj1.concat(barajaenjuego);
                }

                var cartaenjuego = document.getElementById('cartaenjuego');
                cartaenjuego.src = 'img/rev.png';
                // Limpiar el array barajaenjuego
                barajaenjuego = [];

                var cartasnumj1 = document.getElementById('numcartasj1');
                var numcartasj1 = numcartasj(cartasj1);
                cartasnumj1.textContent = numcartasj1;
                var cartasnumj2 = document.getElementById('numcartasj2');
                var numcartasj2 = numcartasj(cartasj2);
                cartasnumj2.textContent = numcartasj2;

            }
        }
        if (modo == "jugador") {
            if (event.key === 'ArrowLeft' && cartasj2.length > 0) {
                var cartaenjuego = document.getElementById('cartaenjuego');
                cartaenjuego.src = 'img/' + cartasj2[0] + '.PNG';

                barajaenjuego.push(cartasj2[0]);
                cartasj2.splice(0, 1);

                var cartasnumj1 = document.getElementById('numcartasj1');
                var numcartasj1 = numcartasj(cartasj1);
                cartasnumj1.textContent = numcartasj1;
                var cartasnumj2 = document.getElementById('numcartasj2');
                var numcartasj2 = numcartasj(cartasj2);
                cartasnumj2.textContent = numcartasj2;

            }
            if (event.key === 'ArrowRight') {
                if (barajaenjuego.length >= 2) {
                    var ultimaCarta = barajaenjuego[barajaenjuego.length - 1];
                    var penultimaCarta = barajaenjuego[barajaenjuego.length - 2];

                    if (ultimaCarta.charAt(0) === penultimaCarta.charAt(0)) {
                        alert("¡Bien! Las dos cartas tienen el mismo palo.");
                        cartasj1 = cartasj1.concat(barajaenjuego);
                    } else {
                        alert("Mal, te quedas las cartas.");
                        cartasj2 = cartasj1.concat(barajaenjuego);
                    }

                    var cartaenjuego = document.getElementById('cartaenjuego');
                    cartaenjuego.src = 'img/rev.png';
                    // Limpiar el array barajaenjuego
                    barajaenjuego = [];

                    var cartasnumj1 = document.getElementById('numcartasj1');
                    var numcartasj1 = numcartasj(cartasj1);
                    cartasnumj1.textContent = numcartasj1;
                    var cartasnumj2 = document.getElementById('numcartasj2');
                    var numcartasj2 = numcartasj(cartasj2);
                    cartasnumj2.textContent = numcartasj2;

                }
            }
        } else {
            if (tipobot == "novato") {
                alert("novato");
            }
            if (tipobot == "aficionado") {
                alert("aficionado");
            }
            if (tipobot == "profesional") {
                alert("profesional");
            }
            if (tipobot == "demonio") {
                alert("demonio");
            }
        }
    });

    function verificarCartas(cartasj1, cartasj2) {
        if (cartasj1.length === 0) {
            alert('¡Ha ganado el jugador 2!');
            exit();
        } else if (cartasj2.length === 0) {
            alert('¡Ha ganado el jugador 1!');
            exit();
        } else {
            console.log('Continuar el juego');
        }
    }

    function numcartasj(cartasj) {
        var numcartasj = cartasj.length;
        return numcartasj;
    }
</script>