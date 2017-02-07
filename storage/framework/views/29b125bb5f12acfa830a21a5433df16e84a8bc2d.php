<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Full-Stack Developer Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="<?php echo e(asset('/js/zipcode.js')); ?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Agentes
                </div>

                 <form action="zipcode" method="POST" id=zipcode>
                    <div class="col-xs-12 col-sm-12">
                        <div class="row row-percents">
                            <div class="col-xs-12 col-sm-12">
                                <fielset class="con-field field-type1">
                                    <label>Agent 1</label>
                                  <input class="input es1" id="ag1" name="ag1" type="number" step="any" lang="en" style="width:50%;" />
                                </fielset>
                            </div>  
                            <br>
                            <div class="col-xs-12 col-sm-12">
                                <fielset class="con-field field-type1">
                                    <label>Agent 2</label>
                                  <input class="input es2" id="ag2" name="ag2" type="number" step="any" lang="en" style="width:50%;"/>
                                </fielset>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div align="center">
                        <button onClick="match()" class="btn btn-blue btn-big" type="submit" id="matchBtn" name="matchBtn" value="match">
                            <span class="btn-icon9"></span>MATCH
                        </button>
                        <!--<input type="submit" class="btn btn-blue btn-big" name="generar" onClick="generarTarifas()" id="generarBtn" />
                            <span class="btn-icon9"></span>-->
                        
                    </div>
                 </form>

                <?php

                /*$doc = new DOMDocument();
                $url = 'http://maps.googleapis.com/maps/api/geocode/xml?address='.$_GET['Zip'].'@&sensor=true';
                $doc->load($url);
                $result = $doc->getElementsByTagName( "address_component" );
                $i=0;
                foreach( $result as $address_component )
                {
                    $short_names = $address_component->getElementsByTagName( "long_name" );
                    $short_name = $short_names->item(0)->nodeValue;
                    if($i==1)
                    {
                        echo  $city=$short_name;
                        break;  
                    }
                    $i++;
                  }
*/
                ?>


                <!--<?php echo $__env->make('tabla.tabla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->
            </div>
        </div>
    </body>
</html>
