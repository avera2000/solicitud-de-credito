<?php $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE"); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic">
  <link rel="stylesheet" type="text/css" href="css/date.min.css">
  <link rel="stylesheet" type="text/css" href="css/radio.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.min.css">
	<title>&#9997; Solicitud de Crédito FF | Crédito Real</title>
</head>
<body>
<div id="contenedor">
  <div id="encabezado">
    <img alt="logo" src="img/logo.png" height="63" width="180">
    <h1>SOLICITUD DE CRÉDITO<br>(FF)</h1>
    <div class="dato folio">
      <label>FOLIO NO.</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div class="dato promo">
      <label>PROMOCIÓN</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div class="perfil">
    <div class="dato c2">
      <h2>PERFIL TRANSACCIONAL</h2>
    </div>
    <div class="dato c4">
      <label>MONTO DE LOS PAGOS</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c6">
      <label>DESCRIPCIÓN DE LOS BIENES Y SERVICIOS</label>
      <span><input type="text" disabled="disabled" value="REINSCRIPCIÓN EDYEN"></span>
    </div>
    <div class="dato c6">
      <label>IMPORTE DEL PRECIO DE LOS BIENES Y/O SERVICIOS</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c4">
      <label>IMPORTE TOTAL DEL CRÉDITO</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div class="dato c2">
      <label>PLAZO</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div class="dato c3">
      <label>SUCURSAL</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div class="dato c3">
      <label>VENDEDOR</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    </div>
    <div style="clear:both"></div>
  </div>
  <div id="solicitante">
    <div class="titulo-bloque">
      <h2>INFORMACIÓN DEL SOLICITANTE</h2>
    </div>
    <div class="dato c6">
      <label>APELLIDO PATERNO</label>
      <span><input type="text" id="apellido-paterno"></span>
    </div>
    <div class="dato c6">
      <label>APELLIDO MATERNO</label>
      <span><input type="text" id="apellido-materno"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c6">
      <label>PRIMER NOMBRE</label>
      <span><input type="text" id="primer-nombre"></span>
    </div>
    <div class="dato c6">
      <label>SEGUNDO NOMBRE</label>
      <span><input type="text" id="segundo-nombre"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c4">
      <label>ESTADO CIVIL</label>
      <span>
        <select id="estado-civil" name="estado-civil">
          <option value="">SELECCIONAR</option>
          <option>Soltero(a)</option>
          <option>Casado(a)</option>
          <option>Divorciado(a)</option>
          <option>Viudo(a)</option>
        </select>
      </span>
    </div>
    <div class="dato c4">
      <label>C.U.R.P.</label>
      <span><input type="text" id="curp"></span>
    </div>
    <div class="dato c4">
      <label>R.F.C.</label>
      <span><input type="text" id="rfc"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c4">
      <label>PAÍS DE NACIMIENTO</label>
      <span>
        <select id="pais-nacimiento" name="pais-nacimiento">
          <option value="">SELECCIONAR</option>
          <option value="mexicana">México</option>
          <option value="">------------</option>
          <option value="antiguana">Antigua y Barbuda</option>
          <option value="argentina">Argentina</option>
          <option value="bahameña">Bahamas</option>
          <option value="barbadense">Barbados</option>
          <option value="beliceña">Belice</option>
          <option value="boliviana">Bolivia</option>
          <option value="brasileña">Brasil</option>
          <option value="canadiense">Canadá</option>
          <option value="chilena">Chile</option>
          <option value="colombiana">Colombia</option>
          <option value="costarricense">Costa Rica</option>
          <option value="cubana">Cuba</option>
          <option value="dominiquesa">Dominica</option>
          <option value="ecuatoriana">Ecuador</option>
          <option value="salvadoreña">El Salvador</option>
          <option value="estadounidense">Estados Unidos</option>
          <option value="granadina">Granada</option>
          <option value="guatemalteca">Guatemala</option>
          <option value="guyanesa">Guyana</option>
          <option value="haitiana">Haití</option>
          <option value="hondureña">Honduras</option>
          <option value="jamaiquina">Jamaica</option>
          <option value="nicaragüense">Nicaragua</option>
          <option value="panameña">Panamá</option>
          <option value="paraguaya">Paraguay</option>
          <option value="peruana">Perú</option>
          <option value="dominicana">República Dominicana</option>
          <option value="sancristobaleña">San Cristóbal y Nieves</option>
          <option value="sanvicentina">San Vicente y las Granadinas</option>
          <option value="santaluciana">Santa Lucía</option>
          <option value="surinamesa">Surinam</option>
          <option value="trinitense">Trinidad y Tobago</option>
          <option value="uruguaya">Uruguay</option>
          <option value="venezolana">Venezuela</option>
        </select>
      </span>
    </div>
    <div class="dato c3">
      <label>NACIONALIDAD</label>
      <span><input type="text" disabled="disabled" id="nacionalidad"></span>
    </div>
    <div class="dato c5">
      <label>ENTIDAD FEDERATIVA DE NACIMIENTO</label>
      <span>
        <select id="estado-nacimiento">
          <option value="">SELECCIONAR</option>
          <option value="1">Aguascalientes</option>
          <option value="2">Baja California</option>
          <option value="3">Baja California Sur</option>
          <option value="4">Campeche</option>
          <option value="5">Coahuila</option>
          <option value="6">Colima</option>
          <option value="7">Chiapas</option>
          <option value="8">Chihuahua</option>
          <option value="9">Distrito Federal</option>
          <option value="10">Durango</option>
          <option value="11">Guanajuato</option>
          <option value="12">Guerrero</option>
          <option value="13">Hidalgo</option>
          <option value="14">Jalisco</option>
          <option value="15">México</option>
          <option value="16">Michoacán</option>
          <option value="17">Morelos</option>
          <option value="18">Nayarit</option>
          <option value="19">Nuevo León</option>
          <option value="20">Oaxaca</option>
          <option value="21">Puebla</option>
          <option value="22">Querétaro</option>
          <option value="23">Quintana Roo</option>
          <option value="24">San Luis Potosí</option>
          <option value="25">Sinaloa</option>
          <option value="26">Sonora</option>
          <option value="27">Tabasco</option>
          <option value="28">Tamaulipas</option>
          <option value="29">Tlaxcala</option>
          <option value="30">Veracruz</option>
          <option value="31">Yucatán</option>
          <option value="32">Zacatecas</option>
        </select>
      </span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c4">
      <label>FECHA DE NACIMIENTO</label>
      <span><input type="text" id="fecha-nacimiento"></span>
    </div>
    <div class="dato c2">
      <label>GÉNERO</label>
      <span>
        <label class="icr-label">
          <span class="icr-item type_radio"></span>
          <span class="icr-hidden"><input name="genero" value="F" type="radio"></span>
          <span class="icr-text">F</span>
        </label>
        <label class="icr-label">
          <span class="icr-item type_radio"></span>
          <span class="icr-hidden"><input name="genero" value="M" type="radio"></span>
          <span class="icr-text">M</span>
        </label>
      </span>
    </div>
    <div class="dato c6">
      <label>SERIE DE LA FIRMA ELECTRÓNICA AVANZADA</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c5">
      <label>DOMICILIO ACTUAL CALLE</label>
      <span><input type="text" id="dom-calle"></span>
    </div>
    <div class="dato c2">
      <label>NO. EXT.</label>
      <span><input type="text" id="dom-noext"></span>
    </div>
    <div class="dato c2">
      <label>NO. INT.</label>
      <span><input type="text"></span>
    </div>
    <div class="dato c3">
      <label>CIUDAD</label>
      <span><input type="text" id="dom-ciudad"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c6">
      <label>COLONIA</label>
      <span><input type="text" id="dom-colonia"></span>
    </div>
    <div class="dato c6">
      <label>DELEGACIÓN O MUNICIPIO</label>
      <span><input type="text" id="dom-delomun"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c3">
      <label>ESTADO</label>
      <span>
        <select id="dom-estado" name="dom-estado">
          <option value="">SELECCIONAR</option>
          <option value="1">Aguascalientes</option>
          <option value="2">Baja California</option>
          <option value="3">Baja California Sur</option>
          <option value="4">Campeche</option>
          <option value="5">Coahuila</option>
          <option value="6">Colima</option>
          <option value="7">Chiapas</option>
          <option value="8">Chihuahua</option>
          <option value="9">Distrito Federal</option>
          <option value="10">Durango</option>
          <option value="11">Guanajuato</option>
          <option value="12">Guerrero</option>
          <option value="13">Hidalgo</option>
          <option value="14">Jalisco</option>
          <option value="15">México</option>
          <option value="16">Michoacán</option>
          <option value="17">Morelos</option>
          <option value="18">Nayarit</option>
          <option value="19">Nuevo León</option>
          <option value="20">Oaxaca</option>
          <option value="21">Puebla</option>
          <option value="22">Querétaro</option>
          <option value="23">Quintana Roo</option>
          <option value="24">San Luis Potosí</option>
          <option value="25">Sinaloa</option>
          <option value="26">Sonora</option>
          <option value="27">Tabasco</option>
          <option value="28">Tamaulipas</option>
          <option value="29">Tlaxcala</option>
          <option value="30">Veracruz</option>
          <option value="31">Yucatán</option>
          <option value="32">Zacatecas</option>
        </select>
      </span>
    </div>
    <div class="dato c4">
      <label>ENTRE CALLES</label>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div class="dato c4">
      <label>PAÍS</label>
      <span>
        <select id="dom-pais" name="dom-pais">
          <option value="">SELECCIONAR</option>
          <option value="mexicana">México</option>
          <option value="">------------</option>
          <option value="antiguana">Antigua y Barbuda</option>
          <option value="argentina">Argentina</option>
          <option value="bahameña">Bahamas</option>
          <option value="barbadense">Barbados</option>
          <option value="beliceña">Belice</option>
          <option value="boliviana">Bolivia</option>
          <option value="brasileña">Brasil</option>
          <option value="canadiense">Canadá</option>
          <option value="chilena">Chile</option>
          <option value="colombiana">Colombia</option>
          <option value="costarricense">Costa Rica</option>
          <option value="cubana">Cuba</option>
          <option value="dominiquesa">Dominica</option>
          <option value="ecuatoriana">Ecuador</option>
          <option value="salvadoreña">El Salvador</option>
          <option value="estadounidense">Estados Unidos</option>
          <option value="granadina">Granada</option>
          <option value="guatemalteca">Guatemala</option>
          <option value="guyanesa">Guyana</option>
          <option value="haitiana">Haití</option>
          <option value="hondureña">Honduras</option>
          <option value="jamaiquina">Jamaica</option>
          <option value="nicaragüense">Nicaragua</option>
          <option value="panameña">Panamá</option>
          <option value="paraguaya">Paraguay</option>
          <option value="peruana">Perú</option>
          <option value="dominicana">República Dominicana</option>
          <option value="sancristobaleña">San Cristóbal y Nieves</option>
          <option value="sanvicentina">San Vicente y las Granadinas</option>
          <option value="santaluciana">Santa Lucía</option>
          <option value="surinamesa">Surinam</option>
          <option value="trinitense">Trinidad y Tobago</option>
          <option value="uruguaya">Uruguay</option>
          <option value="venezolana">Venezuela</option>
        </select>
      </span>
    </div>
    <div class="dato c1">
      <label>C.P.</label>
      <span><input type="number" id="dom-cp"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c4">
      <label>TELÉFONO CON CLAVE LADA</label>
      <span><input type="number" id="dom-tel"></span>
    </div>
    <div class="dato c4">
      <label>TELÉFONO CELULAR</label>
      <span><input type="number" id="dom-cel"></span>
    </div>
    <div class="dato c4">
      <label>TELÉFONO DE RECADOS CON CLAVE LADA</label>
      <span><input type="number" disabled="disabled"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c6">
      <label>TIPO DE VIVIENDA</label>
      <span>
        <label class="icr-label">
          <span class="icr-item type_radio"></span>
          <span class="icr-hidden"><input name="vivienda" value="propia" type="radio"></span>
          <span class="icr-text">PROPIA</span>
        </label>
        <label class="icr-label">
          <span class="icr-item type_radio"></span>
          <span class="icr-hidden"><input name="vivienda" value="rentada" type="radio"></span>
          <span class="icr-text">RENTADA</span>
        </label>
        <label class="icr-label">
          <span class="icr-item type_radio"></span>
          <span class="icr-hidden"><input name="vivienda" value="familiares" type="radio"></span>
          <span class="icr-text">FAMILIARES</span>
        </label>
        <label class="icr-label">
          <span class="icr-item type_radio"></span>
          <span class="icr-hidden"><input name="vivienda" value="hipotecada" type="radio"></span>
          <span class="icr-text">HIPOTECADA</span>
        </label>
        <label class="icr-label">
          <span class="icr-item type_radio"></span>
          <span class="icr-hidden"><input name="vivienda" value="otro" type="radio"></span>
          <span class="icr-text">OTRO</span>
        </label>
      </span>
    </div>
    <div class="dato c3">
      <label>NÚMERO DE DEPENDIENTES ECONÓMICOS</label>
      <span><input type="number" id="dep-eco"></span>
    </div>
    <div class="dato c3">
      <label>AÑOS DE RESIDENCIA</label>
      <span><input type="number" id="dom-anios"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c6">
      <label>EMAIL PERSONAL</label>
      <span><input type="email" id="email"></span>
    </div>
    <div class="dato c6">
      <label>EMAIL LABORAL</label>
      <span><input type="email" id="email-laboral"></span>
    </div>
    <div style="clear:both"></div>
  </div>
  <div id="response"></div>
  <div id="empleo">
    <div class="titulo-bloque">
      <h2>INFORMACIÓN DEL EMPLEO</h2>
    </div>
    <div class="dato c6">
      <label>EMPRESA O DEPENDENCIA EN LA QUE LABORA</label>
      <span><input type="text" id="emp"></span>
    </div>
    <div class="dato c2">
      <p><b class="ant">Antigüedad</b></p>
    </div>
    <div class="dato c2">
      <label>AÑOS</label>
      <span><input type="number" id="emp-anios"></span>
    </div>
    <div class="dato c2">
      <label>MESES</label>
      <span><input type="number" id="emp-meses"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c6">
      <label>DEPARTAMENTO O ÁREA EN LA QUE LABORA</label>
      <span><input type="text" id="emp-dep"></span>
    </div>
    <div class="dato c6">
      <label>PUESTO</label>
      <span><input type="text" id="emp-puesto"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c6">
      <label>DOMICILIO CALLE</label>
      <span><input type="text" id="emp-calle"></span>
    </div>
    <div class="dato c2">
      <label>NO. EXT.</label>
      <span><input type="text" id="emp-noext"></span>
    </div>
    <div class="dato c2">
      <label>NO. INT.</label>
      <span><input type="text"></span>
    </div>
    <div class="dato c2">
      <label>C.P.</label>
      <span><input type="number" id="emp-cp"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c6">
      <label>COLONIA</label>
      <span><input type="text" id="emp-colonia"></span>
    </div>
    <div class="dato c6">
      <label>DELEGACIÓN O MUNICIPIO</label>
      <span><input type="text" id="emp-delomun"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c3">
      <label>INGRESO MENSUAL</label>
      <span><input type="text" id="ingreso"></span>
    </div>
    <div class="dato c3">
      <label>CIUDAD/ESTADO</label>
      <span><input type="text" id="emp-ciudad"></span>
    </div>
    <div class="dato c3">
      <label>TELÉFONO CON LADA</label>
      <span><input type="number" id="emp-tel"></span>
    </div>
    <div class="dato c3">
      <label>EXTENSIÓN</label>
      <span><input type="text"></span>
    </div>
    <div style="clear:both"></div>
  </div>
  <div id="response-empleo"></div>
  <div id="referencias">
    <div class="titulo-bloque">
      <h2>REFERENCIAS PERSONALES</h2>
    </div>
    <div class="dato c7">
      <label>1. NOMBRE</label>
      <span><input type="text" id="ref-nom-1"></span>
    </div>
    <div class="dato c5">
      <label>TELÉFONO CON CLAVE LADA (NO CELULAR)</label>
      <span><input type="number" id="ref-cel-1"></span>
    </div>
    <div style="clear:both"></div>
    <div class="dato c7">
      <label>2. NOMBRE</label>
      <span><input type="text" id="ref-nom-2"></span>
    </div>
    <div class="dato c5">
      <label>TELÉFONO CON CLAVE LADA (NO CELULAR)</label>
      <span><input type="number" id="ref-cel-2"></span>
    </div>
    <div style="clear:both"></div>
    <div class="marco">
      <div class="dato c12">
        <p class="texto-izq ant"><b>RESULTADO DE LA ENTREVISTA PERSONAL: </b>¿Se recabaron los datos y documentos de forma completa?&nbsp;</p>
        <span>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="entrevista" value="si" type="radio" checked="checked"></span>
            <span class="icr-text">Sí</span>
          </label>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="entrevista" value="no" type="radio"></span>
            <span class="icr-text">No</span>
          </label>
        </span>
      </div>
      <div class="dato c12 entr">
        <p class="texto-izq">En caso de que haya un faltante o imprecisión en los datos o documentos favor de especificar:</p>
        <span><input type="text"></span>
      </div>
      <div style="clear:both"></div>
    </div>
    <div class="marco">
      <div class="dato c12">
        <p class="texto-izq"><b>INFORMACIÓN ADICIONAL.</b> ¿Usted desempeña o ha desempeñado funciones públicas destacadas en un país extranjero o en territorio nacional, considerado entre otros, a los jefes de estado o de gobierno, líderes políticos, funcionarios gubernamentales, judiciales o militares de alta jerarquía, altos ejecutivos de empresas estatales o funcionarios o miembros importantes de partidos políticos?&nbsp;</p>
        <span>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="puesto" value="si" type="radio"></span>
            <span class="icr-text">Sí</span>
          </label>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="puesto" value="no" type="radio" checked="checked"></span>
            <span class="icr-text">No</span>
          </label>
        </span>
      </div>
      <div class="dato c6 puesto1">
        <p class="texto-izq">a) Puesto o cargo:</p>
        <span><input type="text"></span>
      </div>
      <div class="dato c6 puesto1">
        <p class="texto-izq">b) Período:</p>
        <span><input type="text"></span>
      </div>
      <div style="clear:both"></div>
      <div class="dato c12">
        <p class="texto-izq">¿Algún familiar de usted de hasta segundo grado de consanguinidad o afinidad (cónyuge, concubina, padre, madre, hijos, hermanos, abuelos, tíos, primos, cuñados, suegros, yernos o nueras), se encuentra en el supuesto antes mencionado?.</p>
      </div>
      <div style="clear:both"></div>
      <div class="dato c12">
        <span>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="puesto2" value="si" type="radio"></span>
            <span class="icr-text">Sí</span>
          </label>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="puesto2" value="no" type="radio" checked="checked"></span>
            <span class="icr-text">No</span>
          </label>
        </span> 
      </div>
      <div style="clear:both"></div>
      <div class="dato c6 puesto2">
        <p class="texto-izq">a) Nombre completo: Apellido Paterno</p>
        <span><input type="text"></span>
      </div>
      <div class="dato c3 puesto2">
        <p class="texto-izq">Apellido Materno</p><span><input type="text"></span>
      </div>
      <div class="dato c3 puesto2">
        <p class="texto-izq">Nombre(s)</p><span><input type="text"></span>
      </div>
      <div style="clear:both"></div>
      <div class="dato c4 puesto2">
        <p class="texto-izq">b) Parentezco</p><span><input type="text"></span>
      </div>
      <div class="dato c4 puesto2">
        <p class="texto-izq">c) Puesto o cargo</p><span><input type="text"></span>
      </div>
      <div class="dato c4 puesto2">
        <p class="texto-izq">d) Periodo</p><span><input type="text"></span>
      </div>
      <div style="clear:both"></div>
    </div>
    <div class="marco">
      <div class="dato c4">
        <p class="texto-izq"><b>OBLIGADO SOLIDARIO: </b></p><span><input type="text" disabled="disabled"></span>
      </div>
      <div class="dato c4">
        <p class="texto-izq"><b>PROVEEDOR DE RECURSOS: </b></p><span><input type="text" disabled="disabled"></span>
      </div>
      <div class="dato c4">
        <p class="texto-izq"><b>PROPIETARIO REAL: </b></p><span><input type="text" disabled="disabled"></span>
      </div>
      <div style="clear:both"></div>
    </div>
    <div class="marco marco-last">
      <div class="dato c3">
        <p class="texto-izq"><b>ORIGEN Y DESTINO DE LOS RECURSOS.</b></p>
      </div>
      <div style="clear:both"></div>
      <div class="dato c4">
        <p class="texto-izq">¿A cuánto ascienden sus ingresos mensuales?</p><span><input type="text" id="ref-ingreso"></span>
      </div>
      <div class="dato c4">
        <p class="texto-izq">¿Cuál es el origen de los recursos?</p><span><input type="text" id="ref-origen"></span>
      </div>
      <div class="dato c4">
        <p class="texto-izq">¿Cuál es el destino de sus recursos?</p><span><input type="text" value="REINSCRIPCIÓN EDYEN" disabled="disabled"></span>
      </div>
      <div style="clear:both"></div>
      <div class="dato c12">
        <p class="texto-izq">Pretende realizar prepagos o liquidar anticipadamente el crédito?</p>
      </div>
      <div style="clear:both"></div>
      <div class="dato c12">
        <span>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="prepagos" value="si" type="radio"></span>
            <span class="icr-text">Sí</span>
          </label>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="prepagos" value="no" type="radio" checked="checked"></span>
            <span class="icr-text">No</span>
          </label>
        </span>  
      </div>
      <div style="clear:both"></div>
      <div class="dato c6 prepagos">
        <p class="texto-izq">Número de prepagos que pretende realizar:</p><span><input type="number"></span>
      </div>
      <div class="dato c6 prepagos">
        <p class="texto-izq">Monto de los prepagos:</p><span><input type="number"></span>
      </div>
      <div style="clear:both"></div>
      <div class="dato c7 prepagos">
        <p class="texto-izq ant">Instrumento monetario con el que pretende hacer sus pagos:&nbsp;</p>
        <span>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="instrumento" value="efectivo" type="radio"></span>
            <span class="icr-text">Efectivo</span>
          </label>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="instrumento" value="cheque" type="radio"></span>
            <span class="icr-text">Cheque</span>
          </label>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="instrumento" value="transferencia" type="radio"></span>
            <span class="icr-text">Transferencia</span>
          </label>
          <label class="icr-label">
            <span class="icr-item type_radio"></span>
            <span class="icr-hidden"><input name="instrumento" value="otro" type="radio"></span>
            <span class="icr-text">Otro</span>
          </label>
        </span>
      </div>
      <div class="dato c5 prepagos">
        <p class="texto-izq ant">Especificar:</p><span><input type="text"></span>
      </div>
      <div style="clear:both"></div>      
      <div class="dato c12 prepagos">
        <p class="texto-izq">¿De dónde provienen los recursos con los que pretender realizar prepagos?</p><span><input type="text"></span>
      </div>
      <div style="clear:both"></div> 
    </div>
    <p class="nota">Bajo protesta de decir verdad, manifiesto que la información asentada en, y los documentos proporcionados para, la presente solicitud por el(la) suscrito(a), son verdaderos, correctos y auténticos, así como las manifestaciones contenidas en la misma, lo que ratifico con mi firma asentada a continuación. Así mismo, que: (i) formulo la presente solicitud por mi propio derecho y actúo a nombre y por cuenta propia; y, (ii) el crédito será pagado con mis propios recursos, los cuales son y serán lícitos. En caso de que aplique "obligado solidario", éste deberá llenar y firmar otro solicitud, que será integrante de la presente, siendo ambas un mismo documento.</p>
    <div class="dato c3">
      <span class="datei"><input type="text" disabled="disabled"></span>
    </div>
    <div class="dato c3">
      <span class="datei"><input type="text" disabled="disabled"></span>
    </div>  
    <div class="dato c6">
      <span><p class="ant2"><b>MÉXICO, D.F., A <?php echo date("d"); ?> DE <?php echo $meses[date('n')-1]; ?> DE <?php echo date("Y"); ?></b></p></span>
    </div> 
    <div style="clear:both"></div> 
    <div class="dato c3">
      <p><b>Firma autorización del responsable</b></p>
    </div>
    <div class="dato c3">
      <p><b>Firma del (de la) solicitante</b></p>
    </div>
    <div style="clear:both"></div> 
  </div>
  <div id="response-referencias"></div>
  <div id="info-crediticia">
    <div class="titulo-bloque">
      <h2>INFORMACIÓN CREDITICIA</h2>
    </div>
    <p class="nota2">Autorización para consulta de persona física. Por este conducto autorizo a <b>Crédito Real, S.A.B. de C.V., SOFOM, E.R.</b> para que por conducto de sus funcionarios facultados lleven a cabo investigaciones sobre mi comportamiento crediticio en <b>Trans Unión de México, S.A., SIC</b>, o en cualquier otra <b>Sociedad de Información Crediticia</b>. Así mismo, declaro que conozco la naturaleza y alcance de las <b>Sociedades de Información Crediticia</b> y de la información contenida en los reportes de crédito y reporte de crédito especial; declaro que conozco la naturaleza y alcance de la información que se solicitará, del uso que <b>Crédito Real, S.A.B. de C.V., SOFOM, E.R.</b>, hará de tal información y de que ésta podrá realizar consultas periódicas sobre mi historial, consintiendo que esta autorización se encuentre vigente por un período de 3 años contados a partir de su expedición y en todo caso durante el tiempo que se mantenga la relación jurídica. Estoy consciente y acepto que este documento quede bajo custodia de <b>Crédito Real, S.A.B. de C.V., SOFOM, E.R.</b>, para efectos de control y cumplimiento del artículo 28 de la Ley para Regular las Sociedades de Información Crediticia.</p>
    <div style="clear:both"></div> 
    <div class="dato c5">
      <p class="texto-izq">Nombre del solicitante:&nbsp;</p>
      <span class="nombre">&nbsp;</span>
      <p class="texto-izq">R.F.C. o C.U.R.P. del solicitante:&nbsp;</p>
      <span class="rfc-curp">&nbsp;</span>
      <p class="texto-izq">Lugar y fecha en que se firma la autorización:&nbsp;</p>
      <span>MÉXICO, D.F., <?php echo date("d"); ?>/<?php echo $meses[date('n')-1]; ?>/<?php echo date("Y"); ?></span>
      <p class="texto-izq">Nombre de la persona que recaba la autorización:&nbsp;</p>
      <span><input type="text" disabled="disabled"></span>
    </div>
    <div class="dato c3">
      <br><br>
      <span><input type="text" disabled="disabled"></span>
      <p><b>Firma del (de la) solicitante</b></p>
    </div>
    <div class="dato c4">
      <div class="marco">
        <p><b>Para uso exclusivo de Crédito Real, S.A.B. de C.V., SOFOM, E.R.</b></p>
      </div>
      <div class="marco-nop">
      <p class="texto-izq">Fecha de Consulta BC:</p>
      <span><input type="text" disabled="disabled"></span>
      <p class="texto-izq">Folio de Consulta BC:</p>
      <span><input type="text" disabled="disabled"></span>
      </div>
    </div>
    <div style="clear:both"></div> 
  </div>
  <div id="aviso">
    <div class="titulo-bloque">
      <h2>AVISO DE PRIVACIDAD</h2>
    </div>
    <small>(Identidad y domicilio del responsable) Crédito Real, S.A.B. de C.V., SOFOM, E.R. (en adelante, “Crédito Real”), con domicilio en Avenida Insurgentes Sur 730, Piso 20, Colonia Del Valle Norte, Delegación Benito Juárez, México, D.F., C.P. 03103, hace de su conocimiento que, en cumplimiento con las disposiciones previstas en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (en adelante, “LFPDPPP”) y demás normativa aplicable, es responsable del tratamiento de los siguientes datos personales de sus clientes (en adelante, los “Titulares). (Datos personales recabados) i) Datos de Identificación; ii) Datos de Contacto; iii) Datos Laborales; iv) Datos Académicos; v) Datos Financieros, y; vi) Datos Patrimoniales (Datos personales sensibles recabados) i) Datos de Salud, es importante mencionar que los rubros previamente mencionados son categorías de datos personales; en caso de que usted requiera conocer cada uno de los datos personales que son recabados, por favor contacte al oficial de privacidad de Crédito Real a través de los medios indicados en este Aviso. (Finalidades del tratamiento) Crédito Real requiere de los datos personales previamente mencionados, para llevar a cabo las siguientes finalidades i) Identificar a la persona que contrata alguno de los productos ofertados por Crédito Real; ii) Verificar y validar la información proporcionada por el cliente para la contratación de alguno de los productos ofertados por Crédito Real; iii) Llevar a cabo el alta y registro de los clientes que adquieren los diversos productos ofertados por Crédito Real; iv) Generar expedientes para el seguimiento de los clientes; v) La contratación de seguros por Crédito Real y/o por el Titular que sean obligatorios y/o relacionados con el o los productos o servicios otorgados por Crédito Real; vi) Llevar a cabo las gestiones inherentes al otorgamiento y cobro de créditos; vii) Elaborar una relación de clientes a los que se les liberan pagarés o facturas; viii) Enviar facturas a los clientes que soliciten el envío a domicilio; ix) Realizar actividades de soporte y aclaraciones para los clientes; x) Llevar a cabo auditorías internas; xi) Implementar las actividades inherentes al cobro de adeudos o retrasos en pagos; xii) Validar las condiciones financieras de las personas que presentan adeudos o retrasos en pagos; xiii) Prevenir y detectar fraudes u otros ilícitos, y; xiv) El cumplimiento de leyes, reglamentos y disposiciones legales aplicables (Finalidades secundarias o accesorias) i) Realizar llamadas de bienvenida a los nuevos clientes que contratan un producto; ii) Implementar actividades para medir la calidad del servicio y; iii) Realizar actividades de mercadotecnia, publicidad, promoción y telemarketing, de los bienes, productos y/o servicios que sean ofrecidos por Crédito Real, por cualquier medio material y/o electrónico. (Mecanismos para que el titular pueda manifestar su negativa para finalidades secundarias o accesorias) Manifestar, como Titular de los datos personales proporcionados, si desea que sean tratados por Crédito Real para las finalidades secundarias referidas en este Aviso de Privacidad. Sí &#9744; No &#9744; Acepto que mis datos personales sean tratados para realizar llamadas de bienvenida a los nuevos clientes que contratan un producto; Sí &#9744; No &#9744; Acepto que mis datos personales sean tratados para implementar actividades para medir la calidad del servicio; Sí &#9744; No &#9744; Acepto que mis datos personales sean tratados para realizar actividades de mercadotecnia, publicidad, promoción y telemarketing, de los bienes, productos y/o servicios que sean ofrecidos por Crédito Real, por cualquier medio material y/o electrónico. (Transferencias de Datos) Las transferencias son comunicaciones de datos personales realizados a otras empresas distintas a Crédito Real o en su defecto, a subsidiarias, filiales o controladoras; en este sentido, hacemos de su conocimiento que Crédito Real transfiere sus datos personales únicamente en los casos de Transferencias que no requieren de su autorización i) Al Servicio Postal Mexicano, para hacer el envío de las facturas de los clientes que así lo soliciten; ii) A las aseguradoras contratadas por el cliente, para elaborar un dictamen de los siniestros; iii) A otras instituciones financieras, cuando Crédito Real ceda, transmita, transfiera, afecte, grave o negocie, en cualquier forma, los derechos de crédito del o los Créditos que se registren en los contratos de apertura de crédito celebrados; o en los pagarés suscrito al amparo de los mismos por el Cliente; o cuando Crédito Real celebre fusiones o escisiones en las que los titulares se vean involucrados; iv) A nuestras subsidiarias, filiales o controladoras, para llevar a cabo la operación y administración de los Créditos contratados, cuando Crédito Real celebra fusiones o escisiones en las que dichas empresas se vean involucradas; iv) A la autoridad competente, en caso de que ésta solicite legalmente sus datos personales, y v) En caso de una fusión o escisión, a la empresa que adquiera las obligaciones legales al llevar a cabo la unión o separación de Crédito Real. (Mecanismo de aceptación de las Transferencias) Todas las transferencias previamente referidas son necesarias para dar cumplimiento a la relación que adquiere con Crédito Real, en este sentido, no es posible oponerse a que las mismas sean realizadas y por esta razón, no es necesario que usted las acepte. (Medios y procedimiento para ejercer los derechos ARCO y para revocar el consentimiento) Los Titulares tienen el derecho de acceder, rectificar, cancelar u oponerse al tratamiento de sus datos personales (derechos ARCO) en los casos que así lo prevé la LFPDPPP; o bien, revocar su consentimiento si es que este fue otorgado de manera previa. Si los Titulares desean ejercer alguno de los derechos ARCO o revocar su consentimiento, podrán conocer el procedimiento para tal fin, de las siguientes formas i) Acudiendo al Departamento de Protección de Datos personales de Crédito Real, ubicado en Avenida Insurgentes Sur 730, Piso 20, Colonia Del Valle Norte, Delegación Benito Juárez, México, D.F., C.P. 03103; o, ii) Enviando un correo electrónico al correo aviprivacl@creditoreal.com.mx, a la atención del Lic. Luis Calixto López Lozano y/o de la Lic. Ana Laura Arrecillas Casas. Los horarios de atención son de lunes a viernes de 9:00 a 14:00 horas y de 16:00 a 18:00 horas. (Opciones y medios para limitar el uso o divulgación de los Datos Personales) Los Titulares podrán inscribirse en el Registro Público de Usuarios conforme a la Ley de Protección y Defensa al Usuario de Servicios Financieros con la finalidad de limitar el uso y divulgación de sus datos personales. Este registro (REUS), permite que el Titular se inscriba en una base de datos a fin de restringir llamadas promocionales en números particulares (fijo o móvil), laborales o correo electrónico, buscando mantener a salvo su privacidad y evitar las molestias que causan estas llamadas o envío de información. Los Titulares podrán registrarse al REUS a través de los medios que se establecen en la siguiente página de Internet: http://portalif.condusef.gob.mx/REUS/home.php (Uso de Cookies, Web beacons o mecanismos similares) El portal de Internet de Crédito Real www.creditoreal.com.mx (en adelante, el “Portal”) emplea cookies; las cookies son archivos de datos que se almacenan en su disco duro al navegar en el Portal y que permiten intercambiar información del estado del Portal y el navegador del Titular. Si usted desea conocer el procedimiento para deshabilitar las cookies, por favor consulte la sección de ayuda de su navegador de Internet. A través de las cookies, Crédito Real mide la información sobre los Titulares que vistan el Portal. Por lo anterior, Crédito Real recaba la información geográfica desde la que los Titulares ingresan al Portal, así como el sistema operativo, el navegador y el medio (búsqueda o anuncio) con los que los Titulares ingresan al Portal. De igual forma, Crédito Real recaba el promedio de tiempo de navegación y las estadísticas de las páginas más visitadas de los Titulares. Crédito Real obtiene los datos antes referidos con la finalidad de conocer el comportamiento de los Titulares que son impactados mediante canales digitales externos al Portal o que entran de forma directa. (Procedimiento y mecanismos para conocer cambios en el Aviso de Privacidad) Cualquier cambio o actualización en el presente aviso de privacidad podrá ser consultado en el Portal, en la sección “Aviso de Privacidad”. El procedimiento es el siguiente: (i) acceda a la sección “Aviso de Privacidad”; (ii) presione el Aviso de Privacidad Integral para Clientes; (iii) ahí encontrará la versión vigente con la fecha de la más reciente actualización. (Tratamiento indebido de sus Datos Personales) Si los Titulares consideran que su derecho a la protección de sus datos personales ha sido lesionado por alguna conducta u omisión de parte de Crédito Real, o presume alguna violación a las disposiciones previstas en la LFPDPPP, su Reglamento y demás ordenamientos aplicables, podrán interponer su inconformidad o denuncia ante el Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales (INAI). Para mayor información les sugerimos visitar su página oficial de Internet www.inai.org.mx. (Consentimiento). Manifiesta, como Titular de los datos personales proporcionados a Crédito Real, que ha leído el Aviso de Privacidad Integral para Clientes, que conoce las categorías de datos personales recabados (incluidas las categorías relativas a datos financieros, patrimoniales y sensibles), así como las finalidades para el tratamiento de sus datos personales; las transferencias que Crédito Real efectúa y que consiente libremente el tratamiento de sus datos personales en los términos descritos.</small>
    <div style="clear:both"></div>
    <br><br><br>
    <div class="dato c6">
      <span class="datei"><input type="text" disabled="disabled" value="MÉXICO, D.F., A <?php echo date("d"); ?> DE <?php echo $meses[date('n')-1]; ?> DE <?php echo date("Y"); ?>"></span>
    </div>
    <div class="dato c6">
      <span class="datei"><input type="text" disabled="disabled"></span>
    </div> 
    <div style="clear:both"></div>
    <div class="dato c6">
      <p><b>Lugar y fecha de firma del Aviso de Privacidad</b></p>
    </div>
    <div class="dato c6">
      <p><b>Firma del (la) titular</b></p>
    </div> 
    <div style="clear:both"></div>
    <button id="pdf">Descargar en PDF</button>
    <button id="print">Imprimir</button>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/date.min.js"></script>
<script src="js/locales/es.min.js"></script>
<script src="js/radio.min.js"></script>
<script src="js/jspdf.min.js"></script>
<script src="js/html2canvas.min.js"></script>
<script src="js/scripts.min.js"></script>
</body>
</html>