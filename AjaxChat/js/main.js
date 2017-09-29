var lastTimeID = 0;
var audio = new Audio('./audio/ti-na.mp3');
var noaudio = 1;

jQuery(document).ready(function() {
  $('#btnSend').click( function() {
    sendChatText();
    $('#chatInput').val("");
  });
  startChat();
});

function startChat(){
  setInterval( function() { getChatText(); }, 2000);
}

function getChatText() {
  $.ajax({
    type: "GET",
    url: "./refresh.php?lastTimeID=" + lastTimeID
  }).done( function( data )
  {
    var jsonData = JSON.parse(data);
    var jsonLength = jsonData.results.length;
    var html = "";
    if (jsonLength > 0 && noaudio != 1) {
      audio.play();
    }
    for (var i = 0; i < jsonLength; i++) {
      var result = jsonData.results[i];
      html += '<div style="color:#' + result.color + '">(' + result.chattime + ') <b>' + result.usrname +'</b>: ' + result.chattext + '</div>';
      lastTimeID = result.id;
    }
    $('#view_ajax').append(html);
    noaudio --;
  });
}

function sendChatText(){
  var chatInput = $('#chatInput').val();
  if(chatInput != ""){
    $.ajax({
      type: "GET",
      url: "./submit.php?chattext=" + encodeURIComponent( chatInput )
    });
  }
}