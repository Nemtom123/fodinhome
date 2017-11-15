<?php
include_once "header.php";
?>


<?php
include_once "menu.php";
?>
<div class="head-wrap">

    <div class="text-editor-wrap">

        <div class="text-body">
            $ <span id="typed"></span>
        </div>
    </div>
</div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img  src="image/home2.jpg" alt="">
        </div>

        <div class="item">
            <img  src="image/home1.jpg" alt="Chicago">
        </div>

        <div class="item">
            <img src="image/home3.jpg" alt="New York">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Marketing messaging and featurettes
   ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container">

    <table class="table table-hover">
        <thead>
        <tr>
            <th style="color: #5f5f5f">Építőipari panaszmentességi igazolás</th>
            <th style="color: #5f5f5f; alignment: center">A cégünk bemutatása</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <object data="image/Fodin.pdf" type="application/pdf" width="" style="height: 580px; width: 370px">
                    <p style="color: #5f5f5f">Kattints a linkre <a href="image/Fodin.pdf" style="color: #aa0000">letőlthető PDF!</a></p>
                </object>
            </td>
            <td style="color: #5f5f5f">
                <p> A történetünk:</p>
                <p>
                    A Fodin-Home kft 2006-ban azzal a céllal alakult, hogy segítséget nyújtson azon
                    emberek számára akik építkeznek vagy felújítanak, esetleg olyan elgondolásuk született mely jobbá és szebbé tenné a saját környezetüket. Ebbe beletartozik akár egy lakásfestés, padlóburkolás vagy egy hibaelhárítás a saját otthonukban, illetve a hétvégi nyaralóban. Pályafutásunkat több éves tapasztalatra és több éves tanulásra alapozva kezdtük el.
                </p>
                <p>
                    Megalakulásunk óta folyamatosan bővülő tendenciát produkál a vállalatunk. Mely annak köszönhető,
                    hogy precíz, pontos munkát végzünk. A megnövekedett megrendeléseket megfelelő állományú kapacitás biztosítása mellett, illetve az árverseny terén megfelelő alternatívát tudunk kínálni ügyfeleink számára.
                </p>
                <p>
                    A Fodin-Home Kft alapfilozófiánk körébe tartozik a minőség és a pontosság, kiterjesztve a komplex
                    szolgáltatást, ami nálunk annyit jelent, hogy a megrendelő leadja a megrendelését és mi az első
                    lépéstől az utolsóig lépésig minden gondot levesszünk az ügyfeleink válláról.
                </p>
                <p>
                    A nyersanyag és a hozzávaló kellékek beszerzését is vállaljuk, mely megkönnyíti a mindennapos
                    munkavégzésünket, valamint az ügyfeleink életét
                </p>
                <p>
                    Természetesen mindezeket a folyamatokat korszerű gépparkkal és több éves tapasztalattal rendelkező
                    kollégákkal végezzük, folyamatos minőség ellenőrzés mellett.
                </p>
                  </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $("body").flowUp("table", { transalteY: 350, duration: 100 });
        });
    </script>


    <button type="button" class="btn-lg btn-info center-block" data-toggle="modal"
            data-target="kontakt.php"><a href="kontakt.php">Írjon nekünk</a>
    </button>


        <table class="table table-hover">
            <thead>
            <tr>
                <th style="color: #5f5f5f; font-size: x-large">Építés, tervezés</th>
                <th style="color: #5f5f5f; font-size: x-large">Generálozás</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td style="color: #5f5f5f">
                    <p style="font-size: x-large">
                        Új társasházak és új családi házak továbbá irodák, valamint raktárépületek tervezésével és
                        kivitelezésével szintén foglalkozunk. Alapos és precíz tervezéssel, minőségi alapanyagokkal
                        és kifogástalan kivitelezéssel vívtuk ki megrendelőink bizalmát.

                    </p>
                </td>
                <td style="color: #5f5f5f">
                    <p style="font-size: x-large">
                        Egyik fő szakterületünk a generálozás. Vállaljuk lakóházak és társasházak, irodák, raktárépületek
                        generálozását ehhez kapcsolódóan az összes renoválást és beépítését, és a belsőépítészetet is.
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
        <table class="table table-hover">
            <thead>
            <tr>
                <th style="color: #5f5f5f">Design-kultúra szemléletünk</th>
                <th style="color: #5f5f5f">Formatervezés</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td style="color: #5f5f5f">
                    <p>
                        A körülöttünk lévő alkotások alakzatok, formák, festészet, szobrászat, építészet, egyszóval
                        tárgyak mind beépülnek a gondolatvilágunkba mely későbbiek folyamán valamilyen szinten
                        befolyásolják a tudatunkat. Mindennapi életünkre hatással van, formálja az egyéni ízlésünket
                        és egyéniségünket.
                    </p>
                    <p>
                        Mindig is végig kísért életem során a művészet, valamint a formatervezési elméleti és gyakorlati
                        háttere, azonban ezt a gyakorlatban kaptam meg erre a lehetőséget, hogy az ezzel kapcsolatos
                        tudásomat magas szakmai nívóra emeljem.
                    </p>
                    <p>
                        Vásárlói központosított forma Az 1970-1980-as éveket meglehetősen szűkös kínálat és szerény
                        színvonal jellemezte az elérhető termékeket. A kuncsaft igényei nem voltak fontosak a gyártó
                        számára. Az 1990-es évek 4 gazdasági változásai reformálták a vásárolható termékek körét és
                        színvonalát, a gyártó és a vevő helyet cserélt, a terméktervezés, a gyártás és az értékesítés
                        középpontjába a fogyasztó került. A fogyasztó a tervezés és a gyártás során nem általánosságban,
                        hanem fogyasztói igény formájában jelenik meg.
                    </p>
                    <p>
                        A design bevonja az értelmezésbe a készítménnyel kapcsolatba kerülő embert és a környezetet. Az
                        aspektus hívei nem egy elszigetelt készítmény, hanem egy rendszerbe optimálisan beilleszkedő
                        árucikk, illetve kialakítások fejlesztését tekintik célnak.
                    </p>
                    <p>
                        Természeti formák alkalmazása a lakásban. A természetben található kész megoldások legtöbbször
                        módosítás nélkül nem használhatók fel a műszaki gyakorlatban, hiszen figyelembe kell venni a
                        rendelkezésre álló technológiákat és anyagokat.
                    </p>
                    <p>
                        Technológia helyes természeti adaptációval viszont
                        lehetőség nyílik a hosszú idők óta működőképes és jól bevált hatáselvek, illetve hatáshordozók
                        széleskörű felhasználására. Ebből adódóan természetben található hasonló termékeket használhatunk
                        fel mind építkezésnél vagy felújításnál.
                    </p>
                </td>
                <td>
                    <object data="image/ajtó.pdf" type="application/pdf" width="" style="height: 680px; width: 280px">
                        <p style="color: #5f5f5f">Kattints a linkre <a href="image/ajtó.pdf" style="color: #aa0000">letőlthető PDF!</a></p>
                    </object>
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table table-hover">
            <thead>
            <tr>
                <th style="color: #5f5f5f">Elérhetőségünk</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="head-wrap">

                        <div class="text-editor-wrap">
                            <div class="title-bar" style="color: #3f3f3f"><span class="title">FODIN-HOME KFT &mdash; bash &mdash; 138x<span class="terminal-height">15</span></span></div>
                            <div class="text-body2">
                                <span id="typednext"></span>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                $("body").flowUp("p", { transalteY: 350, duration: 1 });
            });
        </script>





        <div class="clearfix"></div>
        <!-- Start Footer -->
        <footer class="footer"  style="background-color: #2f6f9f">
            <div class="text-center" style="background-color:#FFFFFF " >
                <a class="up-arrow" href="index.php" data-toggle="tooltip" title="TO TOP">
                    <span class="glyphicon glyphicon-chevron-up"  style="color: #2f6f9f"></span>
                </a><br><br>
                <p  style="color: #2f6f9f">Licenced by FODIN HOME KFT</p>

            </div>
        </footer>
        <script type="bootsnav-master/text/javascript" src="bootsnav-master/js/jquery.min.js"></script>
        <script src="bootsnav-master/js/bootstrap.min.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Bootsnavs -->
        <script src="bootsnav-master/js/bootsnav.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

        <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

        <script src="flowup/flowup.js"></script>
    </form>
</div>
</body>
</html>
