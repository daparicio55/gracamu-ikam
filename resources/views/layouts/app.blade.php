<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRACAMU IKAM | Caficultura Regenerativa y Bioeconomía Circular — IDEX Perú Japón</title>
    
    <meta name="description" content="Proyecto de innovación tecnológica y bioeconomía circular en Amazonas: Sistema portátil autónomo de despulpado fraccionado en origen sin agua (Grano, Cáscara y Mucílago). IESTP de Excelencia Perú Japón.">
    <meta name="keywords" content="Gracamu, Ikam, Cafe Amazonas, Caficultura Regenerativa, IDEX Peru Japon, Bioeconomia Circular, Despulpado Ecologico, Chachapoyas, Rodriguez de Mendoza, Utcubamba">
    <meta name="author" content="IESTP de Excelencia Perú Japón - Proyecto GRACAMU IKAM">
    <meta name="theme-color" content="#2d0e12">

    <!-- Open Graph / Redes Sociales -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="GRACAMU IKAM — Caficultura Regenerativa en Amazonas">
    <meta property="og:description" content="Transformando el 80% de la biomasa del café en subproductos de alto valor sin contaminar nuestras cuencas. Prototipo autónomo con energía solar.">
    <meta property="og:image" content="{{ asset('images/brand/logo-gracamu.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/brand/logo-gracamu.png') }}">  

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#0c2016] text-[#eef7f2] font-body antialiased selection:bg-[#d4a737] selection:text-[#0c2016] min-h-screen flex flex-col justify-between">

    <!-- NAVBAR NAVEGACIÓN STICKY -->
    <header class="sticky top-0 z-50 backdrop-blur-md bg-[#132b1e]/92 border-b border-[#295a42]/60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logotipo e Identidad -->
                <a href="#inicio" class="flex items-center gap-3.5 group">
                    <img src="{{ asset('images/brand/logo-gracamu.png') }}" alt="Logo GRACAMU IKAM" class="h-12 w-12 object-contain rounded-full bg-[#183626] p-1 border border-[#d4a737]/40 shadow-md group-hover:scale-105 transition-transform duration-300">
                    <div class="flex flex-col">
                        <span class="font-display font-bold text-xl tracking-wider text-white group-hover:text-[#d4a737] transition-colors">
                            GRACAMU <span class="text-[#d4a737] text-sm tracking-widest font-normal">IKAM</span>
                        </span>
                        <span class="text-[10px] tracking-wider uppercase text-[#a3b8ad] flex items-center gap-1">
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                            IDEX Perú Japón • Amazonas
                        </span>
                    </div>
                </a>

                <!-- Menú Desktop -->
                <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-[#c8d6ce]">
                    <a href="#inicio" class="hover:text-[#d4a737] transition-colors">Inicio</a>
                    <a href="#problema" class="hover:text-[#d4a737] transition-colors">El Problema</a>
                    <a href="#solucion" class="hover:text-[#d4a737] transition-colors">Prototipo</a>
                    <a href="#modelo-gracamu" class="hover:text-[#d4a737] transition-colors">Gra-Ca-Mu</a>
                    <a href="#cultura" class="hover:text-[#d4a737] transition-colors">NÚGKUI</a>
                    <a href="#equipo" class="hover:text-[#d4a737] transition-colors">Equipo</a>
                    <a href="#contacto" class="hover:text-[#d4a737] transition-colors">Contacto & Alianzas</a>
                </nav>

                <!-- CTA Botón Contacto y Enlace Institucional -->
                <div class="hidden sm:flex items-center gap-3">
                    <a href="https://idexperujapon.edu.pe/" target="_blank" class="inline-flex items-center gap-1.5 text-xs text-[#9ab0a4] hover:text-white px-3 py-2 rounded-lg border border-white/10 hover:border-white/30 transition-all">
                        <svg class="w-3.5 h-3.5 text-[#d4a737]" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/></svg>
                        Portal IDEX
                    </a>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKqZvcmPpjg_r2wqXCEIIawxOM2ZM1c2EMglGUJas6kJeEBw/viewform?usp=send_form" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-gradient-to-r from-[#8c2533] to-[#6e1e28] hover:from-[#a93242] hover:to-[#8c2533] text-white px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-lg border border-[#d4a737]/30 transition-all transform hover:-translate-y-0.5">
                        <span>Llenar Encuesta</span>
                        <svg class="w-3.5 h-3.5 text-[#d4a737]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                </div>

                <!-- Botón Menú Móvil -->
                <div class="flex md:hidden">
                    <button id="mobileMenuBtn" type="button" class="text-white hover:text-[#d4a737] p-2 focus:outline-none" aria-label="Abrir menú">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú Móvil Desplegable -->
        <div id="mobileMenu" class="hidden md:hidden bg-[#132b1e] border-b border-[#295a42]/60 px-4 pt-3 pb-6 space-y-3">
            <a href="#inicio" class="block py-2 text-sm text-[#e0ece5] hover:text-[#d4a737] border-b border-white/5">Inicio</a>
            <a href="#problema" class="block py-2 text-sm text-[#e0ece5] hover:text-[#d4a737] border-b border-white/5">El Problema de Aguas Mieles</a>
            <a href="#solucion" class="block py-2 text-sm text-[#e0ece5] hover:text-[#d4a737] border-b border-white/5">Prototipo Autónomo</a>
            <a href="#modelo-gracamu" class="block py-2 text-sm text-[#e0ece5] hover:text-[#d4a737] border-b border-white/5">Modelo Grano-Cáscara-Mucílago</a>
            <a href="#cultura" class="block py-2 text-sm text-[#e0ece5] hover:text-[#d4a737] border-b border-white/5">Cosmovisión NÚGKUI</a>
            <a href="#equipo" class="block py-2 text-sm text-[#e0ece5] hover:text-[#d4a737] border-b border-white/5">Equipo IDEX</a>
            <a href="#contacto" class="block py-2 text-sm text-[#e0ece5] hover:text-[#d4a737]">Contacto y Comunicación</a>
            <a href="https://idexperujapon.edu.pe/" target="_blank" class="block py-2 text-sm text-[#d4a737] border-t border-white/10 pt-3">
                → Ir al Portal Central IDEX Perú Japón
            </a>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKqZvcmPpjg_r2wqXCEIIawxOM2ZM1c2EMglGUJas6kJeEBw/viewform?usp=send_form" target="_blank" rel="noopener noreferrer" class="block w-full text-center bg-[#8c2533] text-white py-2.5 rounded-lg text-xs font-bold uppercase tracking-wider mt-2">
                Llenar Encuesta Oficial (Google Forms)
            </a>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER INSTITUCIONAL -->
    <footer class="bg-[#0a1a10] border-t border-[#295a42]/60 pt-16 pb-10 text-sm text-[#a3b8ad]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
                <!-- Columna 1: Marca & Lema -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/brand/logo-gracamu.png') }}" alt="Logo GRACAMU" class="h-10 w-10 object-contain rounded-full bg-[#183626] p-1 border border-[#d4a737]/30">
                        <span class="font-display font-bold text-lg text-white">GRACAMU <span class="text-[#d4a737] text-xs">IKAM</span></span>
                    </div>
                    <p class="text-xs text-[#a3b8ad] leading-relaxed">
                        Caficultura regenerativa, bioeconomía circular y tecnología de despulpado fraccionado en origen sin agua. Proyecto de investigación e innovación tecnológica.
                    </p>
                    <div class="text-[11px] text-[#819e8f]">
                        <p class="font-semibold text-white">Instituto de Educación Superior Tecnológico Público de Excelencia "Perú Japón"</p>
                        <p>Jr. Amazonas 120, Chachapoyas 01001 — Amazonas, Perú</p>
                    </div>
                </div>

                <!-- Columna 2: Enlaces Rápidos -->
                <div>
                    <h4 class="text-white font-semibold text-xs uppercase tracking-wider mb-4 border-b border-[#295a42]/60 pb-2">Secciones del Proyecto</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#inicio" class="hover:text-[#d4a737] transition-colors">Inicio</a></li>
                        <li><a href="#problema" class="hover:text-[#d4a737] transition-colors">Problemática de Aguas Mieles en Amazonas</a></li>
                        <li><a href="#solucion" class="hover:text-[#d4a737] transition-colors">Prototipo y Modelos de Ingeniería</a></li>
                        <li><a href="#modelo-gracamu" class="hover:text-[#d4a737] transition-colors">Bioproductos Gra-Ca-Mu</a></li>
                        <li><a href="#equipo" class="hover:text-[#d4a737] transition-colors">Docentes Asesores y Estudiantes Creadores</a></li>
                        <li><a href="#contacto" class="hover:text-[#d4a737] transition-colors">Canal de Contacto & Alianzas</a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdKqZvcmPpjg_r2wqXCEIIawxOM2ZM1c2EMglGUJas6kJeEBw/viewform?usp=send_form" target="_blank" rel="noopener noreferrer" class="hover:text-[#d4a737] transition-colors inline-flex items-center gap-1">Encuesta Oficial en Google Forms <span>↗</span></a></li>
                    </ul>
                </div>

                <!-- Columna 3: Retorno al Instituto Central -->
                <div class="space-y-4">
                    <h4 class="text-white font-semibold text-xs uppercase tracking-wider mb-4 border-b border-[#295a42]/60 pb-2">Instituto de Excelencia</h4>
                    <p class="text-xs text-[#a3b8ad] leading-relaxed">
                        Proyecto desarrollado con el respaldo académico y tecnológico de los programas de estudios e incubación del IDEX Perú Japón en Chachapoyas.
                    </p>
                    <a href="https://idexperujapon.edu.pe/" target="_blank" class="inline-flex items-center gap-2 bg-[#183626] hover:bg-[#1f4331] text-[#d4a737] border border-[#d4a737]/40 px-4 py-2.5 rounded-xl text-xs font-semibold transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/></svg>
                        <span>Volver al Portal Principal del Instituto</span>
                    </a>
                </div>
            </div>

            <!-- Créditos finales -->
            <div class="border-t border-white/5 pt-8 flex flex-col sm:flex-row items-center justify-between text-[11px] text-[#6d8276] gap-4">
                <p>© {{ date('Y') }} Proyecto GRACAMU IKAM • IESTP de Excelencia Perú Japón. Todos los derechos reservados.</p>
                <p class="text-[#8fa79b]">
                    Chachapoyas, Amazonas — Perú
                </p>
            </div>
        </div>
    </footer>

    <!-- BOTÓN FLOTANTE DE WHATSAPP -->
    <a id="floatingWhatsAppBtn" href="#contacto" class="fixed bottom-6 right-6 z-40 bg-[#25D366] hover:bg-[#20ba59] text-white p-3.5 rounded-full shadow-2xl flex items-center justify-center transition-all transform hover:scale-110 glow-gold" title="Contactar por WhatsApp o Web">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
    </a>

    <!-- Scripts de navegación e interactividad -->
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
