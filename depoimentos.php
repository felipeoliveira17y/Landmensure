<?php include 'includes/header.php'; ?>

<?php
// Carrega os depoimentos salvos no arquivo JSON[cite: 4]
$arquivo = 'depoimentos.json';
$depoimentos = [];
if (file_exists($arquivo)) {
    $depoimentos = json_decode(file_get_contents($arquivo), true) ?? [];
}
?>

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
        <!-- Grid Dinâmico: Exibe apenas os depoimentos salvos/gerenciados pelo admin -->
        <div class="cards-grid" style="margin-bottom: 60px;">
            <?php if (empty($depoimentos)): ?>
                <p style="text-align: center; color: var(--text-muted); grid-column: 1 / -1;">Nenhum depoimento cadastrado no momento.</p>
            <?php else: ?>
                <?php foreach ($depoimentos as $dep): ?>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-num" style="text-transform: uppercase;"><?php echo htmlspecialchars($dep['nome']); ?></div>
                        <p style="font-style: italic; margin-bottom: 15px; font-size: 0.9rem;">"<?php echo htmlspecialchars($dep['mensagem']); ?>"</p>
                        <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--accent-copper); text-transform: uppercase; font-weight: bold;">
                            - <?php echo htmlspecialchars($dep['cargo']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Formulário para Envio de Novos Depoimentos -->
        <div class="testimonial-form-container" style="max-width: 600px; margin: 0 auto;" data-aos="fade-up" data-aos-delay="300">
            <h3 style="margin-bottom: 20px; font-family: var(--font-serif); text-align: center;">Deixe seu Depoimento</h3>
            
            <form action="send-testimonial.php" method="POST" class="testimonial-form">
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" name="nome" placeholder="Seu Nome ou Nome da Propriedade" required class="custom-input" style="width: 100%;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" name="cargo" placeholder="Seu Cargo ou Cidade (Ex: Produtor Rural - Brejo Santo/CE)" class="custom-input" style="width: 100%;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <textarea name="mensagem" rows="4" placeholder="Escreva aqui sua experiência com nossos serviços..." required class="custom-input custom-textarea" style="width: 100%; resize: vertical;"></textarea>
                </div>
                <button type="submit" class="btn-primary" style="width: 100%; cursor: pointer;">Enviar Depoimento</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>