<?php include 'includes/header.php'; ?>

<section class="hero-section">
    <div class="container">
        <span class="badge-tag" data-aos="fade-up" data-aos-delay="100">Atendimento Técnico</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">Entre em Contato</h1>
        <p class="hero-desc" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="300">
            Solicite um orçamento para georreferenciamento, topografia ou consultoria agronômica. Nossa equipe técnica responderá o mais breve possível.
        </p>
    </div>
</section>

<section class="contact-section" style="padding: 40px 0 80px 0;">
    <div class="container">
        <div class="cards-grid" style="grid-template-columns: 1fr 1.5fr; gap: 40px; align-items: start;">
            
            <!-- Informações Diretas de Contato -->
            <div class="contact-info" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card" style="margin-bottom: 20px;">
                    <div class="card-num">WHATSAPP / TELEFONE</div>
                    <h3>Atendimento Direto</h3>
                    <p style="margin-bottom: 10px;">Fale diretamente com os nossos engenheiros:</p>
                    <a href="https://wa.me/5588981197489" target="_blank" class="btn-primary" style="display: inline-block; text-align: center; text-decoration: none; margin-top: 10px;">
                        Chamar no WhatsApp
                    </a>
                </div>

                <div class="feature-card">
                    <div class="card-num">DADOS INSTITUCIONAIS</div>
                    <h3>Canais Oficiais</h3>
                    <p><strong>E-mail:</strong> landmensure@gmail.com</p>
                    <p><strong>Jonas Inácio:</strong> (88) 98119-7489</p>
                    <p><strong>Cicero Araújo:</strong> (88) 98165-1794</p>
                    <p><strong>Sede:</strong> Rua Maria Novais Miranda, 77, Bairro Sol Nascente, Porteiras - CE (CEP 63270-000).</p>
                </div>
            </div>

            <!-- Formulário de Solicitacao de Orçamento -->
            <div class="testimonial-form-container" data-aos="fade-up" data-aos-delay="200">
                <h3 style="margin-bottom: 20px; font-family: var(--font-serif);">Solicite um Orçamento</h3>
                
                <form action="processa-orcamento.php" method="POST" class="testimonial-form">
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" name="nome" placeholder="Seu Nome Completo" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 15px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                        <input type="email" name="email" placeholder="Seu E-mail" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                        <input type="tel" name="telefone" placeholder="Telefone / WhatsApp" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                    </div>

                    <div class="form-group" style="margin-bottom: 15px;">
                        <select name="servico" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; background: #fff;" required>
                            <option value="" disabled selected>Selecione o Serviço Desejado</option>
                            <option value="Georreferenciamento INCRA">Georreferenciamento de Imóvel Rural (INCRA)</option>
                            <option value="Levantamento Planialtimétrico">Levantamento Planialtimétrico</option>
                            <option value="Demarcação de Divisas">Demarcação e Retificação de Divisas</option>
                            <option value="Outros">Outros Serviços / Consultoria</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 15px;">
                        <textarea name="mensagem" rows="5" placeholder="Descreva a localização, tamanho da área (hectares) ou detalhes do serviço..." required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn-primary" style="width: 100%; cursor: pointer;">Enviar Mensagem</button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>