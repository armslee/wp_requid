<?php
/**
 * Basic Exception
 *
 * @author oncletom
 * @package wp-less
 * @subpackage lib
 */
class WPLessException extends Exception
{
  /**
   * Override the display output of the exception for WordPress
   *
   * @author oncletom
   * @see Exception::__toString()
   */
  public function __toString()
  {
      do_action( 'wp-less_save_stylesheet_error', $this );
      // wp_die($this->getMessage().'<br /><pre>'.$this->getTraceAsString().'</pre>', 'WP-LESS exception');
  }
}
