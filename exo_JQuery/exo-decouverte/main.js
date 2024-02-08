jQuery(document).ready(function () {
    console.log('Jquery est bien chargé et la page prête!');
    $('#chargement').hide();
    $('#contenu').show();

    // Fonction pour le clic sur le bouton +
    jQuery('#zoom').click(function(){
        console.log('click sur zoom');
        $('img').each(function()
        {
            console.log('une image trouvee! a zoommer');
            $(this).css('height','100vh');
        });
        // Désactiver le bouton zoom et activer le bouton dezoom
        $('#zoom').prop('disabled', true);
        $('#dezoom').prop('disabled', false);
    });

    // Fonction pour le clic sur le bouton -
    jQuery('#dezoom').click(function(){
        console.log('click sur dezoom');
        $('img').each(function()
        {
            console.log('une image trouvee!a dezoommer');
            $(this).css('height','25vh');
        });
        // Désactiver le bouton dezoom et activer le bouton zoom
        $('#zoom').prop('disabled', false);
        $('#dezoom').prop('disabled', true);
    });

    // Écouter l'événement keyup pour détecter les touches du clavier
    $(document).keyup(function(touche){
        let appui = touche.which || touche.keyCode; 
        console.log(appui); // Afficher le code de la touche dans la console
        
        // Si la touche "+" est pressée (107)
        if (appui === 107) {
            // Simuler un clic sur le bouton zoom
            $('#zoom').trigger('click');
        }
        
        // Si la touche "-" est pressée (109)
        if (appui === 109) {
            // Simuler un clic sur le bouton dezoom
            $('#dezoom').trigger('click');
        }
    });
});
