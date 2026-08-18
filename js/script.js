/**
 * Landmensure - Animação de Perímetro Topográfico
 * Simula o traçado e georreferenciamento de um perímetro rural em tempo real.
 */

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('contourCanvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    
    // Ajusta resolução do Canvas conforme tamanho real
    function resizeCanvas() {
        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    }
    resizeCanvas();

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

    // Desenhar Curvas de Nível
    function drawContourLines() {
        const width = canvas.width;
        const height = canvas.height;

        ctx.strokeStyle = '#d2c8b4';
        ctx.lineWidth = 1;
        ctx.opacity = 0.5;

        for (let r = 30; r < Math.max(width, height); r += 35) {
            ctx.beginPath();
            ctx.arc(width / 2, height / 2, r, 0, Math.PI * 2);
            ctx.setLineDash([4, 4]);
            ctx.stroke();
        }
        ctx.setLineDash([]); // Reset
    }

    // Desenhar Animação do Traçado
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        drawContourLines();

        const w = canvas.width;
        const h = canvas.height;

        // Desenhar Vértices / Pontos GPS
        points.forEach((pt, index) => {
            const px = pt.x * w;
            const py = pt.y * h;

            // Marcador de Ponto RTK
            ctx.fillStyle = '#a65828';
            ctx.beginPath();
            ctx.arc(px, py, 4, 0, Math.PI * 2);
            ctx.fill();

            // Rótulo do Vértice
            ctx.font = '10px "Chivo Mono", monospace';
            ctx.fillStyle = '#2b2823';
            ctx.fillText(`P${index + 1}`, px + 8, py - 8);
        });

        // Traçar linha progressiva
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

        // Segmento Atual sendo traçado
        if (currentSegmentIndex < totalSegments) {
            const p1 = points[currentSegmentIndex];
            const p2 = points[(currentSegmentIndex + 1) % totalSegments];

            const curX = (p1.x + (p2.x - p1.x) * currentSegmentProgress) * w;
            const curY = (p1.y + (p2.y - p1.y) * currentSegmentProgress) * h;

            ctx.lineTo(curX, curY);

            // Atualizar leitura GPS dinamicamente na UI
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
    window.addEventListener('resize', resizeCanvas);
});