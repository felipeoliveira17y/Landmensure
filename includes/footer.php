</main>
    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-col" data-aos="fade-up" data-aos-delay="100">
                <div class="brand-text">
                    <span class="brand-title">LANDMENSURE</span>
                    <span class="brand-subtitle">Serviços Topográficos e Agronômicos LTDA</span>
                </div>
                <p class="footer-desc">Precisão milimétrica e georreferenciamento de alta fidelidade para o agronegócio e propriedades rurais.</p>
            </div>
            <div class="footer-col" data-aos="fade-up" data-aos-delay="200">
                <h4>Serviços Especializados</h4>
                <ul>
                    <li>Georreferenciamento (INCRA/SIGEF)</li>
                    <li>Levantamento Topográfico Planialtimétrico</li>
                    <li>Demarcação de Limites e Confrontações</li>
                    <li>Mapeamento com Drones e RTK</li>
                </ul>
            </div>
            <div class="footer-col" data-aos="fade-up" data-aos-delay="300">
                <h4>Contato de Campo</h4>
                <p><strong>Jonas Inácio:</strong> (88) 98119-7489</p>
                <p><strong>Cicero Araújo:</strong> (88) 98165-1794</p>
                <p><strong>E-mail:</strong> landmensure@gmail.com</p>
                <p><strong>Atendimento:</strong> Seg. a Sex - 07:00 às 12:00 & 13:00 às 16:00</p>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container footer-bottom-flex">
                <p>&copy; <?= date('Y') ?> Landmensure LTDA. Todos os direitos reservados.</p>
                <div class="tech-badge">DATUM: SIRGAS 2000 | ZONA 23S</div>
            </div>
        </div>
    </footer>

    <!-- JS da biblioteca AOS (Animações de Rolagem) -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 80
        });

        // Script de Controle do Menu Mobile (Hambúrguer)
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const mainNav = document.querySelector('.main-nav');

            if (menuToggle && mainNav) {
                menuToggle.addEventListener('click', function() {
                    mainNav.classList.toggle('active');
                    menuToggle.classList.toggle('open');
                });
            }
        });
    </script>
    <script src="js/script.js"></script>
</body>
</html>