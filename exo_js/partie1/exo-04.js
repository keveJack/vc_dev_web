let texte="";
for(let i=0;i<=16;i++){
   // texte = texte+"_" +(2**i);
    texte = texte+"_" +Math.pow(2,i);
}
console.log(texte);