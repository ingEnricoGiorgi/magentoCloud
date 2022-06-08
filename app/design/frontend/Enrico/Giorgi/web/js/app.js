requirejs(['jquery'], function ($) { 
    
    let myVar = setInterval(myTimer ,1000);
    function myTimer() {
      const d = new Date();
      document.getElementById("demo").innerHTML = d.toLocaleTimeString();
    }
//GLIDE
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"/>
    new Glide('.glide').mount()
});
