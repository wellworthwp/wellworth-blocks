<?php
/**
 * Intentional PHPCS-violation fixture for DEFER-T006-D gate verification.
 *
 * @package WellWorth\Blocks
 */

declare( strict_types=1 );

defined( 'ABSPATH' ) || exit;

// Deliberate WordPress.Security.EscapeOutput violation:
// direct unsanitised output of GET superglobal.
// PHPCS must flag this and fail the build.
echo $_GET['x'];
