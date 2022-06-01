<?php

class Contents_Maker {
	
	// property init
	protected $admin_user          = '';
	protected $admin_pass          = '';
	protected $domain_name         = '';
	
	protected $login_url           = '';
	protected $admin_url           = '';
	protected $session_id          = '';
	protected $token               = '';
	
	protected $pdo                 = '';
	
	
	// html tag addon property
	protected $html_tag            = 0;
	
	
	// attachment addon property
	protected $jpg                 = 1;
	protected $png                 = 1;
	protected $gif                 = 1;
	protected $upload_max_size     = 0;
	
	protected $resize_width_small  = 200;
	protected $resize_height_small = 200;
	
	
	
	
	// public construct
	public function __construct() {
		
		include( dirname( __FILE__ ) .'/config.php' );
		
		$this->admin_user     = $cm_admin_user;
		$this->admin_pass     = $cm_admin_pass;
		$this->domain_name    = $_SERVER['HTTP_HOST'];
		
		$this->login_url      = '//'.$_SERVER['HTTP_HOST'].dirname( $_SERVER['SCRIPT_NAME'] ).'/login.php';
		$this->admin_url      = '//'.$_SERVER['HTTP_HOST'].dirname( $_SERVER['SCRIPT_NAME'] ).'/admin.php';
		$this->session_id     = htmlspecialchars( session_id(), ENT_QUOTES, 'UTF-8' );
		$this->token          = sha1( $this->session_id );
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/html-tag/tag-config.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/html-tag/tag-config.php' );
			include( dirname( __FILE__ ) .'/../addon/html-tag/config-include.php' );
		}
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/attachment/attachment-config.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/attachment/attachment-config.php' );
			include( dirname( __FILE__ ) .'/../addon/attachment/config-include.php' );
		}
		
		
		try {
			$this->pdo = new PDO( "sqlite:". dirname( __FILE__ ) ."/../db/contents_maker.sqlite3" );
		} catch ( PDOException $e ) {
			exit( 'データベース接続に失敗しました。'.$e->getMessage() );
		}
		
		$sql = "CREATE TABLE IF NOT EXISTS `cm_post5`"
			."( "
			."`id` INTEGER PRIMARY KEY AUTOINCREMENT, "
			."`time` DATETIME, "
			."`date` VARCHAR(255), "
			."`title` TEXT, "
			."`contents` TEXT, "
			."`img` VARCHAR(255), "
			."`display` BOOLEAN NOT NULL DEFAULT 1, "
			."`small` VARCHAR(255), "
			."`reserve` VARCHAR(255), "
			."`row` INT"
			." );";
		
		$stmt = $this->pdo->prepare( $sql );
		$stmt->execute();
		
	}
	
	
	
	
	// public javascript_action_check
	public function javascript_action_check() {
		
		if ( ! ( isset( $_POST['javascript_action'] ) && $_POST['javascript_action'] === 'true' ) ) {
			echo 'spam_failed-0001';
			exit;
		}
		
	}
	
	
	
	
	// public referer_check
	public function referer_check() {
		
		if ( $this->domain_name !== '' ) {
			if ( strpos( $_SERVER['HTTP_REFERER'], $this->domain_name ) === false ) {
				echo 'spam_failed-0002';
				exit;
			}
		}
		
	}
	
	
	
	
	// public session_check
	public function session_check() {
		
		if ( ! ( isset( $_SESSION['contents_maker_login'] ) && $_SESSION['contents_maker_login'] === 'contents_maker_login_ok' ) ) {
			echo 'spam_failed-0003';
			exit;
		}
		
	}
	
	
	
	
	// public token_check
	public function token_check() {
		
		if ( ! ( isset( $_POST['token'] ) && $_POST['token'] === $this->token ) ) {
			echo 'spam_failed-0004';
			exit;
		}
		
	}
	
	
	
	
	// public get_news
	public function get_news( $login ) {
		
		$stmt = $this->pdo->prepare( "SELECT * FROM cm_post5 ORDER BY id DESC" );
		$stmt->execute();
		
		
		echo <<<EOM


<div id="information">
EOM;
		
		
		while ( $row = $stmt->fetch() ) {
			
			$time_difference = 0;
			$span_delete     = '';
			$span_edit       = '';
			$span_reserve    = '';
			$image_html      = '';
			$data_order      = '';
			
			
			if ( file_exists( dirname( __FILE__ ) .'/../addon/reserve/time-difference.php' ) ) {
				include( dirname( __FILE__ ) .'/../addon/reserve/time-difference.php' );
			}
			
			
			if ( $login !== true ) {
				
				if ( (int)$time_difference < 0 ) {
					continue;
				}
				
			} else {
				$span_edit = '<span id="'.$row['id'].'" class="edit" data-edit="'.$row['id'].'">編集する</span>';
				$span_delete = '<span class="delete" data-delete="'.$row['id'].'">削除する</span>';
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/edit/span-edit.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/edit/span-edit.php' );
				}
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/reserve/span-reserve.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/reserve/span-reserve.php' );
				}
				
			}
			
			
			if ( file_exists( dirname( __FILE__ ) .'/../addon/attachment/image-html.php' ) ) {
				include( dirname( __FILE__ ) .'/../addon/attachment/image-html.php' );
			}
			
			if ( file_exists( dirname( __FILE__ ) .'/../addon/sort/data-order.php' ) ) {
				include( dirname( __FILE__ ) .'/../addon/sort/data-order.php' );
			}
			
			
			echo <<<EOM

	<div{$data_order} style='align-items:center;border-top: 1px solid #cccccc;'>
		{$image_html}
		<div>
			<div id="left-{$row['id']}" style='width:20%'>
				<div id="input-img-{$row['id']}"><img src="../thumbnail/{$row['img']}" style='object-fit:cover;'></div>
			</div>
			<div id="center-{$row['id']}" style='width:60%'>
				<dl>
					<dd id="input-date-{$row['id']}" style='font-weight:bold;'>{$row['date']}</dd>
					<dd id="input-title-{$row['id']}" style='font-weight:bold;'>{$row['title']}</dd>
					<dd id="input-display-{$row['id']}" style='display:none'>{$row['display']}</dd>
					<dd onclick='show_contents({$row['id']})' id="input-contents-{$row['id']}" style="cursor:pointer;
					display: -webkit-box;
					-webkit-line-clamp: 4;
					-webkit-box-orient: vertical;
					overflow: hidden;">{$row['contents']}</dd>
				</dl>
			</div>
		</div>
		<div class='btn-edit-delete-parent'>
			<dt class='btn-edit-delete'>
				<div>{$span_edit}</div>
				<div>{$span_delete}</div>
			</dt>
		</div>
	</div>
EOM;
			
		}
		
		
		echo <<<EOM

</div>
EOM;
		
	}

	// public get_news
	public function get_news_display( $login ) {
		
		$stmt = $this->pdo->prepare( "SELECT * FROM cm_post5 ORDER BY id DESC" );
		$stmt->execute();
		
		// ブログの取得
		$rss = simplexml_load_file('https://saitama-rehabili.com/feed/');
		$news_list = array();
		$news_cnt = 0;
		foreach($rss->channel->item as $item){
			$news_list[] = array(
				'title'   => $item->title, //記事タイトル
				'date'    => date("Y/m/d", strtotime($item->pubDate)), //日付
				'guid'    => $item->guid, //リンク,
				'description'=> $item->description, //ディスクリプション
				'url'   => $item->url
			);
			$news_cnt++;
			
			if ($news_cnt==3) {
				break;
			}
		}
		// ！ブログの取得

		echo <<<EOM


<div id="information" style="word-break: break-all;">
EOM;
		$news_blog_array = [];

		while ( $row = $stmt->fetch() ) {
			$element = [
				'id' => $row['id'],
				'date' => $row['date'],
				'title' => $row['title'],
				'contents' => $row['contents'],
				'img' => 'contents-maker/thumbnail/'.$row['img'],
				'display' => $row['display'],
				'type' => 'news',
				'guid' => 'javascript:void(0)'
			];
			array_push($news_blog_array, $element);
		}

		foreach($news_list as $row) {
			if($row['url'] == ''){
				$row['url'] = 'contents-maker/thumbnail/no-image.png';
			}
			$element = [
				'id' => 0,
				'date' => $row['date'],
				'title' => $row['title'],
				'contents' => $row['description'],
				'img' => $row['url'],
				'display' => 1,
				'type' => 'blog',
				'guid' => $row['guid']
			];

			array_push($news_blog_array, $element);
		}
		
		array_multisort( array_map( "strtotime", array_column( $news_blog_array, "date" ) ), SORT_DESC, $news_blog_array ) ;

		// while ( $row = $stmt->fetch() ) {
		$j = 0;
		foreach($news_blog_array as $row) {
			$j++;
			if($j == 3){
				break;
			}
			$time_difference = 0;
			$span_delete     = '';
			$span_edit       = '';
			$span_reserve    = '';
			$image_html      = '';
			$data_order      = '';
			
			
			if ( file_exists( dirname( __FILE__ ) .'/../addon/reserve/time-difference.php' ) ) {
				include( dirname( __FILE__ ) .'/../addon/reserve/time-difference.php' );
			}
			
			
			if ( $login !== true ) {
				
				if ( (int)$time_difference < 0 ) {
					continue;
				}
				
			} else {
				$span_edit = '<span class="edit" data-edit="'.$row['id'].'">編集する</span>';
				$span_delete = '<span class="delete" data-delete="'.$row['id'].'">削除する</span>';
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/edit/span-edit.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/edit/span-edit.php' );
				}
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/reserve/span-reserve.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/reserve/span-reserve.php' );
				}
				
			}
			
			
			if ( file_exists( dirname( __FILE__ ) .'/../addon/attachment/image-html.php' ) ) {
				include( dirname( __FILE__ ) .'/../addon/attachment/image-html.php' );
			}
			
			if ( file_exists( dirname( __FILE__ ) .'/../addon/sort/data-order.php' ) ) {
				include( dirname( __FILE__ ) .'/../addon/sort/data-order.php' );
			}
			
			if($row['display'])
			{
				$date = date('Y年m月d日',  strtotime($row['date']));
				echo <<<EOM

				<div{$data_order} style='display:flex;align-items:center;border-top:none;margin-top:10px'>
					{$image_html}
					<div id="left-{$row['id']}" class="news_contents_img" style='width:20%;height:180px;margin:20px'>
						<div id="input-img-{$row['id']}"><img src="{$row['img']}" style="width:100%;height:100%; object-fit:cover"></div>
					</div>
					<div id="center-{$row['id']}" style='width:80%'>
						<dl>
							<div class='news_contents_left_top'>
								<dd id="input-date-{$row['id']}" style='font-weight:bold;;min-width:18%'>{$date}</dd>
								<dd id="input-title-{$row['id']}">{$row['title']}</dd>
							</div>
							<dd data-type='{$row['type']}' class='news_contents_bottom' id="input-contents-{$row['id']}" style='margin-top:10px;'>{$row['contents']}</dd>
							<dd id='news-contents-detail-{$row['id']}' class='news_contents_detail' onclick='show_contents({$row['id']})' style='cursor:pointer;color:blue;text-align:right;'>
							<a href='{$row['guid']}'>
							詳しく見る
							</a>
							</dd>
						</dl>
					</div>
				</div>

				<dd data-type='{$row['type']}' class='news_contents_bottom_sp' id="input-contents-sp-{$row['id']}" style='margin-top:10px;'>{$row['contents']}</dd>
							<div id='news-contents-detail-sp-{$row['id']}' class='news_contents_detail_sp' onclick='show_contents({$row['id']})' style='cursor:pointer;color:blue;text-align:right;'>
							<a href='{$row['guid']}'>
							詳しく見る
							</a>
							</div>
				EOM;
			}
		}
		
		echo <<<EOM

</div>
EOM;
		
	}
	
}

?>