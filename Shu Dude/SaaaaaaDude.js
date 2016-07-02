registerPlugin({
    name: 'eh suh dude',
    version: '1.1',
    description: 'Saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa Dude.',
    author: 'Derek Warne <derek@hexzo.com>',
    vars: {
    	Tracks: {
            title: 'Tracks to play on join',
            type: 'string'
    }
}
}, function(sinusbot, config) {
    sinusbot.on('clientJoin', function(ev) {


            var TrackArray = config.Tracks.split(" ");
            var TrackID = parseInt(Math.floor((Math.random() * TrackArray.length) + 1) -1);
            sinusbot.play(TrackArray[TrackID]);

            //sinusbot.chatServer("[Debug] "+ TrackID + " "+ TrackArray[TrackID]);
         
    });
 });
