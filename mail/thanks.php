<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8" />
<title>さいたま訪問リハビリセンターへのお問い合わせ完了ページ</title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="stylesheet" href="css/reset.css" />
<style>
body {
	color: #454545;
	background: #f0f0f0;
}
</style>
<link rel="stylesheet" href="css/thanks.css" />
</head>
<body>

	<div id="thanks">
		
		<h1>お問い合わせありがとうございました。</h1>
		<p>担当より折り返しご連絡いたします。<br /><br /><br /><br /><br /></p>

    <div>
    <?php
    if($_SERVER['HTTP_HOST']=="noland.sakura.ne.jp")
    {
      echo('<a href="noland.sakura.ne.jp/saitama">戻る</a>');
    }
    elseif($_SERVER['HTTP_HOST']=="saitama-rehabili.com")
    {
      echo('<a href="saitama-rehabili.com">戻る</a>');
    }
    else{
      echo('<a href="http://localhost/saitama-rehabili.com/">戻る</a>');
    }
    ?>
    </div>

  </div>
<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
window.yjDataLayer = window.yjDataLayer || [];
function ytag() { yjDataLayer.push(arguments); }
ytag({
  "type":"yjad_retargeting",
  "config":{
    "yahoo_retargeting_id": "UTOGFSW4B1",
    "yahoo_retargeting_label": "",
    "yahoo_retargeting_page_type": "",
    "yahoo_retargeting_items":[
      {item_id: '', category_id: '', price: '', quantity: ''}
    ]
  }
});
</script>
</body>
</html>
