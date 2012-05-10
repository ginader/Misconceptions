// builtin
var fs = require('fs');
var assert = require('assert');

// 3rd party
var express = require('express');
var request = require('request');
var YQL = require('yql');

// local
var hbs = require('hbs');

var app = module.exports = express.createServer();

/* should end up looking like this */
// var pageDB = {
// 	languages : {
// 		en : {
// 			languagecode: 'en',
// 		    language: 'English',
// 		    active: 'TRUE',
// 		    question: 'Truth or Myth?',
// 		    answer: 'Answer',
// 		    yes: 'Yes! You speak the truth.',
// 		    no: 'No. This is a Myth.',
// 		    next: 'Next Trivia Question'
// 		},
// 		de : {
// 			languagecode: 'de',
// 		    language: 'Deutsch',
// 		    active: 'TRUE',
// 		    question: 'Wahrheit oder Mythos?',
// 		    answer: 'Antwort',
// 		    yes: 'Ja. Du sprichst die Wahrheit',
// 		    no: 'Nein. Das ist ein Mythos',
// 		    next: 'Nächste Frage'
// 		}
// 	},
// 	cards : [{
// 		id:1,
// 		correct:true,
// 		question_en:'en',
// 		question_de:'de',
// 		link:'http'
// 	}]
// };

var defaultLanguage = 'en';

var pageDB;

function initPageDB(){
	pageDB = {
		languages : {},
		cards : []
	};
}

function getStrings(){
	// get cards
	new YQL.exec("select * from csv where url='https://docs.google.com/spreadsheet/pub?key=0Ar3qBZOJQ4WBdDk3ajRQTzdKdGNTZnptR3lNYWZkMlE&single=true&gid=3&output=csv' and columns='languagecode,language,active,question,answer,yes,no,next,wrong,correct'", function(response) {
		if (response.error) {
			console.log("Error: " + response.error.description);
		} else {
	        console.log("success: ---------------------------");
	        //console.log(response);
	        //console.log(response.query.results);
	        var languages = response.query.results.row;
	        for(var i=1;i<languages.length;i++){
	        	var lang = languages[i];
	        	if(lang.active.toUpperCase() =='TRUE'){ // is there any way to get this as BOOL from gdocs?
	        		pageDB.languages[lang.languagecode] = lang;
	        	}
	        }
	        //console.log('languages added: ---------------------------');
	        //console.log(pageDB);
	        getCards();
		}
	});
};
function getCards(){
	// get cards
	new YQL.exec("select * from csv where url='https://docs.google.com/spreadsheet/pub?key=0Ar3qBZOJQ4WBdDk3ajRQTzdKdGNTZnptR3lNYWZkMlE&single=true&gid=2&output=csv' and columns='id,truth,question_en,answer_en,link,question_de,answer_de,question_es,answer_es,question_zh,answer_zh'", function(response) {
		if (response.error) {
			console.log("Error: " + response.error.description);
		} else {
	        console.log("success: ---------------------------");
	        //console.log(response);
	        //console.log(response.query.results);
	        var cards = response.query.results.row;
	        for(var i=1;i<cards.length;i++){
	        	var card = cards[i];
	        	console.log(card);
	        	pageDB.cards[card.id] = {
	        		id : card.id,
	        		truth : (card.truth.toLowerCase() == 'true'),
	        		link : card.link
	        	}
	        	// only store the string for the active languages
	        	for (var lang in pageDB.languages){
	        		pageDB.cards[card.id][lang] = {
	        			question : card['question_'+lang],
	        			answer : card['answer_'+lang]
	        		}
	        	}
	        }
	        console.log(pageDB);
		}
	});
};

// manually set render engine, under normal circumstances this
// would not be needed as hbs would be installed through npm
//app.engine('hbs', hbs.__express);

// set the view engine to use handlebars
app.set('view engine', 'hbs');
app.set('views', __dirname + '/views');

app.use(express.static(__dirname + '/public'));

hbs.registerHelper('link_to', function(context) {
  return "<a href='" + context.url + "'>" + context.body + "</a>";
});

hbs.registerHelper('link_to2', function(title, context) {
  return "<a href='/posts" + context.url + "'>" + title + "</a>"
});

hbs.registerHelper('list', function(items, fn) {
  var out = "<ul>";
  for(var i=0, l=items.length; i<l; i++) {
    out = out + "<li>" + fn(items[i]) + "</li>";
  }
  return out + "</ul>";
});

hbs.registerPartial('link2', '<a href="/people/{{id}}">{{name}}</a>');

app.get('/:language/:id', function(req, res){
	var language = req.params.language; // check for validity!
	var id = req.params.id // check for validity!

	var str = pageDB.languages[language];
	var card = pageDB.cards[id];
	card_str = card[language];


	str.id = card.id;
	str.truth = card.truth;
	str.link = card.link;
	str.question = card_str.question;
	str.answer = card_str.answer;

	console.log('str: ');
	console.log(str);
	/*
{ languagecode: 'en',
  language: 'English',
  active: 'TRUE',
  question: 'The Earth is the center of the solar system. The planets, Sun and Moon revolve around the Earth.',
  answer: 'The Sun is at the center of the solar system, and the planets, asteroids, moons, and comets orbit the Sun. The Earth is the third planet from the Sun.',
  yes: 'Yes! You speak the truth.',
  no: 'No. This is a Myth.',
  next: 'Next Trivia Question',
  id: '13',
  correct: false,
  link: 'http://amazing-space.stsci.edu/resources/myths/solar_system.php.p=Capture+the+cosmos@,capture,%3ESolar+system@,capture,solarsyst,' }
	*/
	res.render('card', str);
});

app.get('/refresh', function(req, res){
  	initPageDB();
  	getStrings();
	res.render('card', {
		question_title: "refreshing - isn't it? ;-)"
	});
});

app.get('/about', function(req, res){
	res.render('about', {
		question_title: "about"
	});
});

app.get('/demo', function(req, res){
  res.render('demo', {
    title: 'Express Handlebars Test',
    // basic test
    name: 'Alan',
    hometown: "Somewhere, TX",
    kids: [{"name": "Jimmy", "age": "12"}, {"name": "Sally", "age": "4"}],
    // path test
    person: { "name": "Alan" }, company: {"name": "Rad, Inc." },
    // escapee test
    escapee: '<jail>escaped</jail>',
    // helper test
    posts: [{url: "/hello-world", body: "Hello World!"}],
    // helper with string
    posts2: [{url: "/hello-world", body: "Hello World!"}],
    // for block helper test
    people: [
      {firstName: "Yehuda", lastName: "Katz"},
      {firstName: "Carl", lastName: "Lerche"},
      {firstName: "Alan", lastName: "Johnson"}
    ],
    people2: [
      { name: { firstName: "Yehuda", lastName: "Katz" } },
      { name: { firstName: "Carl", lastName: "Lerche" } },
      { name: { firstName: "Alan", lastName: "Johnson" } }
    ],
    // for partial test
    people3: [
      { "name": "Alan", "id": 1 },
      { "name": "Yehuda", "id": 2 }
    ]
  });
});




app.listen(3000, function(){
  console.log("Express server listening on port %d in %s mode", app.address().port, app.settings.env);
  initPageDB();
  getStrings();
});
