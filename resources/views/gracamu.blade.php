@extends('layouts.app')

@section('content')

    <!-- ========================================================================= -->
    <!-- 1. HERO SECTION: CAFICULTURA REGENERATIVA Y BIOECONOMÍA CIRCULAR         -->
    <!-- ========================================================================= -->
    <section id="inicio" class="relative pt-12 pb-24 md:pt-20 md:pb-32 overflow-hidden bg-gradient-to-b from-[#0f281b] via-[#143323] to-[#0c2016]">
        
        <!-- Textura fotográfica de granos de café de fondo combinada con la selva verde viva -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center opacity-60 mix-blend-luminosity filter brightness-110 contrast-125 scale-105" style="background-image: url('{{ asset('images/brand/coffee-bg.jpg') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-[#0f281b]/80 via-[#143323]/90 to-[#0c2016]"></div>
            <!-- Luces cálidas de ambiente: verde amazónico, ámbar dorado y toque de café tostado -->
            <div class="absolute -top-40 -left-40 w-96 h-96 rounded-full bg-[#295a42] opacity-50 blur-[130px]"></div>
            <div class="absolute top-1/2 -right-40 w-96 h-96 rounded-full bg-[#d4a737] opacity-20 blur-[150px]"></div>
            <div class="absolute bottom-10 left-1/3 w-80 h-80 rounded-full bg-[#593223] opacity-35 blur-[140px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Columna Izquierda: Mensaje y Titular -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    
                    <!-- Badges Institucionales con toque café tostado -->
                    <div class="inline-flex flex-wrap items-center justify-center lg:justify-start gap-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#183626] text-[#4ade80] border border-[#2e6e4d] shadow-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#4ade80] animate-pulse"></span>
                            I+D+i+e IDEX Perú Japón
                        </span>
                        <!-- Toque marrón de granos de café tostado -->
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-[#3d1f14]/85 text-[#ebd288] border border-[#d4a737]/40 shadow-sm flex items-center gap-1">
                            ☕ PJ Start Up • Amazonas 2030
                        </span>
                    </div>

                    <!-- Título Principal -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-black text-white tracking-tight leading-none drop-shadow-md">
                        GRACAMU <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4a737] via-[#e2be5c] to-[#ebd288]">IKAM</span>
                    </h1>

                    <!-- Subtítulo / Lema Oficial -->
                    <p class="font-serif-title italic text-xl sm:text-2xl text-[#eef7f2] leading-relaxed">
                        "Frente a los pesticidas y la contaminación del agua en Amazonas, transformamos el daño en valor."
                    </p>

                    <!-- Párrafo descriptivo -->
                    <p class="text-sm sm:text-base text-[#b2c7bc] leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Tecnología limpia para aprovechar <strong class="text-white font-semibold">Grano</strong>, <strong class="text-white font-semibold">Cáscara</strong> y <strong class="text-white font-semibold">Mucílago</strong> en una bioeconomía circular de exportación. Despulpado ecológico fraccionado, 100% en seco y con energía solar directamente en parcela.
                    </p>

                    <!-- CTAs Acciones -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#solucion" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-[#245842] via-[#2d6a4f] to-[#245842] hover:from-[#2d6a4f] hover:to-[#40916c] text-white px-8 py-3.5 rounded-xl font-bold text-sm uppercase tracking-wider shadow-2xl border border-[#d4a737]/40 transition-all transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5 text-[#d4a737]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                            Ver Prototipo y Modelos
                        </a>
                        <!-- Botón con toque café tostado y borde ámbar -->
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKqZvcmPpjg_r2wqXCEIIawxOM2ZM1c2EMglGUJas6kJeEBw/viewform?usp=send_form" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-[#3d1f14] to-[#26150f] hover:from-[#4d281a] hover:to-[#331d15] text-[#d4a737] border border-[#d4a737]/50 px-6 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider shadow-xl transition-all transform hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Llenar Encuesta Cafetalera
                        </a>
                    </div>

                    <!-- Mini Métricas Rápidas -->
                    <div class="pt-6 grid grid-cols-2 sm:grid-cols-4 gap-4 border-t border-[#295a42]/60">
                        <div class="bg-[#163524]/85 p-3 rounded-lg border border-[#295a42] text-center shadow-sm">
                            <span class="block text-xl font-display font-bold text-[#d4a737]">0 Litros</span>
                            <span class="text-[11px] text-[#9ab0a4] uppercase tracking-wider">Agua en Despulpado</span>
                        </div>
                        <div class="bg-[#163524]/85 p-3 rounded-lg border border-[#295a42] text-center shadow-sm">
                            <span class="block text-xl font-display font-bold text-[#4ade80]">80%</span>
                            <span class="text-[11px] text-[#9ab0a4] uppercase tracking-wider">Biomasa Rescatada</span>
                        </div>
                        <!-- Toque café tostado en la métrica solar / parcela -->
                        <div class="bg-gradient-to-b from-[#163524]/85 to-[#24150f]/85 p-3 rounded-lg border border-[#593223]/70 text-center shadow-sm">
                            <span class="block text-xl font-display font-bold text-[#ebd288]">100%</span>
                            <span class="text-[11px] text-[#c4b3a9] uppercase tracking-wider">Solar y Portátil</span>
                        </div>
                        <div class="bg-[#163524]/85 p-3 rounded-lg border border-[#295a42] text-center shadow-sm">
                            <span class="block text-xl font-display font-bold text-[#4ade80]">40,835</span>
                            <span class="text-[11px] text-[#9ab0a4] uppercase tracking-wider">Productores Amazonas</span>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Tarjeta Visual de Marca y Render Inicial -->
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative w-full max-w-md">
                        <!-- Aro decorativo resplandeciente -->
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-[#295a42] via-[#d4a737] to-[#42251a] opacity-35 blur-xl"></div>
                        
                        <div class="relative bg-gradient-to-b from-[#183626] via-[#173725] to-[#1a120c] border border-[#d4a737]/35 rounded-3xl p-8 shadow-2xl text-center space-y-6">
                            <!-- Logo Centrado -->
                            <div class="relative inline-block mx-auto">
                                <img src="{{ asset('images/brand/logo-gracamu.png') }}" alt="Logo Oficial GRACAMU IKAM" class="w-48 h-48 object-contain mx-auto drop-shadow-[0_10px_20px_rgba(212,167,55,0.3)] transform hover:scale-105 transition-transform duration-500">
                            </div>

                            <div class="space-y-1">
                                <h3 class="font-display text-lg font-bold text-white tracking-wider">
                                    EL FRUTO INTEGRAL
                                </h3>
                                <p class="text-xs text-[#d7c8be] leading-relaxed">
                                    <span class="text-[#d4a737] font-semibold">GRA</span>no (20%) + 
                                    <span class="text-[#e2be5c] font-semibold">CA</span>scara (50%) + 
                                    <span class="text-[#4ade80] font-semibold">MU</span>cílago (30%)
                                </p>
                            </div>

                            <!-- Preview del Prototipo en Finca -->
                            <div class="p-3 rounded-2xl bg-[#0f251b] border border-[#295a42]/70 overflow-hidden group">
                                <img src="{{ asset('images/extracted_pptx/image13.png') }}" alt="Render 3D Despulpadora Portátil GRACAMU IKAM" class="w-full h-40 object-cover rounded-lg group-hover:scale-105 transition-transform duration-500">
                                <span class="text-[10px] text-[#d4a737] block mt-2 uppercase tracking-wider font-semibold">Despulpadora Portátil Autónoma en Finca</span>
                            </div>

                            <div class="p-3 rounded-xl bg-[#11271d] border border-[#295a42]/60 text-left text-xs space-y-1">
                                <p class="text-[#e5ddd5] flex items-center justify-between">
                                    <span class="text-[#a8958b]">Cosmovisión:</span>
                                    <strong class="text-white">NÚGKUI (Madre Tierra)</strong>
                                </p>
                                <p class="text-[#e5ddd5] flex items-center justify-between">
                                    <span class="text-[#a8958b]">Awajún:</span>
                                    <strong class="text-[#d4a737]">IKAM (Selva Viva)</strong>
                                </p>
                                <p class="text-[#e5ddd5] flex items-center justify-between">
                                    <span class="text-[#a8958b]">Acreditación:</span>
                                    <strong class="text-[#4ade80]">IDEX Perú Japón</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. RADIOGRAFÍA CAFETALERA: EL PROBLEMA EN AMAZONAS                        -->
    <!-- ========================================================================= -->
    <section id="problema" class="py-20 bg-[#0c2016] border-t border-[#295a42]/50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#d4a737]">Diagnóstico Regional Oficial</span>
                <h2 class="text-3xl sm:text-4xl font-display font-bold text-white">
                    La Triple Crisis del Café en Amazonas
                </h2>
                <p class="text-sm text-[#b2c7bc] leading-relaxed">
                    Datos consolidados de MIDAGRI, el IV Censo Nacional Agropecuario (INEI) y la Junta Nacional del Café (JNC) exigen una transformación urgente en origen.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mb-12">
                <!-- Infografía de Cifras del Ecosistema Cafetalero (image5.png) -->
                <div class="lg:col-span-5 bg-[#142d20] p-5 rounded-3xl border border-[#295a42]/60 text-center space-y-4 shadow-xl">
                    <img src="{{ asset('images/extracted_pptx/image5.png') }}" alt="Radiografía y Cifras del Ecosistema Cafetalero en Amazonas" class="w-full max-h-96 object-contain rounded-xl mx-auto">
                    <div class="text-left space-y-1 border-t border-[#295a42]/60 pt-3">
                        <span class="text-xs font-bold text-[#d4a737] uppercase tracking-wider block">Zona de Intervención:</span>
                        <p class="text-xs text-[#9ab0a4]">
                            Cuencas de <strong class="text-white">Utcubamba, Rodríguez de Mendoza, Bagua, Bongará y Luya</strong>.
                        </p>
                    </div>
                </div>

                <!-- Grid de las 3 Problemáticas -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-6">
                    
                    <!-- Tarjeta 1: Agroquímicos y EUDR -->
                    <div class="bg-gradient-to-b from-[#183626] to-[#12291d] p-6 rounded-2xl border border-[#295a42]/60 hover:border-[#85222f] transition-all space-y-3 relative group shadow-lg">
                        <div class="w-10 h-10 rounded-xl bg-[#631a23]/30 text-[#e95a6c] flex items-center justify-center font-bold text-sm border border-[#631a23]/50">
                            01
                        </div>
                        <h3 class="font-display font-bold text-base text-white group-hover:text-[#d4a737] transition-colors">
                            Normativa EUDR de la UE
                        </h3>
                        <p class="text-xs text-[#9ab0a4] leading-relaxed">
                            Pesticidas sintéticos degradan la microfauna y ponen en peligro exportaciones hacia la Unión Europea bajo estándares de cero químicos.
                        </p>
                    </div>

                    <!-- Tarjeta 2: Pérdida del 80% de Biomasa (Toque marrón café en el badge) -->
                    <div class="bg-gradient-to-b from-[#183626] to-[#12291d] p-6 rounded-2xl border border-[#295a42]/60 hover:border-[#d4a737] transition-all space-y-3 relative group shadow-lg">
                        <div class="w-10 h-10 rounded-xl bg-[#2e170e] text-[#e2be5c] flex items-center justify-center font-bold text-sm border border-[#593223]">
                            02
                        </div>
                        <h3 class="font-display font-bold text-base text-white group-hover:text-[#d4a737] transition-colors">
                            80% Desperdiciado
                        </h3>
                        <p class="text-xs text-[#9ab0a4] leading-relaxed">
                            Cáscara y mucílago son vertidos a los ríos como "aguas mieles", acidificando y desoxigenando las cuencas amazónicas.
                        </p>
                    </div>

                    <!-- Tarjeta 3: Ineficiencia en Cosecha -->
                    <div class="bg-gradient-to-b from-[#183626] to-[#12291d] p-6 rounded-2xl border border-[#295a42]/60 hover:border-[#4ade80] transition-all space-y-3 relative group shadow-lg">
                        <div class="w-10 h-10 rounded-xl bg-[#e2be5c]/20 text-[#e2be5c] flex items-center justify-center font-bold text-sm border border-[#e2be5c]/40">
                            03
                        </div>
                        <h3 class="font-display font-bold text-base text-white group-hover:text-[#d4a737] transition-colors">
                            Daño Mecánico
                        </h3>
                        <p class="text-xs text-[#9ab0a4] leading-relaxed">
                            Despulpadoras descalibradas quiebran el grano, sobrefermentan y generan pérdidas de puntaje en taza SCA.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Banner Estadístico de Amazonas -->
            <div class="bg-gradient-to-r from-[#143021] via-[#1f3e2b] to-[#193627] rounded-2xl p-6 sm:p-8 border border-[#d4a737]/35 shadow-xl">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
                    <div>
                        <div class="text-3xl font-display font-bold text-white mb-1">40,835</div>
                        <div class="text-xs text-[#d4a737] font-semibold uppercase tracking-wider">Productores Registrados</div>
                        <p class="text-[11px] text-[#9ab0a4] mt-1">Padrón MIDAGRI - Amazonas</p>
                    </div>
                    <div>
                        <div class="text-3xl font-display font-bold text-white mb-1">&gt; 80%</div>
                        <div class="text-xs text-[#4ade80] font-semibold uppercase tracking-wider">Agricultura Familiar</div>
                        <p class="text-[11px] text-[#9ab0a4] mt-1">Parcelas &lt; 5 hectáreas</p>
                    </div>
                    <div>
                        <div class="text-3xl font-display font-bold text-white mb-1">45+</div>
                        <div class="text-xs text-[#d4a737] font-semibold uppercase tracking-wider">Cooperativas Agrarias</div>
                        <p class="text-[11px] text-[#9ab0a4] mt-1">COOPARM, APROCAM, Flor de Café</p>
                    </div>
                    <div>
                        <div class="text-3xl font-display font-bold text-white mb-1">5 Cuencas</div>
                        <div class="text-xs text-[#e2be5c] font-semibold uppercase tracking-wider">Zona de Intervención</div>
                        <p class="text-[11px] text-[#9ab0a4] mt-1">Utcubamba, Mendoza, Bagua, Bongará, Luya</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. LA SOLUCIÓN TECNOLÓGICA Y MODELOS REALES DEL PROTOTIPO                 -->
    <!-- ========================================================================= -->
    <section id="solucion" class="py-24 bg-gradient-to-b from-[#0c2016] via-[#112d1f] to-[#0c2016] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#d4a737]">Ingeniería y Modelado Funcional</span>
                <h2 class="text-3xl sm:text-4xl font-display font-bold text-white">
                    Sistema Portátil Autónomo de Despulpado Fraccionado
                </h2>
                <p class="text-sm text-[#b2c7bc] leading-relaxed">
                    Diseñado para trabajar en laderas agrestes de ceja de selva. Despulpa en seco sin agua, separando en origen el grano pergamino, la cáscara pura y el mucílago concentrado.
                </p>
            </div>

            <!-- GALERÍA DE MODELOS Y FOTOS REALES DEL PROTOTIPO -->
            <div class="mb-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- 1: Render 3D en Parcela (image13.png) -->
                    <div class="bg-gradient-to-b from-[#183626] to-[#12291d] rounded-3xl p-5 border border-[#295a42]/60 hover:border-[#d4a737] transition-all space-y-3 shadow-xl group">
                        <div class="overflow-hidden rounded-2xl bg-[#0c2016] h-56 flex items-center justify-center">
                            <img src="{{ asset('images/extracted_pptx/image13.png') }}" alt="Render 3D Despulpadora Portátil" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="pt-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-[#d4a737] block">Modelo 3D • Render de Alta Definición</span>
                            <h4 class="text-base font-bold text-white">Despulpadora Autónoma en Finca</h4>
                            <p class="text-xs text-[#9ab0a4] leading-relaxed mt-1">
                                Chasis portátil ergonómico con tolva de acero inox 304 para procesar en laderas empinadas.
                            </p>
                        </div>
                    </div>

                    <!-- 2: Despulpado Activo Fraccionado (image14.png) -->
                    <div class="bg-gradient-to-b from-[#183626] to-[#12291d] rounded-3xl p-5 border border-[#295a42]/60 hover:border-[#d4a737] transition-all space-y-3 shadow-xl group">
                        <div class="overflow-hidden rounded-2xl bg-[#0c2016] h-56 flex items-center justify-center">
                            <img src="{{ asset('images/extracted_pptx/image14.png') }}" alt="Proceso de Despulpado Activo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="pt-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-[#4ade80] block">Ingeniería y Separación Activa</span>
                            <h4 class="text-base font-bold text-white">Separación Grano, Cáscara y Mucílago</h4>
                            <p class="text-xs text-[#9ab0a4] leading-relaxed mt-1">
                                Vista en operación del cilindro micrométrico separando el grano pergamino limpio y el mucílago en frascos.
                            </p>
                        </div>
                    </div>

                    <!-- 3: Prototipo Funcional de Taller (image15.png) -->
                    <div class="bg-gradient-to-b from-[#183626] to-[#12291d] rounded-3xl p-5 border border-[#295a42]/60 hover:border-[#d4a737] transition-all space-y-3 shadow-xl group">
                        <div class="overflow-hidden rounded-2xl bg-[#0c2016] h-56 flex items-center justify-center">
                            <img src="{{ asset('images/extracted_pptx/image15.png') }}" alt="Prototipo Físico Funcional de Taller" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="pt-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-[#e2be5c] block">Fabricación Local • Taller</span>
                            <h4 class="text-base font-bold text-white">Prototipo Físico Funcional</h4>
                            <p class="text-xs text-[#9ab0a4] leading-relaxed mt-1">
                                Ensamble de bajo costo con chasis de bambú, rotor metálico calibrado y conductos para pruebas de campo.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ENSAYOS DE CAMPO Y ESQUEMAS TÉCNICOS -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 items-center">
                <!-- Ensayos en Parcela con Panel Solar (image10.png) -->
                <div class="bg-gradient-to-b from-[#183626] to-[#12291d] p-6 rounded-3xl border border-[#295a42]/60 space-y-3 shadow-xl">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#4ade80] block">Validación Operativa en Parcela</span>
                    <h3 class="text-xl font-bold text-white">Ensayos de Despulpado con Energía Solar</h3>
                    <img src="{{ asset('images/extracted_pptx/image10.png') }}" alt="Ensayos de Despulpado Solar en Parcela" class="w-full max-h-80 object-cover rounded-2xl shadow-lg">
                    <p class="text-xs text-[#9ab0a4] leading-relaxed pt-2">
                        Pruebas en campo con caficultores cargando cerezas maduras directamente a la tolva con alimentación fotovoltaica pasiva.
                    </p>
                </div>

                <!-- Concepto Mochila Despulpadora Yawi-Pulp (image7.jpeg) -->
                <div class="bg-gradient-to-b from-[#183626] to-[#12291d] p-6 rounded-3xl border border-[#295a42]/60 space-y-3 shadow-xl">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#d4a737] block">Diseño Biomecánico Adaptado</span>
                    <h3 class="text-xl font-bold text-white">Mochila Despulpadora Solar "Yawi-Pulp"</h3>
                    <img src="{{ asset('images/extracted_pptx/image7.jpeg') }}" alt="Concepto Yawi-Pulp Mochila Solar" class="w-full max-h-80 object-cover rounded-2xl shadow-lg">
                    <p class="text-xs text-[#9ab0a4] leading-relaxed pt-2">
                        Arnés ergonómico inspirado en la tradición Awajún-Wampís con kit solar híbrido y separador de flujo por gravedad sin agua.
                    </p>
                </div>
            </div>

            <!-- Ficha Técnica con los 4 Módulos de Ingeniería -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="p-5 rounded-2xl bg-[#163524]/90 border border-[#295a42]/60 flex items-start gap-4">
                    <div class="w-10 h-10 rounded-xl bg-[#2e170e] text-[#d4a737] flex-shrink-0 flex items-center justify-center font-bold text-sm border border-[#593223]">
                        1
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-display font-bold text-white text-sm">Tolva y Cribado Primario Superior (Inox 304)</h4>
                        <p class="text-xs text-[#9ab0a4] leading-relaxed">
                            Embudo cónico de aleación ligera y acero inoxidable con rejilla selectora desmontable para filtrar ramas, hojas e impurezas de campo antes del ingreso al rotor.
                        </p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-[#163524]/90 border border-[#295a42]/60 flex items-start gap-4">
                    <div class="w-10 h-10 rounded-xl bg-[#4ade80]/20 text-[#4ade80] flex-shrink-0 flex items-center justify-center font-bold text-sm border border-[#4ade80]/35">
                        2
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-display font-bold text-white text-sm">Tambor Despulpador Dual Micrométrico</h4>
                        <p class="text-xs text-[#9ab0a4] leading-relaxed">
                            Rodillo dentado concéntrico en acero quirúrgico. Sistema de perilla micrométrica (ajuste de 4 a 8 mm) que garantiza cero rotura de grano en cualquier variedad (Típica, Caturra, Bourbon, Pache).
                        </p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-[#163524]/90 border border-[#295a42]/60 flex items-start gap-4">
                    <div class="w-10 h-10 rounded-xl bg-[#2e170e] text-[#ebd288] flex-shrink-0 flex items-center justify-center font-bold text-sm border border-[#593223]">
                        3
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-display font-bold text-white text-sm">Módulo Energético Híbrido Tri-Fuente</h4>
                        <p class="text-xs text-[#9ab0a4] leading-relaxed">
                            Panel solar monocristalino integrado, batería modular LiFePO4 de 24V (+3,000 ciclos) y manivela retráctil para tracción mecánica en días nublados o de lluvia.
                        </p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-[#163524]/90 border border-[#295a42]/60 flex items-start gap-4">
                    <div class="w-10 h-10 rounded-xl bg-[#e2be5c]/20 text-[#e2be5c] flex-shrink-0 flex items-center justify-center font-bold text-sm border border-[#e2be5c]/35">
                        4
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-display font-bold text-white text-sm">Chasis Biomecánico y Ergonomía de Campo</h4>
                        <p class="text-xs text-[#9ab0a4] leading-relaxed">
                            Estructura ultraligera de distribución lumbar para senderos empinados en selva alta, reduciendo fatiga y evitando derrames de producto.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. EL MODELO BIOECONÓMICO: GRA - CA - MU                                  -->
    <!-- ========================================================================= -->
    <section id="modelo-gracamu" class="py-20 bg-[#0c2016] border-t border-[#295a42]/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#d4a737]">Aprovechamiento Integral de Biomasa</span>
                <h2 class="text-3xl sm:text-4xl font-display font-bold text-white">
                    La Trilogía del Fruto: GRA • CA • MU
                </h2>
                <p class="text-sm text-[#b2c7bc] leading-relaxed">
                    Cada componente del café posee una cotización premium cuando se extrae sin contaminación hídrica.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- GRA: GRANO (Con toque cálido de grano de café) -->
                <div class="bg-gradient-to-b from-[#183626] to-[#1a140d] rounded-3xl p-6 border border-[#593223]/60 hover:border-[#d4a737] transition-all space-y-4 shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-display font-black text-[#d4a737]">GRA</span>
                        <span class="text-[10px] font-semibold px-2.5 py-0.5 rounded-full bg-[#3d1f14] text-[#d4a737] border border-[#d4a737]/40">Grano Pergamino</span>
                    </div>
                    <h3 class="text-lg font-bold text-white">Café de Alta Especialidad (SCA 85+)</h3>
                    <ul class="text-xs text-[#9ab0a4] space-y-2 leading-relaxed">
                        <li class="flex items-start gap-1.5">
                            <span class="text-[#4ade80] font-bold">✓</span>
                            <span><strong>Cero Daño Mecánico:</strong> El rodillo micrométrico respeta el embrión del grano pergamino.</span>
                        </li>
                        <li class="flex items-start gap-1.5">
                            <span class="text-[#4ade80] font-bold">✓</span>
                            <span><strong>Conformidad EUDR:</strong> Trazabilidad completa libre de deforestación para exportación europea.</span>
                        </li>
                    </ul>
                </div>

                <!-- CA: CÁSCARA (Con toque de cereza madura / borgoña) -->
                <div class="bg-gradient-to-b from-[#183626] to-[#200f13] rounded-3xl p-6 border border-[#631a23]/60 hover:border-[#d4a737] transition-all space-y-4 shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-display font-black text-[#e2be5c]">CA</span>
                        <span class="text-[10px] font-semibold px-2.5 py-0.5 rounded-full bg-[#431218] text-[#f1c2c8] border border-[#631a23]/60">Cáscara Pura</span>
                    </div>
                    <h3 class="text-lg font-bold text-white">Superalimento e Infusión</h3>
                    <ul class="text-xs text-[#9ab0a4] space-y-2 leading-relaxed">
                        <li class="flex items-start gap-1.5">
                            <span class="text-[#4ade80] font-bold">✓</span>
                            <span><strong>Cascara Tea:</strong> Infusión frutal energizante de alta demanda internacional.</span>
                        </li>
                        <li class="flex items-start gap-1.5">
                            <span class="text-[#4ade80] font-bold">✓</span>
                            <span><strong>Harina de Café:</strong> Rica en fibra dietaria y antioxidantes naturales sin gluten.</span>
                        </li>
                    </ul>
                </div>

                <!-- MU: MUCÍLAGO (Con toque ámbar miel) -->
                <div class="bg-gradient-to-b from-[#183626] to-[#1c180e] rounded-3xl p-6 border border-[#d4a737]/40 hover:border-[#4ade80] transition-all space-y-4 shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-display font-black text-[#4ade80]">MU</span>
                        <span class="text-[10px] font-semibold px-2.5 py-0.5 rounded-full bg-[#3a280b] text-[#ebd288] border border-[#d4a737]/40">Mucílago Puro</span>
                    </div>
                    <h3 class="text-lg font-bold text-white">Polifenoles y Nutracéutica</h3>
                    <ul class="text-xs text-[#9ab0a4] space-y-2 leading-relaxed">
                        <li class="flex items-start gap-1.5">
                            <span class="text-[#4ade80] font-bold">✓</span>
                            <span><strong>Azúcares Fermentables:</strong> Jarabes naturales y néctares para nutracéutica.</span>
                        </li>
                        <li class="flex items-start gap-1.5">
                            <span class="text-[#4ade80] font-bold">✓</span>
                            <span><strong>Cosmética y Biol:</strong> Alta concentración de ácido clorogénico y biofertilizante probiótico.</span>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. COSMOVISIÓN: NÚGKUI Y LA SELVA IKAM                                   -->
    <!-- ========================================================================= -->
    <section id="cultura" class="py-24 bg-gradient-to-b from-[#0c2016] via-[#132b1e] to-[#0c2016] relative overflow-hidden border-t border-[#295a42]/50">
        
        <!-- Textura de fondo sutil con granos de café -->
        <div class="absolute inset-0 pointer-events-none opacity-15 bg-cover bg-center mix-blend-overlay filter brightness-110" style="background-image: url('{{ asset('images/brand/coffee-bg.jpg') }}');"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- Ilustración NÚGKUI (image17.png) -->
                <div class="lg:col-span-5 text-center">
                    <div class="relative inline-block bg-gradient-to-b from-[#183626] to-[#12291d] p-4 rounded-3xl border border-[#d4a737]/40 shadow-2xl">
                        <img src="{{ asset('images/extracted_pptx/image17.png') }}" alt="NÚGKUI - Madre Tierra Proyecto IKAM Amazonas" class="w-full max-w-sm rounded-2xl mx-auto drop-shadow-xl">
                        <span class="text-xs text-[#d4a737] font-semibold block mt-3 uppercase tracking-wider">
                            NÚGKUI • Madre Tierra Awajún
                        </span>
                    </div>
                </div>

                <!-- Declaración de Filosofía Institucional -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-block p-1.5 rounded-full bg-[#d4a737]/15 border border-[#d4a737]/35">
                        <span class="text-xs font-bold uppercase tracking-widest text-[#d4a737] px-3 py-1">
                            Raíces Amazónicas • Cultura Awajún
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-display font-bold text-white leading-tight">
                        "El Verdadero Valor del Café Emerge al Proteger la Tierra"
                    </h2>

                    <blockquote class="bg-[#12291d]/90 border-l-4 border-[#d4a737] border-y border-r border-[#295a42]/50 rounded-2xl p-6 sm:p-8 space-y-4 shadow-xl">
                        <p class="font-serif-title italic text-base sm:text-lg text-[#eef7f2] leading-relaxed">
                            "El café no es solo un grano para exportar, es un fruto integral cuyo verdadero valor emerge al proteger la tierra y transformar lo que antes contaminaba: con tecnología limpia, energía solar y desinfección responsable en origen, el Proyecto GRACAMU IKAM rescata la cáscara y el mucílago para dignificar el trabajo de nuestras familias productoras en Amazonas, demostrando que una caficultura regenerativa, libre de residuos y de alto impacto ambiental no solo es posible en nuestra selva, sino que se alza como un modelo sostenible y replicable para todo el Perú y el mundo."
                        </p>
                        <div class="pt-2 flex flex-col sm:flex-row items-start sm:items-center justify-between text-xs text-[#9ab0a4] gap-1">
                            <span class="font-bold text-white uppercase tracking-wider">Proyecto GRACAMU IKAM 2030</span>
                            <span class="text-[#d4a737]">IESTP de Excelencia Perú Japón</span>
                        </div>
                    </blockquote>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. DIRECTORIO DEL EQUIPO (CON CARRUSEL AUTOMÁTICO EN MÓVIL)               -->
    <!-- ========================================================================= -->
    <section id="equipo" class="py-24 bg-[#0c2016] border-t border-[#295a42]/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#d4a737]">Comunidad de Investigación y Emprendimiento</span>
                <h2 class="text-3xl sm:text-4xl font-display font-bold text-white">
                    Equipo de Docentes y Estudiantes Creadores
                </h2>
                <p class="text-sm text-[#b2c7bc] leading-relaxed">
                    Docentes mentores y estudiantes del Instituto de Educación Superior Tecnológico Público de Excelencia "Perú Japón".
                </p>
            </div>

            <!-- DIRECCIÓN INSTITUCIONAL E INCUBADORA STARTUP -->
            <div class="max-w-5xl mx-auto mb-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Director General IDEX -->
                    <div class="bg-gradient-to-b from-[#183626] to-[#12291d] rounded-3xl p-6 sm:p-7 border-2 border-[#295a42]/80 hover:border-[#d4a737]/60 shadow-2xl flex flex-col sm:flex-row items-center gap-5 text-center sm:text-left transition-all">
                        <img src="{{ asset('images/team/director-mario-torrejon.jpg') }}" alt="Director Dr. Mario Y. Torrejón Arellanos" class="w-28 h-28 sm:w-32 sm:h-32 rounded-2xl object-cover object-top border-2 border-[#d4a737] shadow-lg flex-shrink-0">
                        <div class="space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-[#10b981]/20 text-[#4ade80] border border-[#10b981]/35 inline-block">
                                Dirección General
                            </span>
                            <h3 class="text-lg sm:text-xl font-bold text-white">Dr. Mario Y. Torrejón Arellanos</h3>
                            <p class="text-xs text-[#9ab0a4] leading-relaxed">
                                Director General del IESTP de Excelencia Perú Japón. Liderazgo institucional, respaldo a la investigación tecnológica y articulación con entidades regionales y nacionales.
                            </p>
                            <div class="p-2 rounded-lg bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-[#d4a737]">
                                <strong>Aporte Clave:</strong> Conducción estratégica y viabilidad institucional del proyecto.
                            </div>
                        </div>
                    </div>

                    <!-- Director de Incubadora StartUp (Con toque cálido café) -->
                    <div class="bg-gradient-to-b from-[#183626] via-[#1c2a20] to-[#1a120c] rounded-3xl p-6 sm:p-7 border-2 border-[#593223]/80 hover:border-[#d4a737]/60 shadow-2xl flex flex-col sm:flex-row items-center gap-5 text-center sm:text-left transition-all">
                        <img src="{{ asset('images/team/incubadora-jose-alejos.jpg') }}" alt="Mg. Jose Magno Alejos Salazar" class="w-28 h-28 sm:w-32 sm:h-32 rounded-2xl object-cover object-top border-2 border-[#d4a737] shadow-lg flex-shrink-0">
                        <div class="space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-[#3d1f14] text-[#ebd288] border border-[#d4a737]/40 inline-block">
                                Dirección de Incubadora • PJ StartUp
                            </span>
                            <h3 class="text-lg sm:text-xl font-bold text-white">Mg. Jose Magno Alejos Salazar</h3>
                            <p class="text-xs text-[#9ab0a4] leading-relaxed">
                                Director de la Incubadora Perú Japón StartUp. Conducción y mentoría en modelos de negocio, formulación de proyectos de innovación y escalamiento comercial en bioeconomía.
                            </p>
                            <div class="p-2 rounded-lg bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-[#d4a737]">
                                <strong>Aporte Clave:</strong> Incubación Start Up, articulación del ecosistema emprendedor y mentoría.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===================== DOCENTES ASESORES (CARRUSEL AUTOMÁTICO EN MÓVIL) ===================== -->
            <div class="mb-16">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-[#d4a737]">
                        — Docentes Asesores y Mentores de Proyecto —
                    </h3>
                    <div class="flex md:hidden items-center gap-2">
                        <button id="docPrev" type="button" class="w-8 h-8 rounded-full bg-[#183626] text-white hover:text-[#d4a737] border border-[#295a42] flex items-center justify-center text-sm font-bold" aria-label="Anterior">&larr;</button>
                        <button id="docNext" type="button" class="w-8 h-8 rounded-full bg-[#183626] text-white hover:text-[#d4a737] border border-[#295a42] flex items-center justify-center text-sm font-bold" aria-label="Siguiente">&rarr;</button>
                    </div>
                </div>

                <div id="docentesCarousel" class="flex md:grid md:grid-cols-4 gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar pb-4">
                    
                    <!-- Docente 1: Otto Mori -->
                    <div class="w-[82vw] sm:w-[300px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737]/60 transition-all text-center space-y-3 group shadow-lg flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/docente-otto-mori.jpg') }}" alt="Docente Ing. Otto Mori Tuesta" class="w-24 h-24 rounded-full mx-auto object-cover object-top border-2 border-[#295a42] group-hover:border-[#d4a737] transition-all shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Ing. Otto Mori Tuesta</h4>
                                <p class="text-[11px] text-[#4ade80] font-semibold">Asesor Agroindustrial</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Línea de bioeconomía circular, aprovechamiento de polifenoles de cáscara y mucílago y cumplimiento de normativas EUDR.
                        </div>
                    </div>

                    <!-- Docente 2: Manuel Quispe -->
                    <div class="w-[82vw] sm:w-[300px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737]/60 transition-all text-center space-y-3 group shadow-lg flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/docente-manuel-quispe.jpg') }}" alt="Docente Dr. Manuel Jesus Quispe Narvaez" class="w-24 h-24 rounded-full mx-auto object-cover object-top border-2 border-[#295a42] group-hover:border-[#d4a737] transition-all shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Dr. Manuel Jesús Quispe N.</h4>
                                <p class="text-[11px] text-[#4ade80] font-semibold">Asesor de Investigación</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Metodología científica, formulación del problema regional y rigurosidad en los indicadores de impacto ambiental.
                        </div>
                    </div>

                    <!-- Docente 3: Roberto Alvarado -->
                    <div class="w-[82vw] sm:w-[300px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737]/60 transition-all text-center space-y-3 group shadow-lg flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/docente-roberto-alvarado.jpg') }}" alt="Docente Ing. Roberto Carlos Alvarado Pereyra" class="w-24 h-24 rounded-full mx-auto object-cover object-top border-2 border-[#295a42] group-hover:border-[#d4a737] transition-all shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Ing. Roberto Carlos Alvarado P.</h4>
                                <p class="text-[11px] text-[#d4a737] font-semibold">Mentor de Innovación / FabLab</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Modelado digital 3D del prototipo, fabricación digital en FabLab, mentoría en modelo de negocio e incubación Start Up.
                        </div>
                    </div>

                    <!-- Docente 4: Gerson Vega -->
                    <div class="w-[82vw] sm:w-[300px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737]/60 transition-all text-center space-y-3 group shadow-lg flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/docente-gerson-vega.jpg') }}" alt="Docente Pt. Gerson Daniell Vega Caro" class="w-24 h-24 rounded-full mx-auto object-cover object-top border-2 border-[#295a42] group-hover:border-[#d4a737] transition-all shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Pt. Gerson Daniell Vega Caro</h4>
                                <p class="text-[11px] text-[#4ade80] font-semibold">Asesor Técnico y Mecánica</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Cálculo de fuerzas mecánicas, calibración del tambor micrométrico (4 a 8 mm) y selección de aleaciones en acero inox 304.
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===================== ESTUDIANTES CREADORES (CARRUSEL AUTOMÁTICO EN MÓVIL) ===================== -->
            <div>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-[#d4a737]">
                        — Estudiantes Investigadores y Creadores del Proyecto —
                    </h3>
                    <div class="flex md:hidden items-center gap-2">
                        <button id="estPrev" type="button" class="w-8 h-8 rounded-full bg-[#183626] text-white hover:text-[#d4a737] border border-[#295a42] flex items-center justify-center text-sm font-bold" aria-label="Anterior">&larr;</button>
                        <button id="estNext" type="button" class="w-8 h-8 rounded-full bg-[#183626] text-white hover:text-[#d4a737] border border-[#295a42] flex items-center justify-center text-sm font-bold" aria-label="Siguiente">&rarr;</button>
                    </div>
                </div>

                <div id="estudiantesCarousel" class="flex md:grid md:grid-cols-5 gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar pb-4">
                    
                    <!-- Estudiante 1: Anderson Santiago -->
                    <div class="w-[82vw] sm:w-[280px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737] transition-all text-center space-y-3.5 shadow-xl group flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/estudiante-anderson-santiago.jpg') }}" alt="Estudiante Anderson Santiago Yalta" class="w-24 h-24 rounded-2xl mx-auto object-cover object-top border-2 border-[#d4a737]/50 group-hover:scale-105 transition-transform shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Anderson Santiago Yalta</h4>
                                <p class="text-[11px] text-[#4ade80] font-semibold">Tecnología y Sistemas</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Integración del módulo híbrido solar, controladores electrónicos de carga, batería LiFePO4 y ensamble motriz.
                        </div>
                    </div>

                    <!-- Estudiante 2: Joselito Cuvaz -->
                    <div class="w-[82vw] sm:w-[280px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737] transition-all text-center space-y-3.5 shadow-xl group flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/estudiante-joselito-cuvaz.jpg') }}" alt="Estudiante Cuvaz Briceño Laison Joselito" class="w-24 h-24 rounded-2xl mx-auto object-cover object-top border-2 border-[#d4a737]/50 group-hover:scale-105 transition-transform shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Cuvaz Briceño Laison Joselito</h4>
                                <p class="text-[11px] text-[#4ade80] font-semibold">Diseño y Validación</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Pruebas operativas en parcelas de pendiente pronunciada, calibración de campo y diseño biomecánico del arnés.
                        </div>
                    </div>

                    <!-- Estudiante 3: Royler Huaman -->
                    <div class="w-[82vw] sm:w-[280px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737] transition-all text-center space-y-3.5 shadow-xl group flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/estudiante-royler-huaman.jpg') }}" alt="Estudiante Huaman Arevalo Royler" class="w-24 h-24 rounded-2xl mx-auto object-cover object-top border-2 border-[#d4a737]/50 group-hover:scale-105 transition-transform shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Huamán Arévalo Royler</h4>
                                <p class="text-[11px] text-[#4ade80] font-semibold">Bioeconomía y Difusión</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Protocolos de secado limpio de cáscara, extracción no diluida de mucílago y articulación con caficultores locales.
                        </div>
                    </div>

                    <!-- Estudiante 4: Cleiser Zumaeta -->
                    <div class="w-[82vw] sm:w-[280px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737] transition-all text-center space-y-3.5 shadow-xl group flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/estudiante-cleiser-zumaeta.jpg') }}" alt="Estudiante Zumaeta Cuchca Cleiser" class="w-24 h-24 rounded-2xl mx-auto object-cover object-top border-2 border-[#d4a737]/50 group-hover:scale-105 transition-transform shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Zumaeta Cuchca Cleiser</h4>
                                <p class="text-[11px] text-[#4ade80] font-semibold">Investigación y Campo</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Medición de índices de grano quebrado (cero daño), toma de datos agroclimáticos y ensayos mecánicos en origen.
                        </div>
                    </div>

                    <!-- Estudiante 5: Jharel Andre Arana Vargas -->
                    <div class="w-[82vw] sm:w-[280px] md:w-auto shrink-0 snap-center bg-gradient-to-b from-[#183626] to-[#12291d] rounded-2xl p-5 border border-[#295a42]/60 hover:border-[#d4a737] transition-all text-center space-y-3.5 shadow-xl group flex flex-col justify-between">
                        <div class="space-y-3">
                            <img src="{{ asset('images/team/estudiante-jharel-arana.jpg') }}" alt="Estudiante Jharel Andre Arana Vargas" class="w-24 h-24 rounded-2xl mx-auto object-cover object-top border-2 border-[#d4a737]/50 group-hover:scale-105 transition-transform shadow-md">
                            <div>
                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4a737] transition-colors">Jharel Andre Arana Vargas</h4>
                                <p class="text-[11px] text-[#d4a737] font-semibold">Arquitectura Web y Sistemas</p>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#0c2016] border border-[#295a42]/50 text-[11px] text-left text-[#9ab0a4] leading-relaxed">
                            <strong class="text-white block mb-0.5">Aporte en el Proyecto:</strong>
                            Diseño de la plataforma web oficial, desarrollo de la experiencia interactiva, arquitectura del sistema de encuestas y vinculación tecnológica con caficultores.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. CANAL DE COMUNICACIÓN, CONTACTO Y ENCUESTA OFICIAL                     -->
    <!-- ========================================================================= -->
    <span id="encuesta" class="sr-only"></span>
    <section id="contacto" class="py-24 bg-gradient-to-b from-[#0a1a10] via-[#0f2619] to-[#07140d] border-t border-[#295a42]/50 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- TARJETA DESTACADA: ENCUESTA OFICIAL GOOGLE FORMS (Verde esmeralda con centro tostado café) -->
            <div class="mb-14 p-6 sm:p-8 rounded-3xl bg-gradient-to-r from-[#183626] via-[#241710] to-[#1a2d21] border-2 border-[#d4a737]/50 shadow-2xl relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-44 h-44 rounded-full bg-[#d4a737]/10 blur-2xl pointer-events-none"></div>
                <div class="flex flex-col sm:flex-row items-center justify-between gap-6 relative z-10 text-center sm:text-left">
                    <div class="space-y-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-[#3d1f14] text-[#ebd288] border border-[#d4a737]/40">
                            📝 Encuesta Oficial de Campo
                        </span>
                        <h3 class="text-xl sm:text-2xl font-display font-bold text-white">
                            Diagnóstico Cafetalero en Amazonas 2026–2030
                        </h3>
                        <p class="text-xs sm:text-sm text-[#c4b3a9] max-w-xl leading-relaxed">
                            ¿Eres caficultor, dirigente de cooperativa o productor en Utcubamba, Rodríguez de Mendoza, Bagua, Bongará o Luya? Ayúdanos a dimensionar el impacto respondiendo el formulario oficial.
                        </p>
                    </div>
                    <div class="flex-shrink-0 w-full sm:w-auto">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKqZvcmPpjg_r2wqXCEIIawxOM2ZM1c2EMglGUJas6kJeEBw/viewform?usp=send_form" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-[#85222f] via-[#631a23] to-[#42251a] hover:from-[#a32b3b] hover:to-[#593223] text-white px-7 py-4 rounded-2xl font-bold text-xs uppercase tracking-wider shadow-2xl border border-[#d4a737]/50 transition-all transform hover:scale-105">
                            <span>Llenar Encuesta Oficial</span>
                            <svg class="w-4 h-4 text-[#d4a737]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center space-y-3 mb-10">
                <span class="text-xs font-bold uppercase tracking-widest text-[#d4a737]">Vinculación & Alianzas Institucionales</span>
                <h2 class="text-3xl sm:text-4xl font-display font-bold text-white">
                    Canal Directo de Comunicación
                </h2>
                <p class="text-sm text-[#b2c7bc] leading-relaxed max-w-2xl mx-auto">
                    Comunícate directamente con el equipo de GRACAMU IKAM y la Incubadora Perú Japón StartUp para coordinar pruebas de campo, convenios con cooperativas, compra/venta de subproductos o consultas técnicas.
                </p>
            </div>

            <!-- Formulario de Comunicación Directa -->
            <div class="bg-gradient-to-b from-[#183626] to-[#12291d] p-8 sm:p-10 rounded-3xl border border-[#295a42]/70 shadow-2xl">
                
                <form id="contactForm" class="space-y-6" onsubmit="return false;">
                    <div class="border-b border-[#295a42]/70 pb-3">
                        <h4 class="text-sm font-display font-bold text-[#d4a737] uppercase tracking-wider">
                            Formulario de Mensaje Directo a WhatsApp
                        </h4>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Nombre Completo -->
                        <div>
                            <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-[#d4a737] mb-2">
                                Nombre y Apellidos *
                            </label>
                            <input type="text" id="name" name="name" required placeholder="Ej. Juan Carlos Mendoza" class="w-full bg-[#0c2016] border border-[#295a42]/70 rounded-xl px-4 py-3 text-sm text-white placeholder-[#6d8276] focus:outline-none focus:border-[#d4a737] transition-colors">
                        </div>

                        <!-- Celular / WhatsApp -->
                        <div>
                            <label for="phone" class="block text-xs font-semibold uppercase tracking-wider text-[#d4a737] mb-2">
                                Celular / WhatsApp *
                            </label>
                            <input type="tel" id="phone" name="phone" required placeholder="Ej. 975 800 888" class="w-full bg-[#0c2016] border border-[#295a42]/70 rounded-xl px-4 py-3 text-sm text-white placeholder-[#6d8276] focus:outline-none focus:border-[#d4a737] transition-colors">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Tipo de Participante / Rol -->
                        <div>
                            <label for="producer_type" class="block text-xs font-semibold uppercase tracking-wider text-[#9ab0a4] mb-2">
                                Tipo de Interesado / Organización
                            </label>
                            <select id="producer_type" name="producer_type" class="w-full bg-[#0c2016] border border-[#295a42]/70 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#d4a737] transition-colors">
                                <option value="Caficultor Independiente">Caficultor Independiente</option>
                                <option value="Representante de Cooperativa">Representante de Cooperativa / Asociación</option>
                                <option value="Empresa / Comprador de Café">Empresa / Comprador de Café o Subproductos</option>
                                <option value="Estudiante / Investigador">Estudiante / Investigador / Docente</option>
                                <option value="Institución Pública o Privada">Institución Pública / ONG / Cooperación</option>
                                <option value="Prensa o Difusión">Prensa / Medio de Comunicación</option>
                                <option value="Otro">Otro Motivo</option>
                            </select>
                        </div>

                        <!-- Finca, Cooperativa o Ubicación -->
                        <div>
                            <label for="cooperative_or_location" class="block text-xs font-semibold uppercase tracking-wider text-[#9ab0a4] mb-2">
                                Entidad, Finca o Ciudad
                            </label>
                            <input type="text" id="cooperative_or_location" name="cooperative_or_location" placeholder="Ej. Cooperativa Lonya Grande / Chachapoyas" class="w-full bg-[#0c2016] border border-[#295a42]/70 rounded-xl px-4 py-3 text-sm text-white placeholder-[#6d8276] focus:outline-none focus:border-[#d4a737] transition-colors">
                        </div>
                    </div>

                    <!-- Mensaje o Consulta -->
                    <div>
                        <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-[#d4a737] mb-2">
                            Mensaje, Consulta o Propuesta de Alianza *
                        </label>
                        <textarea id="message" name="message" rows="4" required placeholder="Escriba su mensaje, consulta técnica, solicitud de visita a campo o propuesta de articulación..." class="w-full bg-[#0c2016] border border-[#295a42]/70 rounded-xl px-4 py-3 text-sm text-white placeholder-[#6d8276] focus:outline-none focus:border-[#d4a737] transition-colors"></textarea>
                    </div>

                    <!-- Acción: Enviar Mensaje por WhatsApp Directo -->
                    <div class="pt-4 flex justify-center">
                        <button type="button" id="sendContactWhatsAppBtn" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#20ba59] text-white px-10 py-4 rounded-xl font-bold text-sm uppercase tracking-wider shadow-2xl transition-all transform hover:-translate-y-0.5 hover:scale-[1.02]">
                            <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            <span>Enviar Mensaje por WhatsApp Directo</span>
                        </button>
                    </div>

                    <p class="text-[11px] text-[#7d9688] text-center pt-2">
                        Al presionar el botón se abrirá WhatsApp con los datos completados para contactarte al instante con el equipo técnico de GRACAMU IKAM.
                    </p>

                </form>

            </div>

        </div>
    </section>

    <!-- SCRIPTS: CARRUSELES AUTOMÁTICOS Y GENERADOR DE ENCUESTA A WHATSAPP -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Función genérica para carrusel táctil y automático
            function setupAutoCarousel(carouselId, prevBtnId, nextBtnId, step = 280, intervalTime = 3800) {
                const carousel = document.getElementById(carouselId);
                const prevBtn = document.getElementById(prevBtnId);
                const nextBtn = document.getElementById(nextBtnId);

                if (!carousel) return;

                let isPaused = false;

                function scrollNext() {
                    const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                    if (carousel.scrollLeft >= maxScroll - 10) {
                        carousel.scrollTo({ left: 0, behavior: 'smooth' });
                    } else {
                        carousel.scrollBy({ left: step, behavior: 'smooth' });
                    }
                }

                function scrollPrev() {
                    if (carousel.scrollLeft <= 10) {
                        carousel.scrollTo({ left: carousel.scrollWidth, behavior: 'smooth' });
                    } else {
                        carousel.scrollBy({ left: -step, behavior: 'smooth' });
                    }
                }

                if (nextBtn) nextBtn.addEventListener('click', scrollNext);
                if (prevBtn) prevBtn.addEventListener('click', scrollPrev);

                // Auto slide si está en vista móvil (ancho menor a 768)
                let timer = setInterval(() => {
                    if (!isPaused && window.innerWidth < 768) {
                        scrollNext();
                    }
                }, intervalTime);

                // Pausar al tocar o hacer hover
                carousel.addEventListener('mouseenter', () => isPaused = true);
                carousel.addEventListener('mouseleave', () => isPaused = false);
                carousel.addEventListener('touchstart', () => isPaused = true, { passive: true });
                carousel.addEventListener('touchend', () => {
                    setTimeout(() => isPaused = false, 2500);
                });
            }

            // Iniciar carruseles automáticos
            setupAutoCarousel('docentesCarousel', 'docPrev', 'docNext', 280, 4000);
            setupAutoCarousel('estudiantesCarousel', 'estPrev', 'estNext', 260, 3500);

            // Generador de Mensaje / WhatsApp Directo
            const sendContactWhatsAppBtn = document.getElementById('sendContactWhatsAppBtn');
            const whatsappNumber = "51975800888"; // Número oficial de referencia del IDEX

            if (sendContactWhatsAppBtn) {
                sendContactWhatsAppBtn.addEventListener('click', () => {
                    const name = document.getElementById('name').value.trim();
                    const phone = document.getElementById('phone').value.trim();
                    const producerType = document.getElementById('producer_type').value;
                    const location = document.getElementById('cooperative_or_location').value.trim() || 'No especificada';
                    const message = document.getElementById('message').value.trim();

                    if (!name || !message) {
                        alert('Por favor, ingresa al menos tu Nombre y tu Mensaje antes de enviar.');
                        return;
                    }

                    const text = `🌿 *COMUNICACIÓN DIRECTA - PROYECTO GRACAMU IKAM 2030*\n` +
                                 `-----------------------------------------\n` +
                                 `👤 *Nombre:* ${name}\n` +
                                 `📱 *Celular:* ${phone || 'No indicado'}\n` +
                                 `🏷️ *Tipo / Organización:* ${producerType}\n` +
                                 `📍 *Entidad / Ubicación:* ${location}\n` +
                                 `💬 *Mensaje / Propuesta:* ${message}\n` +
                                 `-----------------------------------------\n` +
                                 `_Enviado desde gracamu.idexperujapon.edu.pe_`;

                    const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(text)}`;
                    window.open(url, '_blank');
                });
            }
        });
    </script>

@endsection
