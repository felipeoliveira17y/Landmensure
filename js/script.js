/* ==========================================================================
   LANDMENSURE - SCRIPT PRINCIPAL & CANVAS TOPOGRÁFICO UNIFICADO
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

    /* --------------------------------------------------------------------------
       1. CANVAS UNIFICADO: PERÍMETRO RTK + CURVAS DE NÍVEL REATIVAS
       -------------------------------------------------------------------------- */
    const canvas = document.getElementById('contourCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        
        function resizeCanvas() {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Vértices do perímetro da propriedade (coordenadas relativas %)
        const points = [
            { x: 0.2, y: 0.25 },
            { x: 0.55, y: 0.15 },
            { x: 0.85, y: 0.35 },
            { x: 0.75, y: 0.80 },
            { x: 0.40, y: 0.85 },
            { x: 0.15, y: 0.60 }
        ];

        let progress = 0;
        const speed = 0.005;

        // Controle de interação do mouse no Canvas
        let mouse = { x: canvas.width / 2, y: canvas.height / 2, active: false };

        canvas.addEventListener('mousemove', (e) => {
            const rect = canvas.getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
            mouse.active = true;
        });

        canvas.addEventListener('mouseleave', () => {
            mouse.active = false;
        });

        // Função de Desenho de Fundo (Círculos concêntricos pontilhados)
        function drawContourBackground(width, height) {
            ctx.strokeStyle = '#d2c8b4';
            ctx.lineWidth = 1;

            for (let r = 30; r < Math.max(width, height); r += 35) {
                ctx.beginPath();
                ctx.arc(width / 2, height / 2, r, 0, Math.PI * 2);
                ctx.setLineDash([4, 4]);
                ctx.stroke();
            }
            ctx.setLineDash([]); // Reset do tracejado
        }

        // Loop principal de animação
        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            const w = canvas.width;
            const h = canvas.height;

            // Desenhar fundo topográfico
            drawContourBackground(w, h);

            // Efeito de ondulação leve caso o mouse esteja sobre o mapa
            if (mouse.active) {
                ctx.strokeStyle = 'rgba(57, 87, 65, 0.25)';
                ctx.lineWidth = 1;
                ctx.beginPath();
                ctx.arc(mouse.x, mouse.y, 25, 0, Math.PI * 2);
                ctx.stroke();
            }

            // Desenhar Vértices / Pontos GPS da Propriedade[cite: 7]
            points.forEach((pt, index) => {
                const px = pt.x * w;
                const py = pt.y * h;

                // Marcador de Ponto RTK[cite: 7]
                ctx.fillStyle = '#a65828';
                ctx.beginPath();
                ctx.arc(px, py, 4, 0, Math.PI * 2);
                ctx.fill();

                // Rótulo do Vértice[cite: 7]
                ctx.font = '10px "Chivo Mono", monospace';
                ctx.fillStyle = '#2b2823';
                ctx.fillText(`P${index + 1}`, px + 8, py - 8);
            });

            // Traçar linha progressiva do perímetro[cite: 7]
            ctx.strokeStyle = '#395741';
            ctx.lineWidth = 2.5;
            ctx.beginPath();

            const totalSegments = points.length;
            const currentSegmentProgress = (progress * totalSegments) % 1;
            const currentSegmentIndex = Math.floor(progress * totalSegments);

            ctx.moveTo(points[0].x * w, points[0].y * h);

            for (let i = 0; i < currentSegmentIndex; i++) {
                const nextIdx = (i + 1) % totalSegments;
                ctx.lineTo(points[nextIdx].x * w, points[nextIdx].y * h);
            }

            // Segmento Atual sendo traçado[cite: 7]
            if (currentSegmentIndex < totalSegments) {
                const p1 = points[currentSegmentIndex];
                const p2 = points[(currentSegmentIndex + 1) % totalSegments];

                const curX = (p1.x + (p2.x - p1.x) * currentSegmentProgress) * w;
                const curY = (p1.y + (p2.y - p1.y) * currentSegmentProgress) * h;

                ctx.lineTo(curX, curY);

                // Atualizar leitura GPS dinamicamente na UI[cite: 7]
                const statusElem = document.getElementById('geoStatus');
                if (statusElem) {
                    statusElem.innerText = `RASTREANDO VÉRTICE P${currentSegmentIndex + 1} -> P${((currentSegmentIndex + 1) % totalSegments) + 1}`;
                }
            }

            ctx.stroke();

            progress += speed;
            if (progress > 1) progress = 0;

            requestAnimationFrame(animate);
        }

        animate();
    }

    /* --------------------------------------------------------------------------
       2. COORDENADAS GPS DINÂMICAS NO HEADER
       -------------------------------------------------------------------------- */
    const coordValueEl = document.querySelector('.coord-value');
    if (coordValueEl) {
        setInterval(() => {
            coordValueEl.textContent = `7°10'50.${Math.floor(Math.random()*9)}"S 38°46'48.${Math.floor(Math.random()*9)}"W`;
        }, 3000);
    }

    /* --------------------------------------------------------------------------
       3. VALIDAÇÃO E FEEDBACK VISUAL DOS INPUTS
       -------------------------------------------------------------------------- */
    const inputs = document.querySelectorAll('.custom-input, input[type="text"], input[type="email"], input[type="tel"], textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.style.borderColor = 'var(--accent-copper)';
        });
        input.addEventListener('blur', () => {
            if (!input.value) {
                input.style.borderColor = 'var(--border-contour)';
            }
        });
    });

});