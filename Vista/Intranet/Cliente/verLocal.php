<div>
    <form action="" method="post" name="registro_localCliente" id="registro_localCliente" >
        <div id="wrapper_inLocales">
            <div id="inLocal_titulo">
                <div id="inLocalTitulo_titulo">
                    <span>Registrar local</span>
                </div>
                <div id="inLocalTitulo_boton">
                    <input type="button" id="btn_volver" onclick="volver_verLocales();" name="volver" class="botonLogin_sinpadding" value="Volver" placeholder="" maxlength="80" style="margin-left: 90%;">
                </div>			
            </div>

            <div id="inLocal_header" style="height: 145px;">
                <?php
                $id_local = $_GET["id_local"];
                ?>

                <script type="text/javascript"> vista_local('<?php print $id_local ?>');</script>
                <!-- Datos del local -->
                <div id="inlocalHeader_datos">
                    <span>Cargando, un momento por favor...</span>
                </div>
            </div>	

            <div id="inLocal_menu" style="margin-top: 20px;" >
                <ol>
                    <?php
                    include_once "../../../Modelo/IntranetCliente/Locales_vista.php";

                    $obj_local = new Locales_vista();
                    $obj_local->getdatoMenu($id_local);
                    $lista = $obj_local->getArrayPlatos();

                    $cont = 0;

                    foreach ($lista as $plato) {
                        $cont++;
                        ?>			
                        <!-- Menu acordion -->					
                        <li>
                            <h2><span>Plato <?php print $cont; ?></span></h2>
                            <div>
                                <table id="Menu1">
                                    <tr>
                                        <td>Nombre Plato es</td> 
                                        <td>
                                            <input type="text" id="nom_plato" name="nom_plato" value="<?php print $plato->getNombrePlatoEs(); ?>" style="width:150px;height:25px" disabled="" />								
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nombre plato en</td> 
                                        <td>
                                            <input type="text" style="height: 25px;" disabled value="<?php print $plato->getNombrePlatoEn(); ?>" name="descripcion" id="descripcion">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Precio</td>
                                        <td><input type="text" disabled value="<?php print $plato->getPrecioPlato(); ?>" id="precio" name="precio" style="width:150px;height:25px"/></td>
                                    </tr>
                                </table>	                        
                            </div>
                        </li>			
                        <?php
                    }
                    ?>
                </ol>		
            </div>
            <!-- Fin wrapper -->
        </div>
    </form>
</div>


<script>$('#inLocal_menu').liteAccordion();</script>
