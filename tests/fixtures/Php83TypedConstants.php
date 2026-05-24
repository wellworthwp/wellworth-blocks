<?php
/**
 * PHP 8.3 typed-class-constant fixture — DEFER-T006-D #3.
 *
 * Typed class constants were introduced in PHP 8.3 (RFC). They cause a
 * fatal parse error on PHP 8.1 and 8.2. In the CI tri-matrix this means
 * the 8.1 leg (and 8.2) must fail `php -l` while the 8.3 and 8.4 legs
 * pass, demonstrating that the floor protection works as documented.
 *
 * @package WellWorth\Blocks
 * @see https://wiki.php.net/rfc/typed_class_constants
 */

declare( strict_types=1 );

defined( 'ABSPATH' ) || exit;

// phpcs:disable -- fixture intentionally requires PHP 8.3+

class TypedConstantExample {
	const string LABEL   = 'wellworth';
	const int    VERSION = 1;
	const bool   ACTIVE  = true;
}
