
const citations = [
    "La vie est faite de moments simples, il faut savoir les savourer. - Anonyme",
    "La vérité est rarement pure et jamais simple. - Oscar Wilde",
    "La vie est un voyage, pas une destination. - Ralph Waldo Emerson",
    "La seule façon de faire du bon travail est d'aimer ce que vous faites. - Steve Jobs",
    "La vie est un défi à relever, un bonheur à mériter, une aventure à tenter. - Mère Teresa",
    "La vie est une fleur dont l'amour est le miel. - Victor Hugo",
    "La vie est une aventure audacieuse ou rien du tout. - Helen Keller",
    "La seule chose que nous ayons à craindre, c'est la crainte elle-même. - Franklin D. Roosevelt",
    "La différence entre le possible et l'impossible réside dans la détermination. - Tommy Lasorda",
    "La seule différence entre un bon jour et un mauvais jour, c'est votre attitude. - Dennis S. Brown",
    "La vie c'est comme une boîte de chocolats, on ne sait jamais sur quoi on va tomber. - Forrest Gump",
    "La vie est comme une bicyclette, il faut avancer pour ne pas perdre l'équilibre. - Albert Einstein",
    "La sagesse, c'est d'avoir des rêves suffisamment grands pour ne pas les perdre de vue lorsqu'on les poursuit. - Oscar Wilde",
    "La perfection est atteinte non pas lorsqu'il n'y a plus rien à ajouter, mais lorsqu'il n'y a plus rien à retirer. - Antoine de Saint-Exupéry",
    "La volonté de gagner, le désir de réussir, l'envie de se surpasser sont les clés du succès. - Confucius",
    "La seule limite à notre réalisation de demain sera nos doutes d'aujourd'hui. - Franklin D. Roosevelt",
    "La vraie réussite, c'est d'essayer et de ne pas regretter. - Mike Ditka",
    "La vie est ce qui se passe pendant que vous êtes occupé à faire d'autres projets. - John Lennon",
    "La simplicité est la sophistication suprême. - Léonard de Vinci",
    "La seule manière de faire du bon travail est d'aimer ce que vous faites. - Steve Jobs",
    "La véritable générosité envers l'avenir consiste à tout donner au présent. - Albert Camus",
    "La vie n'est pas d'attendre que les orages passent, c'est d'apprendre à danser sous la pluie. - Sénèque",
    "La seule chose à craindre, c'est la peur elle-même. - Franklin D. Roosevelt",
    "La vie est un mystère qu'il faut vivre, et non un problème à résoudre. - Gandhi",
    "La meilleure façon de prédire l'avenir, c'est de le créer. - Peter Drucker",
    "L'émargement c'est important. - Via Formation"
];
document.getElementById("genererBtn").addEventListener("click", function () {
    const randomIndex = Math.floor(Math.random() * citations.length);
    const citation = citations[randomIndex];
    document.getElementById("citation").textContent = citation;
});
document.getElementById("changerCouleurBtn").addEventListener("click", function () {
    const randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
    document.getElementById("citation").style.backgroundColor = randomColor;
});
