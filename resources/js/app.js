
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//show and hide of players div on click of more_info
//set constants
 const PLAYERS = document.getElementsByClassName('more-info-container');
 const PLAYERS_EVENT = document.getElementsByClassName('more-info-button');
 const SCROLL_ANCHOR = document.getElementsByClassName('first');

console.log(PLAYERS_EVENT);
//loop through PLAYERS_EVENT array
for (let i = 0; i < PLAYERS_EVENT.length; i++) {
    //add onclick listener
    PLAYERS_EVENT[i].onclick = function() {
        //add class to current player_event
        PLAYERS[i].classList.toggle('event-height');
        //change text
        if (this.textContent === 'More info...') {
            this.textContent ='Less info...';
            //delay on scroll due to transition
            setTimeout(function() {
                SCROLL_ANCHOR[i].scrollIntoView({behavior: 'smooth'});
            }, 650); 
        } else {
            this.textContent = "More info..."
        } 
    }
}
 


