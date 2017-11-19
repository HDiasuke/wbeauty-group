/* DOMの読み込み完了後に処理 */
if(window.addEventListener)
{
	window.addEventListener( "load" , syncerTelephoneLink, false );
}
else
{
	window.attachEvent( "onload", syncerTelephoneLink );
}

//電話番号にリンクを付ける関数
function syncerTelephoneLink()
{
	// 画面幅を取得
	var width = window.innerWidth ;

	// 画面幅が640px以上の場合は終了
	if( width>=640 ){ return false ; }

	// [class="syncer-tel"]の要素を取得
	var elms = document.getElementsByClassName( "syncer-tel" ) ;

	// リンクを付けていく
	for( var i=0,l=elms.length; l>i; i++ )
	{
		// 処理する要素
		var elm = elms[i] ;

		// 電話番号を取得
		var number = elm.getAttribute( "data-number" ) ;
		number = number.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
			return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
		});
		number = number.replace(/ー|‐|－|―|₋|—/g , "-" )

		number = number.replace(/-/g , "" )

		// [href]属性値を設定する
		if( number!=null )
		{
			// Aタグの場合
			if( elm.tagName == "A" )
			{
				elm.href = "tel:" + number ;
			}

			// それ以外のタグの場合
			else
			{
				var text = elm.innerHTML ;

				elm.innerHTML = '<a href="tel:' + number + '">' + text + '</a>' ;
			}
		}
	}
} ;