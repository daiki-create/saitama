function contents_maker() {
	
	var news = document.getElementById( 'news' );
	var js   = document.getElementById( 'contents-maker-js' );
	var href = js.getAttribute( 'src' ).replace( /js\/contents-maker\.js/gi, 'php/index.php' );
	
	var xhr = new XMLHttpRequest();
	xhr.open( 'GET', href, true );
	
	xhr.onreadystatechange = function() {
		if ( xhr.readyState === 4 && xhr.status === 200 ) {
			news.innerHTML = xhr.responseText;

            var ww = $('body').width();
            var lineNum = 2;

            // PC
            if (ww >= 640) {
                var cnt = $(".news_contents_bottom").length;
                console.log(cnt);

                var news_contents_bottom_array = [];
                $(".news_contents_bottom").each(function(i, elem) {
                    news_contents_bottom_array.push(elem);
                });
                var news_contents_detail_array = [];
                $(".news_contents_detail").each(function(i, elem) {
                    news_contents_detail_array.push(elem);
                });
                for(var i=0; i<cnt; i++)
                {
                    var textHeight = $(news_contents_bottom_array[i]).height();
                    var lineHeight = parseFloat($(news_contents_bottom_array[i]).css('line-height'));

                    if(textHeight > lineHeight*lineNum)
                    {
                        $(news_contents_bottom_array[i]).css({
                            'cssText': 'display:-webkit-box !important; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;'
                        });
                        if($(news_contents_bottom_array[i]).data('type') == 'news')
                        {
                            $(news_contents_detail_array[i]).show();
                        }
                    }
                    if($(news_contents_bottom_array[i]).data('type') == 'blog')
                    {
                        $(news_contents_detail_array[i]).show();
                    }
                }
            }

            // SP
            if (ww < 640) {
                var cnt_sp = $(".news_contents_bottom_sp").length;
                var news_contents_bottom_sp_array = [];
                $(".news_contents_bottom_sp").each(function(i, elem) {
                    news_contents_bottom_sp_array.push(elem);
                });

                var news_contents_detail_sp_array = [];
                $(".news_contents_detail_sp").each(function(i, elem) {
                    news_contents_detail_sp_array.push(elem);
                });

                for(var i=0; i<cnt_sp; i++)
                {
                    var textHeight = $(news_contents_bottom_sp_array[i]).height();
                    var lineHeight = parseFloat($(news_contents_bottom_sp_array[i]).css('line-height'));

                    if(textHeight > lineHeight*lineNum)
                    {
                        $(news_contents_bottom_sp_array[i]).css({
                            'cssText': 'display:-webkit-box !important; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;'
                        });
                        if($(news_contents_bottom_sp_array[i]).data('type') == 'news')
                        {
                            $(news_contents_detail_sp_array[i]).show();
                        }
                    }
                    if($(news_contents_bottom_sp_array[i]).data('type') == 'blog')
                    {
                        $(news_contents_detail_sp_array[i]).show();
                    }
                }
            }
		} else {
			news.innerHTML = '新着情報取得中...'
		}
	}
	
	xhr.send( null );
	
}


contents_maker();

// if ( document.readyState == 'loading' ) {
// 	document.addEventListener( 'DOMContentLoaded', function() {
// 		contents_maker();
// 	}, false );
// } else {
// 	contents_maker();
// }