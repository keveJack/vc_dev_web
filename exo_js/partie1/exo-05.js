let paragraphe = document.querySelector("p");
let texte="<ul>";
let i=0;

while (i<16){
    i++;
    texte += "<li>2"+"^"+(i)+"=" +Math.pow(2,i)+ "</li>"; 
}
texte+="</ul>";
paragraphe.innerHTML= texte;
console.log(texte);