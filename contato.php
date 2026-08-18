<?php 
$pageTitle = "Landmensure - Contato & Orçamento";
include 'includes/header.php'; 
?>

<main class="contact-section">
    <div class="container">
        
        <!-- Cabeçalho da Seção com Animação -->
        <div class="section-header animated-item">
            <span class="badge-tag">Atendimento Técnico</span>
            <h2>Entre em Contato</h2>
            <p class="hero-desc">Solicite seu orçamento para serviços topográficos e agronômicos ou tire suas dúvidas diretamente com nossa equipe especializada.</p>
        </div>

        <!-- Grid de Contato Expandido -->
        <div class="contact-grid">
            
            <!-- Coluna da Esquerda: Cartões de Informação -->
            <div class="contact-info-cards">
                
                <div class="feature-card contact-card animated-item delay-1">
                    <div class="card-num">WHATSAPP / TELEFONE</div>
                    <h3>Atendimento Direto</h3>
                    <p style="margin-bottom: 15px;">Fale diretamente com os nossos engenheiros:</p>
                    
                    <a href="https://wa.me/5588981197489?text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento%20para%20servi%C3%A7os%20topogr%C3%A1ficos/agron%C3%B4micos." 
                       target="_blank" 
                       class="btn-primary btn-block">
                        Chamar no WhatsApp
                    </a>
                </div>

                <div class="feature-card contact-card animated-item delay-2">
                    <div class="card-num">DADOS INSTITUCIONAIS</div>
                    <h3>Canais Oficiais</h3>
                    <p><strong>E-mail:</strong> landmensure@gmail.com</p>
                    <p><strong>Jonas Inácio:</strong> (88) 98119-7489</p>
                    <p><strong>Cícero Araújo:</strong> (88) 98165-1794</p>
                    <p style="margin-top: 10px;"><strong>Sede:</strong> Rua Maria Novais Miranda, 77, Bairro Sol Nascente, Porteiras - CE (CEP 63270-000).</p>
                </div>

            </div>

            <!-- Coluna da Direita: Formulário Preenchendo Todo o Espaço -->
            <div class="testimonial-form-container animated-item delay-3">
                <h3 class="form-title">Solicite um Orçamento</h3>
                
                <form id="whatsappForm" class="testimonial-form" onsubmit="enviarMensagemWhatsApp(event)">
                    
                    <div class="form-group">
                        <input type="text" id="nome" class="custom-input" placeholder="Seu Nome Completo" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <input type="email" id="email" class="custom-input" placeholder="Seu E-mail" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="telefone" class="custom-input" placeholder="Telefone / WhatsApp" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <select id="servico" class="custom-input" required>
                            <option value="" disabled selected>Selecione o Serviço Desejado</option>
                            <option value="Levantamento Topográfico Cadastral">Levantamento Topográfico Cadastral</option>
                            <option value="Georreferenciamento de Imóveis Rurais">Georreferenciamento de Imóveis Rurais</option>
                            <option value="Desmembramento / Remembramento">Desmembramento / Remembramento</option>
                            <option value="Projetos Agronômicos e de Crédito Rural">Projetos Agronômicos e de Crédito Rural</option>
                            <option value="Outros Serviços">Outros Serviços</option>
                        </select>
                    </div>

                    <div class="form-group form-group-textarea">
                        <textarea id="mensagem" class="custom-input custom-textarea" placeholder="Descreva a localização, tamanho da área (hectares) ou detalhes do serviço..." required></textarea>
                    </div>

                    <button type="submit" class="btn-primary btn-block btn-whatsapp-custom">
                        Enviar Solicitação via WhatsApp
                    </button>
                    
                </form>
            </div>

        </div>

    </div>
</main>

<script>
function enviarMensagemWhatsApp(event) {
    event.preventDefault();

    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const telefone = document.getElementById('telefone').value;
    const servico = document.getElementById('servico').value;
    const mensagem = document.getElementById('mensagem').value;

    const numeroTelefone = "5588981197489";

    const textoMensagem = `*NOVA SOLICITAÇÃO DE ORÇAMENTO - WEBSITE*%0A%0A` +
        `*Nome:* ${encodeURIComponent(nome)}%0A` +
        `*E-mail:* ${encodeURIComponent(email)}%0A` +
        `*Telefone:* ${encodeURIComponent(telefone)}%0A` +
        `*Serviço:* ${encodeURIComponent(servico)}%0A` +
        `*Detalhes:* ${encodeURIComponent(mensagem)}`;

    window.open(`https://wa.me/${numeroTelefone}?text=${textoMensagem}`, '_blank');
}
</script>

<?php include 'includes/footer.php'; ?>