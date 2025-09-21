const canvas = document.getElementById('cometas');
const ctx = canvas.getContext('2d');

canvas.width = canvas.parentElement.offsetWidth;
canvas.height = canvas.parentElement.offsetHeight;

window.addEventListener('resize', () => {
  canvas.width = canvas.parentElement.offsetWidth;
  canvas.height = canvas.parentElement.offsetHeight;
});

class Cometa {
  constructor() {
    this.x = Math.random() * canvas.width;
    this.y = 50 + Math.random() * 100;
    this.size = 4 + Math.random() * 3;
    this.trailLength = 20 + Math.random() * 10;
    this.history = [];
    this.speedX = 2 + Math.random() * 1; // movimiento horizontal
  }

  draw() {
    this.history.push({x: this.x, y: this.y});
    if (this.history.length > this.trailLength) this.history.shift();

    for (let i = 0; i < this.history.length; i++) {
      let p = this.history[i];
      ctx.beginPath();
      ctx.arc(p.x, p.y, this.size * (i / this.trailLength), 0, Math.PI * 2);
      ctx.fillStyle = `rgba(255,255,255,${i / this.trailLength})`;
      ctx.fill();
      ctx.closePath();
    }

    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fillStyle = "white";
    ctx.fill();
    ctx.closePath();
  }

  update() {
    this.x += this.speedX;
    if (this.x > canvas.width + this.size) {
      this.x = -this.size;
      this.history = [];
    }
  }
}

const cometas = [];
for (let i = 0; i < 4; i++) cometas.push(new Cometa());

function animate() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  cometas.forEach(c => {
    c.update();
    c.draw();
  });
  requestAnimationFrame(animate);
}

animate();
