<div class="contenedor-header">
    <header>
        

        
        <nav>
        
            <div>
                <a href="../index.php" class="nav-icon">Ara Fotografia</a>
            </div>
            <div class="nav">
                <a href="../index.php" class="nav-enlace">Inicio</a>
                <a href="servicios.php" class="nav-enlace">Servicio</a>
                <a href="../propiedades.php" class="nav-enlace">Propiedades</a>
                <a href="../contacto.php" class="nav-enlace">Contactanos</a>
            </div> 
        </nav>
            <div class="nav-servicios">
                <button class="nav-button" onclick="accion()"><i class="fa-solid fa-bars"></i></button>
                <a href="../servicios/maternidad.php" class="nav-servicio desaparece">Maternidad</a>
                <a href="../servicios/newborn.php" class="nav-servicio desaparece">Newborn</a>
                <a href="../servicios/infantil.php" class="nav-servicio desaparece">Infantil</a>
                <a href="../servicios/cumple.php" class="nav-servicio desaparece">Cumple</a>
                <a href="../servicios/minibaby.php" class="nav-servicio desaparece">Minibaby</a>
                <a href="../servicios/familiar.php" class="nav-servicio desaparece">Familiar</a>
                
            </div>
        

        
    </header>


    <script>
        function accion(){
            //console.log('esta funcionando');
            let ancla =document.getElementsByClassName('nav-servicio');
            for(let i=0 ; i < ancla.length;i++){
                ancla[i].classList.toggle('desaparece');
            }
        }
    </script>
</div>