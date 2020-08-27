<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar factura</title>
</head>
<body>
    <div>
        <p>Serie</p>
        <select name="serie" id="serie">
            <option value="" id="defaultSerie">Seleccionar...</option>
            <option value="P">CP</option>
            <option value="ingreso">FA</option>
            <option value="egreso">NC</option>
        </select>
    </div>
    <div>
        <p>Uso del CFDI</p>
        <select name="usoCFDI" id="usoCFDI">
            <option value="" id="defaultSerie">Seleccionar...</option>
            <option value="G01">Adquisición de mercancias</option>
            <option value="G02">Devoluciones, descuentos o bonificaciones</option>
            <option value="G03">Gastos en general</option>
            <option value="I01">Construcciones</option>
            <option value="I02">Mobilario y equipo de oficina por inversiones</option>
            <option value="I03">Equipo de transporte</option>
            <option value="I04">Equipo de computo y accesorios en México</option>
            <option value="I05">Dados, troqueles, moldes, matrices y herramental</option>
            <option value="I06">Comunicaciones telefónicas</option>
            <option value="I07">Comunicaciones satelitales</option>
            <option value="I08">Otra maquinaria y equipo</option>
            <option value="P01">Por definir</option>
            <option value="G01">Adquisición de mercancias</option>
            <option value="G02">Devoluciones, descuentos o bonificaciones</option>
            <option value="G03">Gastos en general</option>
            <option value="D01">Honorarios médicos, dentales y gastos hospitalarios.</option>
            <option value="D02">Gastos médicos por incapacidad o discapacidad</option>
            <option value="D03">Gastos funerales</option>
            <option value="D04">Donativos</option>
            <option value="D05">Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)</option>
            <option value="D06">Aportaciones voluntarias al SAR.</option>
            <option value="D07">Primas por seguros de gastos médicos.</option>
            <option value="D08">Gastos de transportación escolar obligatoria.</option>
            <option value="D09">Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones.</option>
            <option value="D10">Pagos por servicios educativos (colegiaturas)</option>
        </select>
    </div>
    <div>
        <p>Metodo de Pago</p>
        <select name="metodoPago" id="metodoPago">
            <option value="" id="defaultmetodoPago">Seleccionar...</option>
            <option value="PUE">Pago en una sola exhibición</option>
            <option value="PPD">Pago en parcialidades o diferido</option>
        </select>
    </div>
    <div>
        <p>Regimen Fiscal</p>
        <select name="RefigmenF" id="RegimenF">
            <option value="" id="defaultRegimenFiscal">Seleccionar...</option>
            <option value="601">General de Ley Personas Morales</option>
        </select>
    </div>
    <div>
        <p>Forma de Pago</p>
        <select name="FormaPago" id="FormaPago">
            <option value="" id="defaultFormaPago">Seleccionar...</option>
            <option value="01">Efectivo</option>
            <option value="05">Monedero electrónico</option>
            <option value="06">Dinero electrónico</option>
            <option value="08">Vales de despensa</option>
            <option value="12">Dación en pago</option>
            <option value="13">Pago por subrogación</option>
            <option value="14">Pago por consignación</option>
            <option value="15">Condonación</option>
            <option value="17">Compensación</option>
            <option value="23">Novación</option>
            <option value="24">Confusión</option>
            <option value="25">Remisión de deuda</option>
            <option value="26">Prescripción o caducidad</option>
            <option value="27">A satisfacción del acreedor</option>
            <option value="99">Por definir</option>
            <option value="02">Cheque nominativo</option>
            <option value="03">Transferencia electrónica de fondos</option>
            <option value="04">Tarjeta de crédito</option>
            <option value="28">Tarjeta de débito</option>
            <option value="29">Tarjeta de servicios</option>
            <option value="30">Aplicación de anticipos</option>
        </select>
    </div>
    <div>
        <p>Condiociones de pago</p>
        <input type="text" class="" id="condicionesPago" placeholder="30 DÍAS">
    </div>
    <div>
        <p>Selección para documentos relacionados</p>
        <p>Tipo de relación</p>
        <select name="tipoRelacion" id="tipoRelacion">
        <option value="00" id="defaultSerie">Seleccionar...</option>
        <option value="01">Nota de crédito de los documentos relacionados</option>
        <option value="02">Nota de débito de los documentos relacionados</option>
        <option value="03">Devolución de mercancía sobre facturas o traslados previos</option>
        <option value="04">Sustitución de los CFDI previos</option>
        <option value="05">Traslados de mercancias facturados previamente</option>
        <option value="06">Factura generada por los traslados previos</option>
        <option value="07">CFDI por aplicación de anticipo</option>
        <option value="08">Factura generada por pagos en parcialidades</option>
        <option value="09">Factura generada por pagos diferidos</option>
        </select>
    </div>
    <h2>Información receptor</h2>
    <div>
        <p>Capture el RFC de su cliente</p>
        <select name="RFCcliente" id="RFCcliente">
        <option value="00" id="rfcCliente">Seleccionar...</option>
        <option value="A-INDUSTRIAL ADVISORS">A-INDUSTRIAL ADVISORS</option>
        <option value="ACCIONA SERVICIOS ADMINISTRATIVOS">ACCIONA SERVICIOS ADMINISTRATIVOS</option>
        <option value="ADMINISTRACIONES HEXA S.A. DE C.V.">ADMINISTRACIONES HEXA S.A. DE C.V.</option>
        <option value="Administrador CKD Be Grand 17">Administrador CKD Be Grand 17</option>
        <option value="Afore XXI Banorte, S.A. DE C.V.">Afore XXI Banorte, S.A. DE C.V.</option>
        <option value="AJEMEX SA DE CV">AJEMEX SA DE CV</option>
        <option value="Akabela Avanzado en Comunicaciones, S. A. de C. V.">Akabela Avanzado en Comunicaciones, S. A. de C. V.</option>
        <option value="Alejandro Gabriel Clemente Lopez">Alejandro Gabriel Clemente Lopez</option>
        <option value="ALLIANCE SOLUCIONES S.A. DE C.V.">ALLIANCE SOLUCIONES S.A. DE C.V.</option>
        <option value="ALMACENES INTELIGENTES,S.A DE C.V.">ALMACENES INTELIGENTES,S.A DE C.V.</option>
        <option value="ALUCAPS MEXICANA DE OCCIDENTE, S.A. DE C.V.">ALUCAPS MEXICANA DE OCCIDENTE, S.A. DE C.V.</option>
        <option value="ALUCAPS MEXICANA, SA DE CV">ALUCAPS MEXICANA, SA DE CV</option>
        <option value="ALVEG DISTRIBUCIÓN QUÍMICA SA DE CV">ALVEG DISTRIBUCIÓN QUÍMICA SA DE CV</option>
        <option value="AMMPER ENERGIA SAPI DE CV">AMMPER ENERGIA SAPI DE CV</option>
        <option value="ARTICULOS DECORATIVOS Y SOLUCIONES INTEGRALES S.A DE C.V">ARTICULOS DECORATIVOS Y SOLUCIONES INTEGRALES S.A DE C.V</option>
        <option value="ASCOMATICA SA DE CV">ASCOMATICA SA DE CV</option>
        <option value="ASOCIACION DE CONDOMINOS DEL CENTRO DISTRIBUIDOR DE PESCADOS Y MARISCOS DE LA CIUDAD DE MEXICO A.C">ASOCIACION DE CONDOMINOS DEL CENTRO DISTRIBUIDOR DE PESCADOS Y MARISCOS DE LA CIUDAD DE MEXICO A.C</option>
        <option value="ASSA ABLOY GLOBAL SOLUTIONS MEXICO S.A. DE C.V.">ASSA ABLOY GLOBAL SOLUTIONS MEXICO S.A. DE C.V.</option>
        <option value="AVANZIA INSTALACIONES">AVANZIA INSTALACIONES</option>
        <option value="AVENDITORE S.A DE C.V">AVENDITORE S.A DE C.V</option>
        <option value="AXALTA COATING SYSTEMS MEXICO S DE RL DE CV">AXALTA COATING SYSTEMS MEXICO S DE RL DE CV</option>
        <option value="Banco Compartamos, S.A. Institución de Banca Múltiple">Banco Compartamos, S.A. Institución de Banca Múltiple</option>
        <option value="BASF INTERSERVICIOS">BASF INTERSERVICIOS</option>
        <option value="BIMCA Y ASOCIADOS SA DE CV">BIMCA Y ASOCIADOS SA DE CV</option>
        <option value="BINNEY&SMITH (MEXICO) SA DE CV">BINNEY&SMITH (MEXICO) SA DE CV</option>
        <option value="BLOOBIT MEXICO SA DE CV">BLOOBIT MEXICO SA DE CV</option>
        <option value="Braskem Idesa Servicios S.A. de C.V.">Braskem Idesa Servicios S.A. de C.V.</option>
        <option value="BUFETE INMOBILIARIO MONTERREY SA DE CV">BUFETE INMOBILIARIO MONTERREY SA DE CV</option>
        <option value="BUHLER,S.A. DE C.V.">BUHLER,S.A. DE C.V.</option>
        <option value="CAMPARI MEXICO,S.A.DE C.V">CAMPARI MEXICO,S.A.DE C.V</option>
        <option value="CAPACO,S.A. DE C.V">CAPACO,S.A. DE C.V</option>
        <option value="CARLOS ROBERTO GARCIA FARRERA">CARLOS ROBERTO GARCIA FARRERA</option>
        <option value="CAROLINA MORA GARAY">CAROLINA MORA GARAY</option>
        <option value="CELIA CRUZ SANCHEZ">CELIA CRUZ SANCHEZ</option>
        <option value="CELULOSA Y CORRUGADOS DE SONORA SA DE CV">CELULOSA Y CORRUGADOS DE SONORA SA DE CV</option>
        <option value="CELULOSAS MAIRO,S.DE R.L.DE C.V.">CELULOSAS MAIRO,S.DE R.L.DE C.V.</option>
        <option value="CEMENTOS MOCTEZUMA S.A. DE C.V.">CEMENTOS MOCTEZUMA S.A. DE C.V.</option>
        <option value="Cementos Portland Moctezuma, SA de CV">Cementos Portland Moctezuma, SA de CV</option>
        <option value="Centro AF de Estudios Tecnológicos S.A.">Centro AF de Estudios Tecnológicos S.A.</option>
        <option value="CESTEK ELECTRONICA SA DE CV">CESTEK ELECTRONICA SA DE CV</option>
        <option value="Chr Hansen de México S.A de C.V">Chr Hansen de México S.A de C.V</option>
        <option value="CIE AGENCIA Y COMERCIALIZADORA S DE RL DE CV">CIE AGENCIA Y COMERCIALIZADORA S DE RL DE CV</option>
        <option value="CLAUDIA EVELYN GONZALEZ MONDRAGÓN">CLAUDIA EVELYN GONZALEZ MONDRAGÓN</option>
        <option value="CLAUDIA EVELYN GONZALEZ MONDRAGON">CLAUDIA EVELYN GONZALEZ MONDRAGON</option>
        <option value="CLINICA DE ESPECIALIDADES MEDICAS DEL SUR,SC">CLINICA DE ESPECIALIDADES MEDICAS DEL SUR,SC</option>
        <option value="CMP Consultores en Mantenimiento y Proyectos SA de CV.">CMP Consultores en Mantenimiento y Proyectos SA de CV.</option>
        <option value="COLOR CON DE MEXICO S DE RL DE CV">COLOR CON DE MEXICO S DE RL DE CV</option>
        <option value="COMERCIALIZADORA BEROTEC DE MÉXICO  SAS de CV.">COMERCIALIZADORA BEROTEC DE MÉXICO  SAS de CV.</option>
        <option value="COMPUTACION INTEGRAL EMPRESARIAL DE MEXICO SA DE CV">COMPUTACION INTEGRAL EMPRESARIAL DE MEXICO SA DE CV</option>
        <option value="COMPUTADORAS MEGACENTRO SA DE CV">COMPUTADORAS MEGACENTRO SA DE CV</option>
        <option value="Constellium Automotive Mexico S. de R.L. de C.V.">Constellium Automotive Mexico S. de R.L. de C.V.</option>
        <option value="CONSULTORES EN ECONOMIA INVERSIONES Y PROYECTOS SC">CONSULTORES EN ECONOMIA INVERSIONES Y PROYECTOS SC</option>
        <option value="COORDINADORA DE INMUEBLES INDUSTRIALES S.A. DE C.V.">COORDINADORA DE INMUEBLES INDUSTRIALES S.A. DE C.V.</option>
        <option value="COPARMEX HIDALGO,S.P.">COPARMEX HIDALGO,S.P.</option>
        <option value="CORONA COMERCIAL, S.A DE C.V.">CORONA COMERCIAL, S.A DE C.V.</option>
        <option value="Corporación Sicma, S.A. de C.V.">Corporación Sicma, S.A. de C.V.</option>
        <option value="Corporativo Indistrial Bejok SA de CV">Corporativo Indistrial Bejok SA de CV</option>
        <option value="CR SOLUCIONES Y SERVICIOS EN TECNOLOGIA S DE RL DE CV">CR SOLUCIONES Y SERVICIOS EN TECNOLOGIA S DE RL DE CV</option>
        <option value="CROMO DIGITAL SA DE CV">CROMO DIGITAL SA DE CV</option>
        <option value="CTPS PRECISION STEEL SA DE CV">CTPS PRECISION STEEL SA DE CV</option>
        <option value="DAK RESINAS AMERICAS MEXICO SA DE CV">DAK RESINAS AMERICAS MEXICO SA DE CV</option>
        <option value="DATACODE SOLUCIONES SA DE CV">DATACODE SOLUCIONES SA DE CV</option>
        <option value="DEL BARRIO TIENDAS S.A.">DEL BARRIO TIENDAS S.A.</option>
        <option value="DESARROLLO CORPORATIVO IDESA SA DE CV">DESARROLLO CORPORATIVO IDESA SA DE CV</option>
        <option value="DIADEMAS PARA COMUNICACIONES, SA DE CV">DIADEMAS PARA COMUNICACIONES, SA DE CV</option>
        <option value="Diseños Inteligentes Inventa SA de CV">Diseños Inteligentes Inventa SA de CV</option>
        <option value="DURAPLAY DE PARRAL S.A.P.I. DE C.V.">DURAPLAY DE PARRAL S.A.P.I. DE C.V.</option>
        <option value="DURAPLAY DE PARRAL,S.A.P.I DE C.V.">DURAPLAY DE PARRAL,S.A.P.I DE C.V.</option>
        <option value="E&A LOGISTICA Y SUMINISTROS, SA DE CV">E&A LOGISTICA Y SUMINISTROS, SA DE CV</option>
        <option value="EASTMAN ADMINISTRACION SA DE CV">EASTMAN ADMINISTRACION SA DE CV</option>
        <option value="EL CRISA SA DE CV">EL CRISA SA DE CV</option>
        <option value="ELEMENT FLEET MANAGEMENT CORPORATION MEXICO">ELEMENT FLEET MANAGEMENT CORPORATION MEXICO</option>
        <option value="EMBAL-AME INDUSTRIAL SA DE CV">EMBAL-AME INDUSTRIAL SA DE CV</option>
        <option value="EMERSON ELECTRIC DE MEXICO SA DE CV">EMERSON ELECTRIC DE MEXICO SA DE CV</option>
        <option value="EMOR,S.A. DE C.V">EMOR,S.A. DE C.V</option>
        <option value="EMPAQUES MODERNOS DEL NORTE S.DE R.L DE C.V">EMPAQUES MODERNOS DEL NORTE S.DE R.L DE C.V</option>
        <option value="EMPAQUES PLEGADIZOS MODERNOS">EMPAQUES PLEGADIZOS MODERNOS</option>
        <option value="ENERGETICOS INTERNACIONALES S.A DE C.V.">ENERGETICOS INTERNACIONALES S.A DE C.V.</option>
        <option value="ENRIQUE LIMON ROMANO">ENRIQUE LIMON ROMANO</option>
        <option value="EQUIPOS Y MANTENIMIENTO A GASOLINERAS SA DE CV">EQUIPOS Y MANTENIMIENTO A GASOLINERAS SA DE CV</option>
        <option value="ERNESTO MARTINEZ ZAPATA">ERNESTO MARTINEZ ZAPATA</option>
        <option value="ESTAFETA MEXICANA SA DE CV">ESTAFETA MEXICANA SA DE CV</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        </select>
    </div>
</body>
</html>