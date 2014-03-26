$.fn.extend({
    getClass: function () {
        var c = $(this).attr('class');
        c = c.split(' ');
        return c;
    }
});


$.fn.extend({
    getClass: function (class_search) {
        var c = $(this).attr('class');
        c = c.split(' ');
        var res = '';
        $.each(c, function(n,i){
            var param = "^"+class_search;
            if(i.match(param)){
                res += ' '+i;
            }
        });
        return res;
    }
});