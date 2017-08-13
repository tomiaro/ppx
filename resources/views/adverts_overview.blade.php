   <div class="row">
                                <div class="col-md-12 box">
                                    <div class="row bottom-buffer">
                                        <div class="col-md-12"><span class="label label-default">Přehled inzerátů</span></div>
                                    </div>
                                    <form  method="POST" action="/adverts/date"> 
                                    <div class="row top-buffer">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                            <label>Od </label>
                                        </div>
                                        <div class="col-lg-5 col-md-4 col-sm-5 col-xs-10">
                                            <input name="dateFrom" type="date">
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                            <label>Do </label>
                                        </div>
                                        <div class="col-lg-5 col-md-4 col-sm-5 col-xs-10">
                                            <input name="dateTo" type="date">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width:100px;">Název </th>
                                                    <th>Stav <i class="glyphicon glyphicon-info-sign" title="Inzerát může být spuštěn nebo pozastaven"></i></th>
                                                    <th>Zobrazení <i class="glyphicon glyphicon-info-sign" title="Počet uživatlů, kteří viděli daný inzerát během výše definovaného časového období"></i></th>
                                                    <th>Kliknutí <i class="glyphicon glyphicon-info-sign" title="Počet uživatlů, kteří klikli na daný inzerát během výše definovaného časového období"></i></th>
                                                    <th>Konverze <i class="glyphicon glyphicon-info-sign" title="Počet uskutečněných konverzí &quot;splněných cílů&quot; uživateli behem výše definovaného časového období"></i></th>
                                                    <th>Investice <i class="glyphicon glyphicon-info-sign" title="Součet cen za uskutečněná kliknutí na daný inzerát za výše definované časové období"></i></th>
                                                    <th>Akce <i class="glyphicon glyphicon-info-sign" title="Inzerát může být spuštěn nebo pozastaven"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($adverts as $advert) 
                                                <tr>
                                                    <td>{{ $advert->name }}</td>
                                                    <td>{{ $advert->active}}</td>
                                                    <td>{{ $advert->shows}}</td>
                                                    <td>{{ $advert->total_clicks}}</td>
                                                    <td>{{ $advert->success_buys}}</td>
                                                    <td>{{ $advert->price}}</td>
                                                    <td class="dropdown-no-margin">
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="padding:2px;">Výběr <span class="caret"></span></button>
                                                            <ul class="dropdown-menu drop-left" role="menu">
                                                                <li role="presentation" class="drop-down-menu-item"><a href="#">Pozastavit </a></li>
                                                                <li role="presentation"><a href="#">Upravit </a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row top-buffer">
                                        <div class="col-md-12">
                                            <input class="btn btn-primary" type="submit">Zobrazit statistiky Vašich inzerátů za zvloené období</button>
                                        </div>
                                    </div>
                                     {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>