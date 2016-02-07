<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'u859816582_abdul');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'u859816582_blog');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'Asd123456');

/** MySQL sunucusu */
define('DB_HOST', 'mysql.hostinger.web.tr');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?#Cb5N,Wj*Uu/UgvRQO|mgq(vNqWKsT:SDxu,XD5Rs!F8vt97=}^<8B2.y<CQ99<');
define('SECURE_AUTH_KEY',  '7zvsVfPhtj^J-}sId,!-+i:j%Z$9;%K!+| }[`H2>v%glL*e?Vqe^/Ut4PN=g@vA');
define('LOGGED_IN_KEY',    '><,tA>z:h)HoaVty-3s;3u17a<2X-rQQM6GL90)ETno2R5:O(T$51+g#|8Z]iX|p');
define('NONCE_KEY',        '!/|c|)_9y%yjHe7yp~@(BPCB49ZydgZ}2J&E!(8y9--HtH&SWo9|oP3zXMhC_8?C');
define('AUTH_SALT',        'AVbnn5C-5tKqkfpjW;3fq@?&Sk2|Lzt/HamrO.M<:i}zhk1bAqzDj#;T:[U-r%|=');
define('SECURE_AUTH_SALT', 'xH~D>8z+HI:h-7T(TBY5]>T0pKfDFhTS;k|pu7YTMm/XSaK P-=Hm+Gc;B4U9C|8');
define('LOGGED_IN_SALT',   '5j8>0s@onr*%v0W~ j]n+{Iv*EPo;tNwKb?vYG*[X_*y[b|6j]eZS6yWGP?h7Y$x');
define('NONCE_SALT',       'yy4m{DkT&*fK8t|Q(-`*}dtsv4+bRjs+i#SpgveG~r6XGmbGx&i[xAZtPYA/4{8;');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
