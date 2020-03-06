<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress_test4' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G!%FiP;4?h$#Uy00;[=s*^/tM<RIypMa);vzlXC4_g#wt{]Id47%UHRx=+0#v<>X' );
define( 'SECURE_AUTH_KEY',  'qhx`o#&1;}2>GB9V6W1K]nUU:E_pn9dnk,AP@h>~`Pw!W9A85B xl=`nm*#zRxKu' );
define( 'LOGGED_IN_KEY',    'j)I2TE$ZIyk?N$RP1aOzDc[,C-z6a^GoA>SoFYnql3,cRw~oX3,#.V]BudlFlo>n' );
define( 'NONCE_KEY',        'E9ZA.H+.5!vhQvObSm*C112M.hjkE>&{MJSxAtt<r+7s}ZvGd{Z_,wAJ+h.;g{Dm' );
define( 'AUTH_SALT',        ':_<RM4NLM0@|QcxIjfljaG@$A Dmmi@P_F)QAW-HBo#g;~j~8WJsyJ1[35~2*.{w' );
define( 'SECURE_AUTH_SALT', '0}X^Z_(o?7WYAF@|NVo]rX/5;wOs)LbutMK&ARw$i0qgoJS b8@l%X<N*O2Ln,#%' );
define( 'LOGGED_IN_SALT',   'PouY9WQKrGSis(H(YL?.^W6dZf9`WXQ_w,:4~`}l9z>69xBo@[2rIT;n]w^1F#>u' );
define( 'NONCE_SALT',       'p@.3 ojk/wAckE$z9pN,-V:qj>c.&]dRJH&sl8]t6D+tegmPv;g=u$u,_XgG][5F' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
