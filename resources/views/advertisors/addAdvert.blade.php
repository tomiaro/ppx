<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">
                <form  method="POST" action="/adverts" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="row bottom-buffer">
                        <div class="col-md-12">
                            <span class="label label-default">
                                Vložení nového inzerátu
                            </span>
                            <i class="glyphicon glyphicon-info-sign" style="font-size:1.0em;" title="Inzeráty mohou být pouze v rastrovém formátu a to s koncovkami .jpg, .jpeg, .png a .gif">
                            </i>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>
                                označení inzerátu
                                <i class="glyphicon glyphicon-info-sign" title="Pro lepší přehlednost si označte jednotlivé inzeráty názvem odpovídající danému banneru">
                                </i>
                            </label>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12">
                            <input name="nameAd" style="width:100%" type="text" required="required">
                            </input>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>
                                URL inzerátu
                                <i class="glyphicon glyphicon-info-sign" title="Zadejte URL adresu, na kterou chcete uživatele přivést, když proklikne Váš inzerát. Př: vašedoména.cz/požadovaná-sekce">
                                </i>
                            </label>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12">
                            <input name="urlAd" style="width:100%" type="text" required="required">
                            </input>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>
                                výběr souboru
                                <i class="glyphicon glyphicon-info-sign" title="Nahrajte z Vaše počítače obrázek jako Váš inzerát odpovídající výše vybranému rozlišení a v jednom z podporovaných formátů">
                                </i>
                            </label>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-8 col-xs-12">
                            <input name="image" style="background:none;width:100%;border:none;" type="file" required="required">
                            </input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                Obrázkové reklamy mohou být pouze v rastrovém formátu a to s koncovkami:
                            </p>
                            <ul class="list-inline" style="font-weight:600;">
                                <li>
                                    .jpg
                                </li>
                                <li>
                                    .jpeg
                                </li>
                                <li>
                                    .png
                                </li>
                                <li>
                                    .gif
                                </li>
                            </ul>
                            <p>
                                Velikosti obrázkových reklam mohou být jednou z následujících kombinací šířky x výšky v pixelech
                            </p>
                            <ul class="list-inline" style="font-weight:600;">
                                <li>
                                    970x310
                                </li>
                                <li>
                                    320x100
                                </li>
                                <li>
                                    300x600
                                </li>
                                <li>
                                    300x300
                                </li>
                                <li>
                                    160x600
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>
                                cena za kliknutí
                                <i class="glyphicon glyphicon-info-sign" title="Kolik jste ochotni zaplatit za to, že váš zobrazený inzerát uživatel proklikne a dostane se tak na Váš web. Minimální částka jsou 4 Kč. Čím vyšší částku si stanovíte, tím se budete zobrazovat více oproti konkurenci.">
                                </i>
                            </label>
                        </div>
                        <div class="col-lg-5 col-md-4 col-md-offset-0 col-sm-6 col-xs-9">
                            <input name="price" max="8" min="4" oninput="outputUpdate(value)" step="1" type="range" value="5">
                            </input>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="margin-top:0px;">
                            <output for="cena_za_klik" id="cena">
                                5
                            </output>
                            <label>
                                Kč
                            </label>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>
                                denní rozpočet
                                <i class="glyphicon glyphicon-info-sign" title="Kolik jste ochotni investovat za 24 hodin do dané reklamy. V momentě, kdy buude rozpočet vyčerpán, tak se daná reklama přestane po zbytek dne zobrazovat. Minimální denní rozpočet je 10 Kč.">
                                </i>
                            </label>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12">
                            <input name="limit" style="width:100%;" type="number" min="0" value="20" required="required">
                            </input>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">
                                Vložit inzerát
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
