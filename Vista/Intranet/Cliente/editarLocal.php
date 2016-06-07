<?php
$id_local = $_GET["id_local"];
?>

<div>
    <form onsubmit='modificar_cambios_final(); return false;' name="registro_localCliente" id="registro_localCliente" >


        <div id="wrapper_inLocales">
            <div id="inLocal_titulo">
                <div id="inLocalTitulo_titulo">
                    <span>Registrar local</span>
                </div>
                <div id="inLocalTitulo_boton">
                    <input type="button" id="btn_volver" onclick="volver_verLocales();" name="volver" class="botonLogin_sinpadding" value="Volver" placeholder="" maxlength="80" style="margin-left: 90%;">
                </div>			
            </div>

            <script type="text/javascript"> edita_local('<?php print $id_local ?>');</script>

            <div id="inLocal_header">
                <!-- Datos del local -->
                <div id="inlocalHeader_datos">
                    <span>Cargando, espere porfavor...</span>
                </div>
            </div>

            <!-- Direcciones -->
            <script type="text/javascript"> edita_local_direcciones('<?php print $id_local ?>')</script>

            <div id="inLocal_direcciones">
                <span>Cargando, un momento porfavor...</span>
            </div>

            <!-- Acordeón del menú -->
            <div id="inLocal_menu">
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
                                        <td>Id Plato</td>
                                        <td>
                                            <input type="text" id="id_plato<?php echo $cont; ?>" disabled name="id_plato<?php echo $cont; ?>" value="<?php print $plato->getIdPlato(); ?>" style="width:150px;height:25px"  />								
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nombre Plato</td> 
                                        <td>
                                            <input type="text" id="nom_plato<?php echo $cont; ?>" name="nom_plato<?php echo $cont; ?>" value="<?php print $plato->getNombrePlatoEs(); ?>" style="width:150px;height:25px"  />								
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nombre ingles</td> 
                                        <td>
                                            <input type="text" style="height: 25px;"  value="<?php print $plato->getNombrePlatoEn(); ?>" name="Nombre_ingles<?php print $cont; ?>" id="Nombre_ingles<?php print $cont; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Precio</td>
                                        <td><input type="text"  value="<?php print $plato->getPrecioPlato(); ?>" id="precio<?php print $cont; ?>" name="precio<?php print $cont; ?>" style="width:150px;height:25px"/></td>
                                    </tr>
                                </table>	                        
                            </div>
                        </li>			
                        <?php
                    }
                    ?>
                </ol>	
            </div>

            <div style="margin-left: 85%;">
                <input style="float: left;" type="submit" id="btn_guardar" name="modificar" class="botonLogin_sinpadding" value="Guardar cambios" placeholder="" maxlength="80">
                <input type="text" style="visibility: hidden;" id="id_local" value="<?php print $id_local; ?>" />
            </div>

            <!-- Fin wrapper -->
        </div>
    </form>
</div>


<script>$('#inLocal_menu').liteAccordion();</script>
