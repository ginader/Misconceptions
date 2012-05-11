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

var defaultLocale = 'en';
var pageDB = {};
var cardCount;

function initPageDB(){
	pageDB = {
		nav : [],
		languages : {},
		cards : []
	};
}

function getStrings(){
	// get cards
	new YQL.exec("select * from csv where url='https://docs.google.com/spreadsheet/pub?key=0Ar3qBZOJQ4WBdDk3ajRQTzdKdGNTZnptR3lNYWZkMlE&single=true&gid=3&output=csv' and columns='languagecode,language,active,question,answer,yes,no,next,wrong,correct,more'", function(response) {
		if (response.error) {
			console.log("getStrings Error: " + response.error.description);
		} else {
	        console.log("getStrings success: ---------------------------");
	        //console.log(response);
	        //console.log(response.query.results);
	        var languages = response.query.results.row;
	        for(var i=1;i<languages.length;i++){
	        	var lang = languages[i];
	        	if(lang.active.toUpperCase() =='TRUE'){ // is there any way to get this as BOOL from gdocs?
	        		pageDB.languages[lang.languagecode] = lang;
	        		pageDB.nav.push(lang);
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
			console.log("getCards Error: " + response.error.description);
		} else {
	        console.log("getCards success: ---------------------------");
	        //console.log(response);
	        //console.log(response.query.results);
	        var cards = response.query.results.row;
	        cardCount = cards.length-1;
	        for(var i=1;i<cards.length;i++){
	        	var card = cards[i];
	        	console.log(card);
	        	pageDB.cards[card.id] = {
	        		id : card.id,
	        		truth : (card.truth.toLowerCase() == 'true'),
	        		link : card.link
	        	}
	        	// only store the strings for the activated languages
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

// https://github.com/mashpie/i18n-node/blob/master/i18n.js
function guessLanguage(request) {
    if (typeof request === 'object') {
        var language_header = request.headers['accept-language'],
        languages = [],
        regions = [];
        request.languages = [defaultLocale];
        request.regions = [defaultLocale];
        request.language = defaultLocale;
        request.region = defaultLocale;

        if (language_header) {
            language_header.split(',').forEach(function(l) {
                header = l.split(';', 1)[0];
                lr = header.split('-', 2);
                if (lr[0]) {
                    languages.push(lr[0].toLowerCase());
                }
                if (lr[1]) {
                    regions.push(lr[1].toLowerCase());
                }
            });

            if (languages.length > 0) {
                request.languages = languages;
                request.language = languages[0];
            }

            if (regions.length > 0) {
                request.regions = regions;
                request.region = regions[0];
            }
        }
    }
}

function getRandomCardId(){
	return Math.floor(Math.random() * cardCount + 1);
}



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

hbs.registerHelper('languageNav', function(items, fn) {
  var out = "<ul>";
  for(var i=0, l=items.length; i<l; i++) {
    out = out + "<li>" + fn(items[i]) + "</li>";
  }
  return out + "</ul>";
});



app.get('/refresh', function(req, res){
  	initPageDB();
  	getStrings();
  	res.send("refreshing - isn't it? ;-)", 200);
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

app.get('/:language/:id', function(req, res, next){
	var language = req.params.language; // check for validity!
	var id = parseInt(req.params.id,10) // check for validity!

	if(isNaN(id)){
		next();
	}

	var nextId = id+1;
	if(nextId > cardCount){
		nextId = 1;
	}

	var str = pageDB.languages[language];
	var card = pageDB.cards[id];

	if(!str || !card){
		next();
	}

	card_str = card[language];

	str.id = card.id;
	str.truth = card.truth;
	str.link = card.link;
	str.question_text = card_str.question;
	str.answer_text = card_str.answer;
	str.nav = pageDB.nav;
	str.nextId = nextId;

	console.log('str: ');
	console.log(str);

	res.render('card', str);
});

app.get('/:language', function(req, res, next){
	var language = req.params.language; // check for validity!
	var id = getRandomCardId();
	//res.send('redirect to myths #'+getRandomCardId()+' in language: '+language, 200);
	res.redirect('/'+language+'/'+id);
});

app.get('/', function(req, res){
	guessLanguage(req)
	var language = req.language
	res.redirect('/'+language);
});

app.get('*', function(req, res){
  res.send('ummm what?', 404);
});


app.listen(3000, function(){
  console.log("Express server listening on port %d in %s mode", app.address().port, app.settings.env);
  initPageDB();
  getStrings();
});
