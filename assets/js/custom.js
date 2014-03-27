/**
 * Light Javascript "class" frameworking for you
 * to organize your code a little bit better.
 *
 * If you want more complex things, I'd suggest
 * importing something like Backbone.js as it
 * has much better abilities to handle a MVC
 * like framework including persistant stores (+1)
 *
 * @author  sjlu (Steven Lu)
 */
var Frontpage = function()
{
    /**
     * The exports variable is responsible for
     * storing and returning public functions
     * in the instantized class.
     */
    var exports = {};

    /**
     * Write your public functions like this.
     * Make sure you include it into the exports
     * variable.
     */
    function public_function()
    {
        /**
         * Note that we can still call
         * private functions within the scope
         * of the "class".
         */
        private_function();
    }
    exports.public_function = public_function;

    // Permet d'utiliser le carousel bootstrap
    function carousel() {
        $('.carousel').carousel();
    }
    exports.carousel = carousel;

    /**
     * Private functions are very similar, they
     * just are not included in the exports 
     * function.
     */
    function private_function()
    {

    }

    /**
     * You may wanna have a init() function
     * to do all your bindings for the class.
     */
    function init()
    {

    }
    exports.init = init;

    /**
     * Last but not least, we have to return
     * the exports object.
     */
    return exports;
}

/**
 * To initialize our Frontpage class, we need
 * to define it into a Javascript variable like
 * so.
 */
var frontpage = new Frontpage();

/**
 * We can then call the functions as like any
 * other object, just the ones included in the 
 * exports object that was returned from Frontpage()
 */
frontpage.public_function();

/**
 * Write all your event listeners in the 
 * document.ready function or else they
 * may not bind correctly. As a side note, I like
 * to just call a public function in a class
 * to handle all your bindings here.
 */
$(document).ready(function() {
    frontpage.init();
    frontpage.carousel();
});

// -------------------- JS blocs --------------------
$(document).on('click', '.bloc', function() {
// Si l'élément sélectionner n'est pas ouvert
//On récupère de la hauteur actuelle de l'élément
    var height = $(this).css('height');
    var span = $(this).getClass('span');
    var size = $(this).attr('data-size');
    if ($(this).attr('data-open') != 'true') {
        // On met tous les éléments de la ligne dans le même état
        if (size < 6) {
            $(this).parent().children().css('height', parseInt(height, 10));
            $(this).parent().children().addClass(span);
            $(this).parent().children().removeClass('span' + (size * 2));
            $(this).parent().children().removeAttr('data-open');
            // On change la taille de l'élément sélectionné
            $(this).removeClass(span);
            $(this).toggleClass('span' + (size * 2));
        }
        $(this).css('height', parseInt(height, 10) * 2 + 10);

        // On définie l'élément selectionné comme étant ouvert    
        $(this).attr('data-open', 'true');

        // On place l'élément sélectionner en début de ligne (question de mise en page)

        if (size < 6) {
            $(this).prependTo($(this).parent());
        }
    } else {
// Si l'élément sélectionner est déja ouvert
        //On récupère de la hauteur actuelle de l'élément
        var height = parseInt($(this).css('height')) - 10;

        // On redonne sa taille d'orgine a l'élément sélectionné
        $(this).removeClass('span' + (size * 2));
        $(this).addClass('span' + (size));
        $(this).css('height', parseInt(height, 10) / 2);

        // On définie l'élément selectionné comme n'étant plus ouvert
        $(this).removeAttr('data-open');
    }
});
// ------------------ JS des bloc end ------------------