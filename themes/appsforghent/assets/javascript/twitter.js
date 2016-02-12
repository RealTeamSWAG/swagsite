$(function() { 
    
    twitterWall();
    
    setInterval(twitterWall, 90000);
    
    function twitterWall() {
        console.log("loadings");
        $('#twitter-wall').twittie({
            'apiPath':'themes/appsforghent/assets/javascript/Tweetie/api/tweet.php',
            'hashtag': 'openbelgium16',
            'count': 25,
            'dateFormat': '%d %b.',
            'temp': '<div>{{user_name}}<br>{{screen_name}}<br>{{tweet}}<br>{{favorites}}</div>',
            'template': '<div clas="row">' + 
                            '<div class="twitter-left">' +
                                '<div>' +
                                    '{{user_name}}<br>' +
                                    '<span class="light">{{screen_name}}</span><br>' + 
                                    '<span class="light">{{date}}</span><br>' + 
                                    '<span class="bottom-spacer"></span>' +
                                '</div>' +
                            '</div>' +
                            '<div class="twitter-center">' +
                                '<div>' +
                                    '{{tweet}}' +
                                    '<br>{{image}}' +
                                    '<span class="bottom-spacer"></span>' +
                                '</div>' +
                            '</div>' +
                            '<div class="twitter-right">' +
                                '<div>' +
                                    '{{retweets}} retweets<br>' +
                                    '{{favorites}} likes<br>' +
                                    '<span class="bottom-spacer"></span>' +
                                '</div>' +
                            '</div>' +
                        '</div>'
        });
    }
    
});