<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'deivid' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z7gaGWNvo;?A6P}Fb=aNIpLcDF`-?FIOOyfq<yco=:D,gPulafT=P(u(|h_k2Wiv' );
define( 'SECURE_AUTH_KEY',  'jKO2~X@p?;VB7yrO`uU_QFq(OMvtWSAwkVGCNFZVss61UUV[9B@BRd|*,19!6l%{' );
define( 'LOGGED_IN_KEY',    ']I&V8#k-SpsZ4{t7>O^>uw_-grFwNA-`YV,zm$=fZZH~MMcG>b-ZX+{tt{^g Gw+' );
define( 'NONCE_KEY',        'nDX]svio%aOw2kt5za&x>cehJB+Ng{RQ7K^1~2tE(T?;2Xu)j:&2 Kya_Jbe|DZ?' );
define( 'AUTH_SALT',        '4{KnGZvgy/_{&DvFvTCe1+3;R4IyJZY!GiX?(0x|7M} j[L7kKRi(~v[Jv=r8rQ#' );
define( 'SECURE_AUTH_SALT', '`^yl|K>gDcG>0!fa),{`vZ$8Z.b#Zli*(4<FO.|~.:bEe[zcln#OH)cRr8l3Zmif' );
define( 'LOGGED_IN_SALT',   'aBChuNivOt[j$S-G9B#Xp-KE/i_#Q_1[^-ZFfbHWHN|ZEA2;B=ZV#l;d]f0^Ji~/' );
define( 'NONCE_SALT',       '=C:Z(e]NS{ueS ,BKhKez@?9x!C:_$S&],-Rpv1;f-bgaP&BA-{WnQDiP&t!REH#' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
