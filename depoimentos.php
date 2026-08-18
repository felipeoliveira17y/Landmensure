<?php include 'includes/header.php'; ?>

<section class="hero-section">
    <div class="container">
        <span class="badge-tag" data-aos="fade-up" data-aos-delay="100">Avaliações e Casos de Sucesso</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">O Que Dizem Nossos Clientes</h1>
        <p class="hero-desc" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="300">
            A satisfação dos nossos parceiros e a precisão técnica no campo são nossas maiores prioridades. Confira o depoimento de quem confia nos serviços da <strong>Landmensure</strong>.
        </p>
    </div>
</section>

<section class="testimonials-section" style="padding: 40px 0 80px 0;">
    <div class="container">
        <!-- Grid de Cards de Depoimentos -->
        <div class="cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); margin-bottom: 60px;">
            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-num">FAZENDA SANTA MARIA</div>
                <p style="font-style: italic; margin-bottom: 15px;">"A equipe da Landmensure realizou o georreferenciamento da nossa propriedade com extrema rapidez e precisão. Excelente atendimento e rigor técnico!"</p>
                <h4 style="font-weight: 600; color: var(--accent-copper);">- João Carlos, Produtor Rural</h4>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-num">AGRONEGÓCIO SILVA</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Serviço de altíssima qualidade na demarcação de divisas. A tecnologia RTK e os mapas gerados ajudaram muito no nosso planejamento."</p>
                <h4 style="font-weight: 600; color: var(--accent-copper);">- Mariana Oliveira, Engenheira Agrônoma</h4>
            </div>
        </div>

        <!-- Formulário para Envio de Novos Depoimentos -->
        <div class="testimonial-form-container" style="max-width: 600px; margin: 0 auto;" data-aos="fade-up" data-aos-delay="300">
            <h3 style="margin-bottom: 20px; font-family: var(--font-serif); text-align: center;">Deixe seu Depoimento</h3>
            
            <form action="send-testimonial.php" method="POST" class="testimonial-form">
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" name="nome" placeholder="Seu Nome ou Nome da Propriedade" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" name="cargo" placeholder="Seu Cargo ou Cidade (Ex: Produtor Rural - Brejo Santo/CE)" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <textarea name="mensagem" rows="4" placeholder="Escreva aqui sua experiência com nossos serviços..." required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>
                </div>
                <button type="submit" class="btn-primary" style="width: 100%; cursor: pointer;">Enviar Depoimento</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>