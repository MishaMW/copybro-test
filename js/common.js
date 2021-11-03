add_event(document, 'DOMContentLoaded', function() {common.init();});

// PAGE

var common = {

    init: function() {
        let flashes = document.querySelectorAll(".flash");
        if(!flashes.length) return;

        flashes.forEach(function(flash){
            let interval = setInterval(function() {
                if (+flash.style.opacity >= 1)
                    clearInterval(interval);

                flash.style.opacity = +flash.style.opacity + 1 / 300;
            }, 300 / 1000);
        });

    }

}
