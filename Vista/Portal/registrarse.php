<div style="margin-left: 80px;">
    <form id="form_registro" name="form_registro" onsubmit='ingresar_usuario_ajax(); return false;' >
        <span>Sesi&oacute;n</span>
        <table border="1" width="100%" cellpadding="3" cellspacing="3" style="margin-left: -50px;" >
            <tr>
                <td><span>Nombre usuario</span></td>
                <td><input required id="user" name="user" type="text" placeholder="" maxlength="80"></td>
                <td><div class="clError" id="err_nombre">*</div></td>

                <td><span>Password</span></td>
                <td><input required id="pass" name="pass" type="password" placeholder="" maxlength="80"></td>
                <td><div class="clError" id="err_nombre">*</div></td>
            </tr>		
        </table>	

        <span>Personales</span>
        <div id="registro">			
            <table border="1" width="100%" cellpadding="3" cellspacing="3" style="margin-left: -50px;" >
                <tr>

                    <td><span>Nombre de pila</span></td>
                    <td><input required name="nombre" id="nombre" type="text" placeholder="" maxlength="80"></td>
                    <td><div class="clError" id="err_nombre">*</div></td>

                    <td><span>R.U.T</span></td>
                    <td><input required name="run" onkeypress="return validar_rut(event);" id="run" type="text" placeholder="" maxlength="10"></td>
                    <td><div class="clError" id="err_nombre">*</div></td>			

                </tr>
                <tr>
                    <td><span>Apellido pat</span></td>
                    <td><input required name="apellido_pat" id="apellido_pat" type="text" placeholder="" maxlength="80"></td>
                    <td><div class="clError" id="err_nombre">*</div></td>	


                    <td><span>Apellido mat</span></td>
                    <td><input required name="apellido_mat" id="apellido_mat" type="text" placeholder="" maxlength="80"></td>
                    <td><div class="clError" id="err_nombre"></div></td>				
                </tr>
                <tr>
                    <td><span>Email principal</span></td>
                    <td><input required name="email" id="email" type="text" placeholder="" maxlength="80"></td>
                    <td><div class="clError" id="err_nombre">*</div></td>
                    <td><span>Fecha de nacimiento</span></td>

                    <td style="width: 220px;">
                        <select id="anhoNac" name="anhoNac" onchange="ponerDias()">
                            <script>ponerAnho();</script>
                        </select>
                        <select id="mesNac" name="mesNac" onchange="ponerDias()">
                            <script>ponerMes();</script></select>
                        <select id="diaNac" name="diaNac">
                            <script>ponerDias();</script>
                        </select>
                    </td>
                    <td><div class="clError" id="err_nombre">*</div></td>
                </tr>
                <tr>				
                    <td><span>Teléfono</span></td>
                    <td>
                        <input type="text" onkeypress="return justNumbers(event);" id="cod" name="cod" required placeholder="Cod" maxlength="4" style="width: 50px;">
                        <input type="text" onkeypress="return justNumbers(event);" id="numero" name="numero" required placeholder="Telefóno" maxlength="20" style="width: 88px;margin-left: 10px;">
                    </td>
                    <td><div class="clError" id="err_nombre">*</div></td>

                    <td><span>Sexo</span></td>
                    <td colspan="5">
                        <select id="sexo" name="sexo">
                            <option value="1">Masculino</option>
                            <option value="0">Femenino</option>
                            <option value="2">Indefinido</option>
                        </select>
                    </td>												
                </tr>
            </table>

            <!-- Escript para cargar las direcciones correctamente -->
            <script type="text/javascript"> direccion_registro_portal();</script>

            <!-- Direccion -->
            <div id="direccion_div" name="direccion_div" >
                <span>Cargando, un momento porfavor...</span>	
            </div>

            <input style="margin-left: 83%;" type="submit" class="botonLogin" value="Guardar" placeholder="" maxlength="80">
        </div>
    </form>
</div>
