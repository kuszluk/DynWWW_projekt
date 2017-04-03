        {block name=opis_kalkulatora}
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1 class="wow fadeInLeftBig">Kalkulator kredytowy</h1>
                    <div class="description wow fadeInLeftBig">
                        <p>
                            Oblicz ile będą wynosiły twoje raty kredytowe i odpowiednio rozplanuj swoje domowe wydatki. <br> Spróbuj już teraz!
                        </p>
                    </div>
                </div>
            </div>
        {/block}

        {block name=content_kalkulatora}
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 r-form-1-box wow fadeInUp">
                    <div class="r-form-1-top">
                        <div class="r-form-1-top-left">
                            <h3>Wprowadź dane</h3>
                            <p>Uzupełnij formularz, aby otrzymać swoje wyliczenia:</p>
                        </div>
                        <div class="r-form-1-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="r-form-1-bottom">
                        <form role="form" action="{$app_url}/app/calc.php" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="kwota_kredytu">Kwota kredytu</label>
                                <input type="text" name="kwota_kredytu" placeholder="Kwota kredytu..." class="r-form-1-first-name form-control" id="kwota_kredytu">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="oprocentowanie_roczne">Oprocentowanie</label>
                                <input type="text" name="oprocentowanie_roczne" placeholder="Oprocentowanie..." class="r-form-1-last-name form-control" id="oprocentowanie_roczne">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="okres_splaty">Okres spłaty</label>
                                <input type="text" name="okres_splaty" placeholder="Okres spłaty..." class="r-form-1-email form-control" id="okres_splaty">
                            </div>
                            <button type="submit" class="btn">Sprawdź!</button>
                        </form>
                    </div>
                </div>



                {if isset($messages) || isset($result)}
                    <div class="col-sm-3 r-form-1-box msg-box wow fadeInUp">

                        {if count($messages) > 0}
                            <p class="msg-box-header">BŁĘDY: </p>
                            <ol>
                            {foreach  $messages as $msg}
                                {strip}
                                <li>{$msg}</li>
                                {/strip}
                            {/foreach}
                            </ol>
                        {/if}


                    {if isset($result)}
                        <p class="msg-box-header">WYNIK: </p>;
                        <p id="wynik"><span class="msg-wynik"> Rata kredytu: </span>{$result} zł</p>
                        <p id="wynik"><span class="msg-wynik"> Koszt kredytu: </span>{$koszt} zł</p>
                    {/if}

                    </div>

                {/if}


            </div>
        {/block}

    {block name=footer} © Regy Bootstrap Registration Template by AZMIND {/block}