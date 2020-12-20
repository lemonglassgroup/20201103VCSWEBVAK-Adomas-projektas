<div class="wrapper">
    <div class="header">
        <a href="index.php"><img class="header_logo" src="img/smka-logo-small.png" alt="Scenos meno kritikų asociacijos logotipas" />
            <h1 class="header_title">Teatro terminų žodynas</h1>
        </a>
    </div>
    <div class="nav">
        <form class="nav_sbar" action="index.php" method="POST">
            <input type="search" name="searchbar" id="searchbar" autofocus autocomplete="off" placeholder="Įveskite ieškomą terminą..." />
            <div class="result"></div>
        </form>
    </div>
    <div class="content">
        <?php 
        include __DIR__ . '/../src/glossary.php';
        ?>
    </div>
    <div class="footer">
        <div id="accordion">
            <h3>Santrumpos</h3>
            <div class="accordion_content">
                <p>
                    ang. = an­glų <br>
                    arch. = ar­chaiz­mas <br>
                    con. = con­junc­ti­vus, ta­ria­mo­ji nuo­sa­ka <br>
                    d. = dai­nos žo­dis, po­sa­kis ar sa­ki­nys <br>
                    de­mons. = de­monst­ra­ti­vum, pa­ro­do­ma­sis <br>
                    dial. = dia­lek­tiz­mas (tar­mi­nis žo­dis, tar­mi­nė for­ma, tar­miš­kai) <br>
                    emph. = emp­ha­ti­cum, įvar­džiuo­ti­nis <br>
                    gr. = se­no­vės grai­kų <br>
                    iron. = iro­niš­kas, iro­niš­kai <br>
                    lot. = lo­ty­nų <br>
                    prk. = per­kel­ti­ne reikš­me <br>
                    sutr. = su­trum­pi­ni­mas, san­trum­pa; su­trum­pin­tai <br>
                    žr. = žiū­rėk <br>
                </p>
            </div>
            <h3>Apie žodyną</h3>
            <div class="accordion_content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                    fugit esse quo fuga numquam corporis? Alias fugiat consequatur
                    veritatis labore recusandae. Nostrum, assumenda fugit? Nostrum
                    architecto aliquam nam qui totam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                    fugit esse quo fuga numquam corporis? Alias fugiat consequatur
                    veritatis labore recusandae. Nostrum, assumenda fugit? Nostrum
                    architecto aliquam nam qui totam.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, reiciendis ullam totam iusto expedita, numquam sunt quod illo placeat autem consequuntur vitae voluptate illum deserunt magnam eligendi voluptatum corporis eius.
                </p>
            </div>
            <h3>Autoriai</h3>
            <div class="authors accordion_content">
                <div class="authors_person">
                    <img src="img/author-1.jpg" alt="Vardenija Pavardenija">
                    <h4>Vardenija Pavardenija</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi repudiandae,  unde provident earum fugit perferendis minima facilis tempora totam.
                    </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio rem veritatis consequatur maiores fugiat, enim accusantium neque.</p>
                </div>
                <div class="authors_person">
                    <img src="img/author-2.jpg" alt="Vardužis Pavardužis">
                    <h4>Vardužis Pavardužis</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi repudiandae,  unde provident earum fugit perferendis minima facilis tempora totam.
                    </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam porro voluptatibus beatae ad atque, eaque exercitationem?</p>
                </div>
            </div>
            <h3>Kontaktai</h3>
            <div class="contacts accordion_content">
                <form class="contact-form" action="index.php" method="POST">
                    <div class="contact-title">Susisiekite</div>
                    <div class="contact-subtitle">Palikite mums pranešimą!</div>
                    <div class="input-container ic1">
                        <input id="fname" name="fname" class="input" type="text" placeholder=" " required autofocus />
                        <div class="cut"></div>
                        <label for="fname" class="placeholder">Vardas</label>
                    </div>
                    <div class="input-container ic2">
                        <input id="lname" name="lname" class="input" type="text" placeholder=" " required />
                        <div class="cut"></div>
                        <label for="lname" class="placeholder">Pavardė</label>
                    </div>
                    <div class="input-container ic2">
                        <input id="email" name="email" class="input" type="text" placeholder=" " required />
                        <div class="cut" req></div>
                        <label for="email" class="placeholder">El.paštas</label>
                    </div>
                    <div class="input-container ic2">
                        <textarea id="message" name="message" class="input" type="text" placeholder=" " rows="3" contenteditable required></textarea>
                        <div class="cut"></div>
                        <label for="message" class="placeholder">Žinutė</label>
                    </div>
                    <button type="text" class="submit" name="submit">Siųsti</button>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p><?php echo '&copy ' . date('Y'); ?></p>
    </div>
    <button onclick="topFunction()" id="toTopBtn">Į viršų</button> 
</div>