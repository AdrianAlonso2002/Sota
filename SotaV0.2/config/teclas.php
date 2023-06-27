<script>
    var cartasj1 = <?php echo json_encode($cartasj1); ?>;
    var cartasj2 = <?php echo json_encode($cartasj2); ?>;
    var modo = <?php echo json_encode($modo); ?>;
    var j1 = <?php echo json_encode($j1); ?>;
    var tipobot = <?php echo json_encode($j2); ?>;
    var barajaenjuego = [];
    var turno = 1;
    var turnosObligatoriosj1 = 0;
    var turnosObligatoriosj2 = 0;
    var contCaballo = 0;
    var contRey = 0;

    document.addEventListener('keydown', function(event) {
        //turno del j1 sin obligación
        if (turno === 1) {
            if (turno == 1 && turnosObligatoriosj1 == 0) {
                if (event.key === 'z' && cartasj1.length > 0) {
                    //alert("j1 normal");
                    var cartaenjuego = document.getElementById('cartaenjuego');
                    cartaenjuego.src = 'img/cartas/' + cartasj1[0] + '.PNG';
                    document.getElementById("flecha2").classList.add("flecha");
                    document.getElementById("flecha1").classList.remove("flecha");

                    barajaenjuego.push(cartasj1[0]);
                    cartasj1.splice(0, 1);

                    mostrarnumcartasj();

                    var cartaActual = barajaenjuego[barajaenjuego.length - 1];
                    if (cartaActual.charAt(0) === 'S') {
                        turnosObligatoriosj2 = 1;
                        turnosObligatoriosj1 = 0;
                    } else if (cartaActual.charAt(0) === 'C') {
                        turnosObligatoriosj2 = 2;
                        turnosObligatoriosj1 = 0;
                    } else if (cartaActual.charAt(0) === 'R') {
                        turnosObligatoriosj2 = 3;
                        turnosObligatoriosj1 = 0;
                    }

                    turno = 2;
                }
            }
            //turno j1 en sota de j2
            if (turno == 1 && turnosObligatoriosj1 == 1) {
                turnosObligatoriosj2 = 0;
                if (event.key == 'z' && cartasj1.length > 0) {
                    //alert("j1 en sota de j2");
                    var cartaenjuego = document.getElementById('cartaenjuego');
                    cartaenjuego.src = 'img/cartas/' + cartasj1[0] + '.PNG';
                    document.getElementById("flecha2").classList.add("flecha");
                    document.getElementById("flecha1").classList.remove("flecha");

                    barajaenjuego.push(cartasj1[0]);
                    cartasj1.splice(0, 1);

                    mostrarnumcartasj();

                    var cartaActual = barajaenjuego[barajaenjuego.length - 1];
                    if (cartaActual.charAt(0) === 'S') {
                        turnosObligatoriosj2 = 1;
                        turno = 2;
                    } else if (cartaActual.charAt(0) === 'C') {
                        turnosObligatoriosj2 = 2;
                        turno = 2;
                    } else if (cartaActual.charAt(0) === 'R') {
                        turnosObligatoriosj2 = 3;
                        turno = 2;
                    }
                    if (turnosObligatoriosj2 == 0) {
                        //alert("se lleva las cartas el j2");
                        cartasj1 = cartasj1.concat(barajaenjuego);
                        var cartaenjuego = document.getElementById('cartaenjuego');
                        // Limpiar el array barajaenjuego
                        barajaenjuego = [];
                        document.getElementById("flecha2").classList.add("flecha");
                        document.getElementById("flecha1").classList.add("flecha");
                        cartarev();

                        mostrarnumcartasj()

                        turno = 1;
                        turnosObligatoriosj1 = 0;
                    }
                }
            }
            //turno j1 en caballo de j2
            if (turno == 1 && turnosObligatoriosj1 == 2) {
                turnosObligatoriosj2 = 0;

                if (event.key == 'z' && cartasj1.length > 0) {
                    //alert("j1 en caballo de j2");
                    var cartaenjuego = document.getElementById('cartaenjuego');
                    cartaenjuego.src = 'img/cartas/' + cartasj1[0] + '.PNG';
                    document.getElementById("flecha2").classList.add("flecha");
                    document.getElementById("flecha1").classList.remove("flecha");

                    barajaenjuego.push(cartasj1[0]);
                    cartasj1.splice(0, 1);

                    mostrarnumcartasj();

                    var cartaActual = barajaenjuego[barajaenjuego.length - 1];
                    if (cartaActual.charAt(0) === 'S') {
                        turnosObligatoriosj2 = 1;
                        turno = 2;
                        contCaballo = 0;
                    } else if (cartaActual.charAt(0) === 'C') {
                        turnosObligatoriosj2 = 2;
                        turno = 2;
                        contCaballo = 0;
                    } else if (cartaActual.charAt(0) === 'R') {
                        turnosObligatoriosj2 = 3;
                        turno = 2;
                        contCaballo = 0;
                    }

                    contCaballo++;
                    if (turnosObligatoriosj2 == 0 && contCaballo == 2) {
                        //alert("se lleva las cartas el j2");
                        cartasj1 = cartasj1.concat(barajaenjuego);
                        var cartaenjuego = document.getElementById('cartaenjuego');
                        // Limpiar el array barajaenjuego
                        barajaenjuego = [];
                        document.getElementById("flecha2").classList.add("flecha");
                        document.getElementById("flecha1").classList.add("flecha");
                        cartarev();

                        mostrarnumcartasj();

                        turno = 1;
                        turnosObligatoriosj1 = 0;
                        contCaballo = 0;

                    }
                }
            }
            //turno j1 en rey de j2
            if (turno == 1 && turnosObligatoriosj1 == 3) {
                turnosObligatoriosj2 = 0;

                if (event.key == 'z' && cartasj1.length > 0) {
                    //alert("j1 en rey de j2");
                    var cartaenjuego = document.getElementById('cartaenjuego');
                    cartaenjuego.src = 'img/cartas/' + cartasj1[0] + '.PNG';
                    document.getElementById("flecha2").classList.add("flecha");
                    document.getElementById("flecha1").classList.remove("flecha");

                    barajaenjuego.push(cartasj1[0]);
                    cartasj1.splice(0, 1);

                    mostrarnumcartasj();

                    contRey++;

                    var cartaActual = barajaenjuego[barajaenjuego.length - 1];
                    if (cartaActual.charAt(0) === 'S') {
                        turnosObligatoriosj2 = 1;
                        turno = 2;
                        contRey = 0;
                    } else if (cartaActual.charAt(0) === 'C') {
                        turnosObligatoriosj2 = 2;
                        turno = 2;
                        contRey = 0;
                    } else if (cartaActual.charAt(0) === 'R') {
                        turnosObligatoriosj2 = 3;
                        turno = 2;
                        contRey = 0;
                    }
                    if (turnosObligatoriosj2 == 0 && contRey == 3) {
                        //alert("se lleva las cartas el j2");
                        cartasj1 = cartasj1.concat(barajaenjuego);
                        var cartaenjuego = document.getElementById('cartaenjuego');
                        // Limpiar el array barajaenjuego
                        barajaenjuego = [];
                        document.getElementById("flecha2").classList.add("flecha");
                        document.getElementById("flecha1").classList.add("flecha");
                        cartarev();

                        mostrarnumcartasj();

                        turno = 1;
                        turnosObligatoriosj1 = 0;
                        contRey = 0;

                    }
                }
            }
        } else {
            alert("Turno del bot");
        }
        if (event.key == ' ') {
            if (barajaenjuego.length >= 2) {
                var ultimaCarta = barajaenjuego[barajaenjuego.length - 1];
                var penultimaCarta = barajaenjuego[barajaenjuego.length - 2];

                if (ultimaCarta.charAt(0) === penultimaCarta.charAt(0)) {
                    alert("¡Bien! Las dos cartas tienen el mismo palo.");
                    cartasj1 = cartasj1.concat(barajaenjuego);
                } else {
                    alert("Mal.");
                    cartasj2 = cartasj2.concat(barajaenjuego);
                }

                var cartaenjuego = document.getElementById('cartaenjuego');
                cartaenjuego.src = 'img/rev.png';
                // Limpiar el array barajaenjuego
                barajaenjuego = [];
                document.getElementById("flecha2").classList.add("flecha");
                document.getElementById("flecha1").classList.add("flecha");
                cartarev();

                mostrarnumcartasj();

            }
        }
        if (modo == "jugador") {
            if (event.key === 'ArrowRight') {
                if (barajaenjuego.length >= 2) {
                    var ultimaCarta = barajaenjuego[barajaenjuego.length - 1];
                    var penultimaCarta = barajaenjuego[barajaenjuego.length - 2];

                    if (ultimaCarta.charAt(0) === penultimaCarta.charAt(0)) {
                        alert("¡Bien! Las dos cartas tienen el mismo palo.");
                        cartasj1 = cartasj1.concat(barajaenjuego);
                    } else {
                        alert("Mal.");
                        cartasj2 = cartasj1.concat(barajaenjuego);
                    }

                    var cartaenjuego = document.getElementById('cartaenjuego');
                    cartaenjuego.src = 'img/rev.png';
                    // Limpiar el array barajaenjuego
                    barajaenjuego = [];
                    document.getElementById("flecha2").classList.add("flecha");
                    document.getElementById("flecha1").classList.add("flecha");
                    cartarev();

                    mostrarnumcartasj();
                }
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("flecha1").classList.add("flecha");
        document.getElementById("flecha2").classList.add("flecha");

        //Bot novato
        function funcionNovato() {
            if (modo != "jugador") {
                if (tipobot == "novato") {
                    if (turno == 2) {
                        //turno del novato sin obligación
                        if (turno == 2 && turnosObligatoriosj2 == 0) {
                            //alert("j2 normal");
                            var cartaenjuego = document.getElementById('cartaenjuego');
                            cartaenjuego.src = 'img/cartas/' + cartasj2[0] + '.PNG';
                            document.getElementById("flecha1").classList.add("flecha");
                            document.getElementById("flecha2").classList.remove("flecha");

                            barajaenjuego.push(cartasj2[0]);
                            cartasj2.splice(0, 1);

                            mostrarnumcartasj();

                            var cartaActual = barajaenjuego[barajaenjuego.length - 1];
                            if (cartaActual.charAt(0) === 'S') {
                                turnosObligatoriosj1 = 1;
                            } else if (cartaActual.charAt(0) === 'C') {
                                turnosObligatoriosj1 = 2;
                            } else if (cartaActual.charAt(0) === 'R') {
                                turnosObligatoriosj1 = 3;
                            }

                            turno = 1;
                        }
                        //turno j2 en sota de j1
                        if (turno == 2 && turnosObligatoriosj2 == 1) {
                            turnosObligatoriosj1 = 0;
                            //alert("j2 en sota de j1");
                            var cartaenjuego = document.getElementById('cartaenjuego');
                            cartaenjuego.src = 'img/cartas/' + cartasj2[0] + '.PNG';
                            document.getElementById("flecha1").classList.add("flecha");
                            document.getElementById("flecha2").classList.remove("flecha");

                            barajaenjuego.push(cartasj2[0]);
                            cartasj2.splice(0, 1);

                            mostrarnumcartasj();

                            var cartaActual = barajaenjuego[barajaenjuego.length - 1];
                            if (cartaActual.charAt(0) === 'S') {
                                turnosObligatoriosj1 = 1;
                                turno = 1;
                            } else if (cartaActual.charAt(0) === 'C') {
                                turnosObligatoriosj1 = 2;
                                turno = 1;
                            } else if (cartaActual.charAt(0) === 'R') {
                                turnosObligatoriosj1 = 3;
                                turno = 1;
                            }
                            if (turnosObligatoriosj1 == 0) {
                                //alert("se lleva las cartas el j1");
                                cartasj2 = cartasj2.concat(barajaenjuego);
                                var cartaenjuego = document.getElementById('cartaenjuego');
                                // Limpiar el array barajaenjuego
                                barajaenjuego = [];
                                document.getElementById("flecha2").classList.add("flecha");
                                document.getElementById("flecha1").classList.add("flecha");
                                cartarev();

                                mostrarnumcartasj();

                                turno = 2;
                                turnosObligatoriosj2 = 0;
                            }
                        }
                        //turno j2 en caballo de j1
                        if (turno == 2 && turnosObligatoriosj2 == 2) {
                            turnosObligatoriosj1 = 0;

                            //alert("j2 en caballo de j1");
                            var cartaenjuego = document.getElementById('cartaenjuego');
                            cartaenjuego.src = 'img/cartas/' + cartasj2[0] + '.PNG';
                            document.getElementById("flecha1").classList.add("flecha");
                            document.getElementById("flecha2").classList.remove("flecha");

                            barajaenjuego.push(cartasj2[0]);
                            cartasj2.splice(0, 1);

                            mostrarnumcartasj();

                            var cartaActual = barajaenjuego[barajaenjuego.length - 1];
                            if (cartaActual.charAt(0) === 'S') {
                                turnosObligatoriosj1 = 1;
                                turno = 1;
                                contCaballo = 0;
                            } else if (cartaActual.charAt(0) === 'C') {
                                turnosObligatoriosj1 = 2;
                                turno = 1;
                                contCaballo = 0;
                            } else if (cartaActual.charAt(0) === 'R') {
                                turnosObligatoriosj1 = 3;
                                turno = 1;
                                contCaballo = 0;
                            }

                            contCaballo++;
                            if (turnosObligatoriosj1 == 0 && contCaballo == 2) {
                                //alert("se lleva las cartas el j1");
                                cartasj2 = cartasj2.concat(barajaenjuego);
                                var cartaenjuego = document.getElementById('cartaenjuego');
                                // Limpiar el array barajaenjuego
                                barajaenjuego = [];
                                document.getElementById("flecha2").classList.add("flecha");
                                document.getElementById("flecha1").classList.add("flecha");
                                cartarev();

                                mostrarnumcartasj();

                                turno = 2;
                                turnosObligatoriosj2 = 0;
                                contCaballo = 0;

                            }
                        }
                        //turno j2 en rey de j1
                        if (turno == 2 && turnosObligatoriosj2 == 3) {
                            turnosObligatoriosj1 = 0;


                            //alert("j2 en rey de j1");
                            var cartaenjuego = document.getElementById('cartaenjuego');
                            cartaenjuego.src = 'img/cartas/' + cartasj2[0] + '.PNG';
                            document.getElementById("flecha1").classList.add("flecha");
                            document.getElementById("flecha2").classList.remove("flecha");

                            barajaenjuego.push(cartasj2[0]);
                            cartasj2.splice(0, 1);

                            mostrarnumcartasj();

                            contRey++;

                            var cartaActual = barajaenjuego[barajaenjuego.length - 1];
                            if (cartaActual.charAt(0) === 'S') {
                                turnosObligatoriosj1 = 1;
                                turno = 1;
                                contRey = 0;
                            } else if (cartaActual.charAt(0) === 'C') {
                                turnosObligatoriosj1 = 2;
                                turno = 1;
                                contRey = 0;
                            } else if (cartaActual.charAt(0) === 'R') {
                                turnosObligatoriosj1 = 3;
                                turno = 1;
                                contRey = 0;
                            }
                            if (turnosObligatoriosj1 == 0 && contRey == 3) {
                                //alert("se lleva las cartas el j1");
                                cartasj2 = cartasj2.concat(barajaenjuego);
                                var cartaenjuego = document.getElementById('cartaenjuego');
                                // Limpiar el array barajaenjuego
                                barajaenjuego = [];
                                document.getElementById("flecha2").classList.add("flecha");
                                document.getElementById("flecha1").classList.add("flecha");
                                cartarev();

                                mostrarnumcartasj();

                                turno = 2;
                                turnosObligatoriosj2 = 0;
                                contRey = 0;

                            }
                        }
                    }
                }
            }
        }
        //Bot aficionado
        function funcionAficionado() {
            verificarCartas(cartasj1, cartasj2);
            if (barajaenjuego[0] == null) {
                var cartaenjuego = document.getElementById('cartaenjuego');
                cartaenjuego.src = 'img/rev.png';
            }
            if (modo != "jugador") {
                if (turno == 2) {
                    if (tipobot == "aficionado") {}
                }
            }
        }
        //Bot profesional
        function funcionProfesional() {
            verificarCartas(cartasj1, cartasj2);
            if (barajaenjuego[0] == null) {
                var cartaenjuego = document.getElementById('cartaenjuego');
                cartaenjuego.src = 'img/rev.png';
            }
            if (modo != "jugador") {
                if (turno == 2) {
                    if (tipobot == "profesional") {}
                }
            }
        }
        //Bot demonio
        function funcionDemonio() {
            verificarCartas(cartasj1, cartasj2);
            if (barajaenjuego[0] == null) {
                var cartaenjuego = document.getElementById('cartaenjuego');
                cartaenjuego.src = 'img/rev.png';
            }
            if (modo != "jugador") {
                if (turno == 2) {
                    if (tipobot == "demonio") {}
                }
            }
        }


        if (tipobot == "novato") {
            var tiempoEspera = Math.floor(Math.random() * 4) + 2;
            var tiempoEsperaMs = tiempoEspera * 1000;

            setInterval(funcionNovato, tiempoEsperaMs);
        }
        if (tipobot == "aficionado") {
            var tiempoEspera = Math.floor(Math.random() * 4) + 1;
            var tiempoEsperaMs = tiempoEspera * 1000;

            setInterval(funcionAficionado, tiempoEsperaMs);
        }
        if (tipobot == "profesional") {
            var tiempoEspera = Math.floor(Math.random() * 2) + 1;
            var tiempoEsperaMs = tiempoEspera * 1000;

            setInterval(funcionProfesional, tiempoEsperaMs);
        }
        if (tipobot == "demonio") {
            var tiempoEspera = Math.floor(Math.random() * 1) + 1;
            var tiempoEsperaMs = tiempoEspera * 700;

            setInterval(funcionDemonio, tiempoEsperaMs);
        }

        function config() {
            verificarCartas(cartasj1, cartasj2);
        }
        setInterval(config, 1000);

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

    function mostrarnumcartasj() {
        var cartasnumj1 = document.getElementById('numcartasj1');
        var numcartasj1 = numcartasj(cartasj1);
        cartasnumj1.textContent = numcartasj1;
        var cartasnumj2 = document.getElementById('numcartasj2');
        var numcartasj2 = numcartasj(cartasj2);
        cartasnumj2.textContent = numcartasj2;

        function numcartasj(cartasj) {
            var numcartasj = cartasj.length;
            return numcartasj;
        }
    }

    function cartarev() {
        alert("Se recogen las cartas");
        if (barajaenjuego[0] == null) {
            var cartaenjuego = document.getElementById('cartaenjuego');
            cartaenjuego.src = 'img/rev.png';
        }
    }

</script>