<footer class="site-footer" data-aos="fade-up" data-aos-duration="800">
    <div class="container footer-grid">
        <!-- Coluna 1 -->
        <div class="footer-col">
            <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start;">
                <span class="brand-title" style="display: block; font-size: 1.15rem; margin-bottom: 2px;">LANDMENSURE</span>
                <span class="footer-subtitle" style="display: block; font-size: 0.65rem; color: var(--accent-copper); margin-bottom: 2px; text-transform: uppercase; letter-spacing: 1px;">Serviços Topográficos e Agronômicos</span>
                <span class="footer-ltda" style="display: block; font-size: 0.7rem; font-weight: bold; margin-bottom: 6px;">LTDA</span>
            </div>
            <p class="footer-desc">Precisão milimétrica e georreferenciamento de alta fidelidade para o agronegócio e propriedades rurais.</p>
        </div>
        
        <!-- Coluna 2 -->
        <div class="footer-col">
            <h4>Serviços Especializados</h4>
            <ul>
                <li>Georreferenciamento (INCRA/SIGEF)</li>
                <li>Levantamento Topográfico Planialtimétrico</li>
                <li>Demarcação de Limites e Confrontações</li>
                <li>Mapeamento com Drones e RTK</li>
            </ul>
        </div>
        
        <!-- Coluna 3 -->
        <div class="footer-col">
            <h4>Contato de Campo</h4>
            <p><strong>Jonas Inácio:</strong> (88) 98119-7489</p>
            <p><strong>Cicero Araújo:</strong> (88) 98165-1794</p>
            <p><strong>E-mail:</strong> landmensure@gmail.com</p>
            <p><strong>Atendimento:</strong> Seg. a Sex - 07:00 às 12:00 & 13:00 às 16:00</p>
        </div>
    </div>
    
    <!-- Faixa Inferior -->
    <div class="footer-bottom">
        <div class="container footer-bottom-flex">
            <p>&copy; <?= date('Y') ?> Landmensure LTDA. Todos os direitos reservados.</p>
            <div class="tech-badge">DATUM: SIRGAS 2000 | ZONA 23S</div>
        </div>
    </div>
</footer>

<!-- Botão Flutuante de Acesso Restrito no Canto da Tela -->
<div style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
    <a href="admin.php" title="Painel da Equipe" style="display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; background-color: var(--bg-paper-dark, #f0ebe1); color: var(--accent-copper, #b87333); border: 1px solid var(--border-contour, #d4c5b9); border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.15); text-decoration: none; font-size: 1.1rem; transition: transform 0.2s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        🔒
    </a>
</div>

<!-- CSS da biblioteca AOS[cite: 4] -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- JS da biblioteca AOS e Menu Mobile[cite: 4] -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if(typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 50
            });
        }
        
        // Script de Controle do Menu Mobile (Hambúrguer)
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