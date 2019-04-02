<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Argentina de Pie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesMobile.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles700.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
</head>

<body>

    <section class="gridPrincipal">            
        <section class="gridHeader">                      
            <div class="divRedes">
                    <a href="https://twitter.com/SergioMassa" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/SergioMassaOK/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/sergiomassaok" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/massasergio/" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="divTitle">
                <p id="pTitle">PONGAMOS A LA ARGENTINA DE PIE</p>
                <hr/>
            </div>
            <section class="textHeader">
                <div id="textHeaderPropuesta">¿Tenés alguna propuesta <br/> que te gustaría compartir?</div>
                <div id="divContanos">¡CONTANOS!</div>
            </section>                                        
         </section>                                   
    </section>
    <div id="divContent">
        <div class="marginLeft">
                <!-- <img src="img/ArgentinaDePie_ContentBackground_MarginLeft.jpg" alt="..." class="img-thumbnail"> -->
        </div>
        <section class="gridOptions">
            <div id="divBlock"></div>            
            <div id="divTextElegi">Elegí en qué categoría entra tu idea.</div>    
            <div id="alert" class="alert alert-success hidden" role="alert" style="display: none;">
                <span id="responseMessage"></span>
            </div>          
            <div id="alertError" class="alert alert-danger hidden" role="alert" style="display: none;">
                <span id="responseMessageError"></span>
            </div>                          
            <div class="divCategoria">                
                <button class="btnCategoria" type="button" id="btnCategoriaCrecimiento" data-toggle="collapse" data-target="#crecimiento">CRECIMIENTO Y DESARROLLO</button>                                     
            </div>
            <div class="collapse" id="crecimiento" style="">
                <div class="divFormulario">
                    <form id="formularioCrecimineto" class="textFormulario">
                        <p class="pCategorias">¿Qué políticas creés que deben llevarse a cabo para que podamos tener un país con un crecimiento y desarrollo sostenido?</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="crecimiento" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div>  
            </div> 
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#desigualdad">LUCHA CONTRA LA DESIGUALDAD</button>                                     
            </div>
            <div class="collapse" id="desigualdad">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">¿Qué proponés para achicar la brecha entre ricos y pobres? </p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="desigualdad" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button" class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div>
            </div> 

            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#infancia">INFANCIA</button>                                     
            </div>
            <div class="collapse" id="infancia">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">¿Qué medida te imaginás que se podría llevar a cabo para asegurarle a todos los chicos una infancia sana y feliz?</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="infancia" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div>   
            </div>
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#educacion">EDUCACIÓN E INSERCIÓN SOCIAL</button>                                     
            </div>
            <div class="collapse" id="educacion">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">Si tenés una propuesta para mejorar la educación pública y gratuita, esta es tu categoría.</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="educacion" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div>   
            </div>
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#trabajo">TRABAJO</button>                                     
            </div>
            <div class="collapse" id="trabajo">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">¿Qué se te ocurre para asegurar trabajo digno para todas y todos?</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">                        
                            <input type="hidden" value="trabajo" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div>   
            </div>
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#delito">COMBATE DEL DELITO</button>                                     
            </div>
            <div class="collapse" id="delito">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">Escribí acá si tenés alguna idea, para que todas y todos podamos vivir seguros y en paz.</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="delito" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div>  
            </div>
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#paridad">PARIDAD</button>                                     
            </div>
            <div class="divFormulario collapse" id="paridad">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">¿Cómo llegaríamos a lograr un Gobierno justo sin distinciones de género?</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="paridad" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div>
            </div> 
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#medioambiente">MEDIO AMBIENTE</button>                                     
            </div>
            <div class="collapse" id="medioambiente">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">¿Qué política de Estado proponés para proteger nuestro medio ambiente?</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="medio ambiente" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div> 
            </div>
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#modernizacion">MODERNIZACIÓN INSTITUCIONAL</button>                                     
            </div>
            <div class="collapse" id="modernizacion">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">¿Qué ideas se te ocurren para construir un Gobierno más transparente y que responda mejor a las necesidades de los argentinos?</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="modernizacion" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div> 
            </div>
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#desarrollofederal">DESARROLLO FEDERAL</button>                                     
            </div>
            <div class="collapse" id="desarrollofederal">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">¿Qué idea tenés para lograr que, sin importar en qué provincia nazcas, las oportunidades sean iguales para todas y todos?</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="desarrollo federal" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div> 
            </div> 
            <div class="divCategoria">                
                <button class="btnCategoria" data-toggle="collapse" data-target="#otra">OTRA</button>                                     
            </div>
            <div class="collapse" id="otra">
                <div class="divFormulario">
                    <form class="textFormulario">
                        <p class="pCategorias">Si las otras categorías no se adecuan a tu propuesta, podés escribir tu idea acá.</p>
                        <p class="pContanos">¡CONTANOS!</p>
                        <div class="input-group">                            
                            <textarea name="contactanos" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <p class="pCategorias" style="padding:5% 0 1% 0">Colocá tus datos para terminar de cargar la propuesta</p>
                        <div class="gridCamposPropuesta">
                            <input type="hidden" value="otra" name="categoria" />
                            <input name="nombre" type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">NOMBRE COMPLETO</p>
                            <input name="residencia" type="text" class="form-control" placeholder="" aria-label="residencia" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">ZONA DE RESIDENCIA</p>
                            <input name="mail" type="text" class="form-control" placeholder="" aria-label="mail" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">MAIL</p>
                            <input name="celular" type="text" class="form-control" placeholder="" aria-label="celular" aria-describedby="basic-addon1">
                            <p class="pLabels pLabelMobile">CELULAR</p>
                            <p class="pLabels">NOMBRE COMPLETO</p>
                            <p class="pLabels">ZONA DE RESIDENCIA</p>
                            <p class="pLabels">MAIL</p>
                            <p class="pLabels">CELULAR</p>
                        </div>
                        <button type="button"  class="btnEnviarCategoria">ENVIAR ></button>
                    </form>
                </div>                                      
            </div>            
        </section>
        <div class="marginRight"></div>
    </div>

    <div class="footer">
        <div class="navBarBottom">
                <div class="divRedesBottom">
                        <a href="https://twitter.com/SergioMassa" target="_blank"><i style="padding:0" class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/SergioMassaOK/" target="_blank"><i style="padding:0" class="fab fa-facebook-f fabBottom"></i></a>
                        <a href="https://www.instagram.com/sergiomassaok" target="_blank"><i style="padding:0" class="fab fa-instagram fabBottom"></i></a>
                        <a href="https://twitter.com/SergioMassa" target="_blank"><i style="padding:0" class="fab fa-linkedin fabBottom"></i></a>
                </div>
                <div class="hayAlternativa">
                    #HayAlternativa
                </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LehkpsUAAAAAK8vxzil8kjSXp5YZfQzZb__p7ze"></script>
    <script src="js/main.js"></script>
    <script>
        if (location.href.indexOf('www') < 0)
            location.href = 'http://www.laargentinadepie.com/';
        

        /*/$('.divFormulario').click(function(e){
            alert("fn");

            var all_toggle = $('.divFormulario').hide();

            var thisToggle = $(this).parent().find('.divFormulario'),
                isShowing = thisSpan.is(":visible");

            // Hide all spans
            all_toggle.hide();

            // If our span *wasn't* showing, show it
            if (!isShowing) {
                thisSpan.show();
            }

            e.preventDefault();
        });*/

        jQuery('button').click( function(e) {
            jQuery('.collapse').collapse('hide');
        });
            
        //     var white = false
        //     var bgcolor;        
            
        //     jQuery(document).ready(function () 
        //     {

        //         jQuery("#btnCategoriaCrecimiento").click(function () 
        //         {                       
        //             // alert("btn2");                
        //             bgcolor = $(this).css('backgroundColor');      
        //             // alert($(this));                                  
        //             console.log($(this));
        //             if (bgcolor == "rgb(151, 37, 130)") 
        //             {                                        
        //                 $(this).css("background-color", "#004466");
        //             } 
        //             else 
        //             {                        
        //                 $(this).css("background-color", rgb(151, 37, 130));
        //             }                    
        //         });
        // });
        </script>
</body>
</html>