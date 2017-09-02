      <div class="row">
                              <form method="POST" action="/codes"> 
                              {{ csrf_field() }}
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="label label-default" type="button" data-toggle="collapse" data-target="#vlozeni-reklamni-plochy">Vložení nové inzerenční plochy</span></div>
                                    </div>
                                    <div class="row collapse" id="vlozeni-reklamni-plochy">
                                        <div class="col-md-12">
                                            <div class="row top-buffer">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <label>označení reklamní plochy<i class="glyphicon glyphicon-info-sign" title="Pro lepší přehlednost si označte jednotlivé reklamní plochy názvem odpovídající danému umístění reklamní plochy na Vašem webu"></i></label>
                                                </div>
                                                <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12">
                                                    <input name="codeName" type="text" style="width:100%" value="{{old('codeName')}}">
                                                </div>
                                            </div>
                                            <div class="row top-buffer">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <label>URL inzerenční plochy<i class="glyphicon glyphicon-info-sign" title="Zadejte URL adresu, na které bude umístěna reklamní plocha"></i></label>
                                                </div>
                                                <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12">
                                                    <input name="codeUrl" type="text" style="width:100%" value="{{old('codeUrl')}}">
                                                </div>
                                            </div>
                                            <div class="row top-buffer">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <label>rozlišení inzerenční plochy<i class="glyphicon glyphicon-info-sign" title="Rozlišení inzerenční plochy je kombinace výšky a šířky obrázku, který může být umístěn v reklamní ploše. Př: 600x300 px"></i></label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                    <div class="radio">
                                                        <label>
                                                            <input name="codeResolution" value="970x310" type="radio"  style="width:inherit;">970x310</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input name="codeResolution" value="320x100" type="radio"  style="width:inherit;">320x100</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                    <div class="radio">
                                                        <label>
                                                            <input name="codeResolution" value="300x600" type="radio"  style="width:inherit;">300x600</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input name="codeResolution" value="300x300" type="radio"  style="width:inherit;">300x300</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                    <div class="radio">
                                                        <label>
                                                            <input name="codeResolution" value="160x600" type="radio"  style="width:inherit;">160x600</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @if(false)
                                            <div class="row top-buffer">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <label>kategorie<i class="glyphicon glyphicon-info-sign" title="Která či které z těchto kategorií nejvíce odpovídá zaměření sekce Vašeho webu, kde bude inzerční plocha umístěna"></i></label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Videa</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Fotografie</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Blog</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Chat</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Hry</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Povídky</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Seznamka</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Telefon</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Magazín</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Eskort</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Privát</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" style="width:inherit;">Odkazy</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif 
                                            <button class="btn btn-primary" type="submit">Vložit inzerenční plochu</button>
                                        </div>
                                         @if ($errors->any()) 
                    <div class="row top-buffer">
                        <div class="col-md-12 alert alert-danger">
                           <ul class="text-center" style="list-style-type: none;">
                            @foreach ($errors->all() as $error)
                               <li>{{$error}}</li>
                            @endforeach   
                         </ul>
                        </div>
                    </div>      
             @endif 
                                    </div>
                                </div>
                          </form>
                            </div>