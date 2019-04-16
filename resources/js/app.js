
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


// On click height 100 for showing player data

//show and hide of players div on click of more_info
//set constants
const PLAYERS = document.getElementsByClassName('more-info-container');
const PLAYERS_EVENT = document.getElementsByClassName('more-info-button');
const SCROLL_ANCHOR = document.getElementsByClassName('first');
//loop through PLAYERS_EVENT array
// for (let i = 0; i < PLAYERS_EVENT.length; i++) {
//     //add onclick listener
//     PLAYERS_EVENT[i].onclick = function() {
//         //add class to current player_event
//         PLAYERS[i].classList.toggle('event-height');
//         //change text
//         if (this.textContent === 'More info...') {
//             this.textContent ='Less info...';
//             //delay on scroll due to transition
//             setTimeout(function() {
//                 SCROLL_ANCHOR[i].scrollIntoView({behavior: 'smooth'});
//             }, 650); 
//         } else {
//             this.textContent = "More info..."
//         } 
//     }
// }

//Check if home-team and add gold
const HOME_TEAM = document.getElementsByClassName('results-team__header');
const HOME_TEAM_NAME = "Warwick & Worcester";

for (let i = 0; i < HOME_TEAM.length; i++) {
    console.log(HOME_TEAM[i]);
    if (HOME_TEAM[i].innerText === HOME_TEAM_NAME) {
        HOME_TEAM[i].classList.add('home-team');
    }
    
}

//Check between scores and highlight gold for winner
const FIRST_SCORE = document.getElementsByClassName('first-score');
const SECOND_SCORE = document.getElementsByClassName('second-score');
//set empty array
let firstScore = [];
let secondScore = [];
//loop through and compare, add class to largest
for (let i = 0; i < FIRST_SCORE.length; i++) {
    if(FIRST_SCORE[i].innerText > SECOND_SCORE[i].innerText) {
       FIRST_SCORE[i].classList.add('win-text');
    } else {
        SECOND_SCORE[i].classList.add('win-text');
    }
}

//loop through player score and get total
const PLAYER_SCORE_HOME = document.getElementsByClassName('player-score-home');
let homeScoreTotal = 0;
let number = 0;
for (let i = 0; i < PLAYER_SCORE_HOME.length; i++) {
    result = PLAYER_SCORE_HOME[i].innerText;
   console.log(result);
}
console.log(homeScoreTotal);


