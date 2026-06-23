<?php
$imagenes = glob("fotos/*.{jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP}", GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>🎉 Feliz Cumpleaños MI AMOR HERMOSO MI BATATA MI RANITA 🎉</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{
    font-family:'Comic Sans MS', cursive;
    background:#000;
    color:white;
    text-align:center;
    overflow-x:hidden;
    min-height:100vh;
}

/* ===== COLLAGE ===== */
.collage{
    position:fixed;
    top:0;left:0;
    width:100%;height:100%;
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(180px,1fr));
    grid-auto-rows:180px;
    gap:0;
    z-index:-1;
    overflow:hidden;
}
.collage img{
    width:100%;height:100%;
    object-fit:cover;
    opacity:.45;
    transition:.4s;
}
.collage img:nth-child(odd){transform:rotate(-2deg) scale(1.05);}
.collage img:nth-child(even){transform:rotate(2deg) scale(1.05);}

/* ===== CONTENIDO ===== */
.contenido{
    position:relative;
    z-index:10;
    width:100%;
    padding-top:30px;
}
h1{font-size:3rem;text-shadow:3px 3px 10px black;}
.subtitulo{margin-top:15px;font-size:1.2rem;text-shadow:2px 2px 8px black;}

.mensaje {
    display: none;
    width: 100%;
    height: 100%;
    padding: 20px;
    color: black;
    background: white; /* fondo blanco dentro de la carta */
    border-radius: 10px;
    overflow-y: auto; /* permite scroll si el texto es largo */
    text-align: justify;
}

.expandida .mensaje {
    display: block;
}

.sobre::before {
    content: "✉️";
    font-size: 45px;
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 1;
    transition: opacity 0.4s ease;
}

.expandida::before {
    opacity: 0;
}


/* ===== SOBRES ===== */
.sobres{margin-top:50px;}
.sobre{
    display:inline-block;
    width:260px;height:160px;
    background:rgba(255,255,255,.95);
    border:3px solid hotpink;
    border-radius:15px;
    margin:15px;
    cursor:pointer;
    position:relative;
    overflow:hidden;
    transition:.5s;
}
.sobre:hover{transform:scale(1.08);}
.sobre::before{
    content:"✉️";
    font-size:45px;
    position:absolute;
    top:10px;left:50%;
    transform:translateX(-50%);
}

/* Ocultar texto por defecto */
.mensaje{
    opacity:0;
    visibility:hidden;
    transition:opacity .5s ease;
    width:100%;height:100%;
    padding:15px;
    color:black;
    text-align:center;
    display:flex;
    align-items:center;
    justify-content:center;
}

/* Mostrar texto solo al expandir */
.expandida{
    width:min(900px,95vw);
    height:500px;
}
.expandida .mensaje{
    opacity:1;
    visibility:visible;
}
.expandida iframe{
    width:100%;height:100%;
    border:none;border-radius:10px;
}

/* ===== FOOTER ===== */
.footer{
    margin-top:50px;
    font-size:2rem;
    text-shadow:3px 3px 8px black;
}

/* ===== CUYO ===== */
.cuyo{
    width:180px;
    margin-top:30px;
    animation:caminar 10s linear infinite;
}
@keyframes caminar{
    0%{transform:translateX(-400px);}
    100%{transform:translateX(400px);}
}
</style>

<script>
function abrirSobre(id,sobre){
    document.querySelectorAll('.sobre').forEach(s=>{
        if(s!==sobre){s.classList.remove('expandida');}
    });
    sobre.classList.toggle('expandida');
}
</script>
</head>
<body>

<!-- COLLAGE -->
<div class="collage">
<?php
if(count($imagenes)>0){
    for($i=0;$i<120;$i++){
        $img=$imagenes[array_rand($imagenes)];
        echo "<img src='$img'>";
    }
}
?>
</div>

<div class="contenido">
<h1>🎂 Feliz Cumpleaños, MI BATATA MI RANITA 🎂</h1>
<div class="subtitulo">Palabras y detalles me hacen falta para darte y agradecerte todo lo que has hecho por mí ❤️</div>

<!-- Primera fila -->
<div class="sobres">
    <div class="sobre" onclick="abrirSobre('m1',this)">
        <div class="mensaje">TE AMO MUCHISIMO MI MUJERSONA TE QUIERO DAR EL MUNDO ENTERO CON DETALLITOS CON CANCIONES CON SENTIMIENTOS PROVOCARTE TODO no hay palabras que llenen todo lo que siento por ti todo lo que hago por ti y todo lo que siempre haré por ti
            me gusta retrartarnos como greg y rose por la cancion que dice "sé que no soy Sé que no soy tan alto sé que no soy delgado Sé que no soy tan rico pero intento progresar así que, déjame entrar en tu corazón que juntos vamos a estar"
            y no solo esa ahsgdhsd "la de que puedo hacer por ti" "una moneda pediré" son canciones que greg le canta a rose y son tan reales jiji y no solo de greg y rose hay muchas más que somos nosotros y las puse todas en la playlist jejej 
            me encanta saber que contigo veré todo lo que nunca crei ver con alguien y cada una que emos visto me an marcado aun recuerdo con muchisimo cariño ver "holy mountain" y que aun que estuviera super rara y maniaca nos gusto a ambos y 
            creo que nos gusto el hecho de estar juntos no la pelicula tambien recuerdo con demasiado cariño ver la de "Caveat" por que ese dia fue un mood distinto como que ya estaba enamorado y verla contigo me hizo enamorarme más recuerdo como
            llegaba el sol ese dia como me sentia con tanta paz y tranquilidad obvio la de heartbreak highschool tambien como regresaba de la universidad para comer y ver la historia tonta de amerie y odiar a malakai sé que si me pusiera a ennumerar
            cada una de las veces que vimos algo y el como me hizo sentir nunca terminaria JASDHASJDS pero ver shameless contigo la calma que me da estar contigo es increible sentir la conexion y sentir amor cada dia contigo es hermoso y maravilloso 
            siento tanto amor por ti y estoy tan agardecido con todo lo que me has hecho sentir AHSGDHA TE AMO MUCHISIMO ES TAN REAL ES TAN AMABLE ES TAN GENTIL ES TAN INTIMO TODO SHDGSAHGDS me encantas amorcito me llenas de maneras que nunca crei que se pudiera
            nunca me cansaré de amarte nunca me cansaré de darte todo de mi para que tu sientas la comodidad la gentileza la intimidad que te quiero transmitir, me hace sentir tan seguro estar solitos en persona estar solitos en llamada estar juntos aun que estemos con tanta gente
            realmente somos como cada una de las parejas sanas que emos visto en las series y me alegra que solo son las partes bonitas y un poco de las malas como diane y mr peanutbutter pero eso es lo bonito que no terminamos como ellos evolucionamos para ser como princess carolyne
            y judah como rubi y zafiro como sebastian y mia (solo lo bueno) como ana y reinhart que es uno de mis ships favoritos TE AMO CORAZON DE MELON 
</div>
    </div>
    <div class="sobre" onclick="abrirSobre('m2',this)">
        <div class="mensaje">KJSAFKJDKLSA no nos comparo con las demas parejas por que los dos somos unicos somos unicos pero tan similares tener el pasado de la grasa tener el pasado de fnaf hs  haber usado amino HABER TENIDO UNA WII U LKASJFKJDS haber tenido malas experiencias con el amor, no sabes lo intimo que es para mi saber que vivimos cosas similares
        es demasiado intimo todo y emos evolucionado tanto como pareja como personas gracias a la otra y sé que estaremos juntos para sobresalir dentre todos y todas no hay otra persona en mi mundo que no seas tú y te quiero dar todo que nunca sufras algo me siento tan amado cuando dices que yo no dejaria
        que terminaras como homeless o sin futuro ya que yo nunca dejaria que fracasaras mi sueño y la proxima realidad será vivir en nuestra casa diseñada por ti en un lugar donde los dos querramos estar y en ese lugar tendrás tu despacho arquitectonico y te apoyaré a que consigas ese sueño almenos al inicio será un despacho online
        para que asi te vayas dando a conocer y haciendote ver por que vas a sobresalir de todos siempre lo haces y eso me tiene tan enamorado de ti de que no eres predecible no eres cualquiera ERES especial y no solo en mi corazon en el mundo eso es lo que eres alguien especial alguien a quien le puedes contar cosas 
        alguien en quien confiar y alguien a quien yo puedo amar con total seriedad con total control me tienes encantado estoy encantado de ver que tantas cosas buenas puedes darme y es que incluso las que se considerarian "malas" tambien me gustan SJKDHASJDS talvez no me creas cuando digo que amo cada parte de ti
        no importa si es buena o "mala" y por ejemplo no sabes el amor que siento cuando te enojas por que me quiero dormir esta mal yo lo sé pero se siente lindo que te enojas por que quieres pasar mas tiempo conmigo por que quieres sentirme un poquito más y eso ya lo tengo claro siento lindo todo lo que hagas 
        y cosas como dejarte mi celular darte mis cuentas mis contraseñas y que tu me des las tuyas me hacen sentir seguro y con demasiada confianza hacia ti TE AMO MUCHISIMO ME ENCANTA CADA PARTE DE NUSTRA RELACION 
       </div>
    </div>
    <div class="sobre" onclick="abrirSobre('m3',this)">
        <div class="mensaje"> cada una de las canciones que me recuerdan y me hacen sentir como tu me haces sentir 
            <iframe src="https://open.spotify.com/playlist/71pxu7W0BZvWa5QOzaiijw?si=ade2d93de0564a6c"
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
        </div>
    </div>
</div>

<!-- Segunda fila -->
<div class="sobres">
    <div class="sobre" onclick="abrirSobre('m4',this)">
        <div class="mensaje">Cada parte de ti me encanta todo tu sentimiento me encanta tu fisico me encanta me encantan cosas que nunca crei que me gustaran como tus hombros tus odios,la nariz tan bella que tienes tu boquita tan perfecta y tu pelito de colores tus lentes y tus ojitos marrones
            me encanta agarrarte la mano me encanta verte caminar verte respirar te me haces demasiado fina al hacerlo con tanta delicadeza con tanta calma me encanta morderte los dedos de tu bella mano tomarte tu perfecto antrebrazo que me flexies el bicep y tu tricep olerte la axila y que huela a florecitas
            ver tu abdomen y sobarte tu pancita hacerte masajes en tu espalda bella ver tus huesos de los hombros y tu espalda baja  son cosas que nunca pensé que me gustarian pero en ti me encantan obvio me encanta compartir intimidad ver tu hermosa vagina lamberla y sentir como se moja por mi saborearla y que sepa dulce
            que sepa a fuze tea darte nalgadas y ver como rebota esas grandes almohadas que tienes ahi me encanta abrazarte y sentir tus tetas pegando en mi pecho cuando estamos acostados y siento tus nalgotas pegadas a mi KALSJDKALSJD perdon m estoy calentando al escribir esto, me gusta estar dentro de ti sentir lo comodo
            lo intenso la conexion que tenemos en el sexo que tenemos en la vida real que tenemos en las llamadas, me gustan tus gustos que te gusta aveces tener el control y ser dominante y otras veces te gusta ser dominada el como me pides que te pegue y que te insulte se me hace tan hot se me hace tan divertido y me calienta muchisimo
            verte que tu solita te pones en 4 que tu solita haces las cosas que te digo HSGDHSAD eso me exita como no tienes idea me gusto hacerlo en silencio y escuchar tus pequeños gemidos ya que no podias aguantar y me gusta hacerlo en una cama que sea ruidosa no me importa si se escucha mucho me gusta imaginarme que alguien escucha afuera
            ASJKHFKJDAJS Y NOS VE SALIR y dice !!! que cochinos JKASHFJHDSAD me exita demasiado por que intento satisfacerte a ti y ya despues me preocupo yo, verte usar la larva y darme besitos mientras lo haces me gustra muchisimo y hace que termine rapido me gusta terminar y abrazarte y ir a jugar es como mmm ya terminamos vamos a amarnos de otra manera
            me gusta ver fotos que me mandes sin que yo te las pida me gusta mandarte fotos sin que me las pidas y preguntarte "¿quieres ver?" me gusta pq ya se la respuesta pero sin enbargo lo hago JASDHJSAHD te amo muchisimo me encanta olerte la cola el sudor beberme tus babas y para la otra meate en mi cama no sabes que tan rico se me haria como la vez que vomitaste
            se me hizo super hot y me calento DEMASIADO ASJKFHKDS TE AMO MUCHO AMOR
        </div>
    </div>
    <div class="sobre" onclick="abrirSobre('m5',this)">
        <div class="mensaje">Nuestro futuro esta marcado y eso me encanta eras la pieza faltante en toda mi vida te agradezco muchisimo y me encanta saber que siempre estarás ahi me encanta sentirme seguro contigo y me encanta que tu tambien te sientas segura conmigo nunca me imagine vivir algo asi nunca imagine que 
            alguien seria capaz de amarme como a mi me gusta que me amen y tu lo haces tu haces todo por mi y yo por ti haz hecho tanto mi amor y por eso seguiré haciendo todo por ti por que te lo mereces y moldearme a ti que tu te moldies a mi JSDJAS me encanta muchisimo saber que los dos ya nos adaptamos a los dos 
            y nos conocemos tanto que ya sabemos como reaccionar en discusiones peleas cuando alguien esta feliz cuando estamos emocionados y nos damos la calma cuando estamos abrumados y afectados por que la vida no es sencilla pero tu lo  haces mas sencillo llevarlo dia a dia llegar a mi casa y ver tus mensajes 
            esperarte en mi casa y que a las 2 llegues y me digas HOLA MI AMOR aun falta 1 año pero ese año pasara super rapido por que este se me esta pasando como flash y es por que emos hablado diario y seguiremos hablando diario despues de ese año empezaremos a hacer nuestra vida y a buscarnos un futuro donde los dos 
            estemos comodos TE AMO PARA SIEMPRE MIRANDA MIRISWIRIS CHERRYMANDE MINDY TE AMO TE AMO
        </div>
    </div>
</div>

<div class="footer">Con muchísimo amor para el amor de mi vida</div>
<img src="cuyo.png" class="cuyo">
</div>
</body>
</html>
