/*
 Original script is from http://nelog.jp/
*/


// Twitterのシェア数を取得
function get_social_count_twitter(url, selcter) {
  jQuery.ajax({
    url:'http://urls.api.twitter.com/1/urls/count.json',
    dataType:'jsonp',
    data:{
      url:url
    },
    success:function(res){
      jQuery( selcter ).text( res.count || 0 );
    },
    error:function(){
      jQuery( selcter ).text('0');
    }
  });
}

//Facebookのシェア数を取得
function get_social_count_facebook(url, selcter) {
  jQuery.ajax({
    url:'https://graph.facebook.com/',
    dataType:'jsonp',
    data:{
      id:url
    },
    success:function(res){
      jQuery( selcter ).text( res.shares || 0 );
    },
    error:function(){
      jQuery( selcter ).text('0');
    }
  });
}
 
//Google＋のシェア数を取得
function get_social_count_googleplus(url, selcter) {
  jQuery.ajax({
    type: "get", dataType: "xml",
    url: "http://query.yahooapis.com/v1/public/yql",
    data: {
      q: "SELECT content FROM data.headers WHERE url='https://plusone.google.com/_/+1/fastbutton?hl=ja&url=" + url + "' and ua='#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36'",
      format: "xml",
      env: "http://datatables.org/alltables.env"
    },
    success: function (data) {
      var content = jQuery(data).find("content").text();
      var match = content.match(/window\.__SSR[\s*]=[\s*]{c:[\s*](\d+)/i);
      var count = (match != null) ? match[1] : 0;
 
      jQuery( selcter ).text(count);
    }
  });
}

//はてなブックマークではてブ数を取得
function get_social_count_hatebu(url, selcter) {
  jQuery.ajax({
    url:'http://api.b.st-hatena.com/entry.count?callback=?',
    dataType:'jsonp',
    data:{
      url:url
    },
    success:function(res){
      jQuery( selcter ).text( res || 0 );
    },
    error:function(){
      jQuery( selcter ).text('0');
    }
  });
}

// init
jQuery(document).ready(function($){
  var share_url_done = [];
  $('[data-share-url]').each(function(){
    var share_url = $(this).attr('data-share-url');
    if (!share_url || $.inArray(share_url, share_url_done) > -1) return;

    share_url_done.push(share_url);

    if ($('[data-share-url="'+share_url+'"] .twitter-count').size()) {
      get_social_count_twitter(share_url, $('[data-share-url="'+share_url+'"] .twitter-count'));
    }
    if ($('[data-share-url="'+share_url+'"] .facebook-count').size()) {
      get_social_count_facebook(share_url, $('[data-share-url="'+share_url+'"] .facebook-count'));
    }
    if ($('[data-share-url="'+share_url+'"] .googleplus-count').size()) {
      get_social_count_googleplus(share_url, $('[data-share-url="'+share_url+'"] .googleplus-count'));
    }
    if ($('[data-share-url="'+share_url+'"] .hatebu-count').size()) {
      get_social_count_hatebu(share_url, $('[data-share-url="'+share_url+'"] .hatebu-count'));
    }
  });
});
  