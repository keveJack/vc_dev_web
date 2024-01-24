let texte="decompte:";
for(let i=10;i>=1;i--)
{
    texte = texte + i+'-';  
}
console.log(texte);
texte="decompte:";
//c'est deux manière pour ecrire de 10 à 0
for(let i=0;i<10;i++)
{
    texte = texte + (10-i)+'-';  
}
console.log(texte);