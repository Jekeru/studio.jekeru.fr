container = document.getElementById("main");

const text = new Blotter.Text("Jekeru?", {
    family: "serif",
    size: 59,
    fill: "#fff"
});

let material = new Blotter.LiquidDistortMaterial();

material.uniforms.uSpeed.value = 0.5;
material.uniforms.uVolatility.value = 0.08;
material.uniforms.uSeed.value = 0.001;

let blotter = new Blotter(material, {
    texts: text
});

let scope = blotter.forText(text);

scope.appendTo(container);
