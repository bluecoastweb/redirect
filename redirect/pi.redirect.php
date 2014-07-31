<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
  'pi_name'        => 'Redirect',
  'pi_version'     => '1.0.0',
  'pi_author'      => 'Steve Pedersen',
  'pi_author_url'  => 'http://www.bluecoastweb.com/',
  'pi_description' => 'Redirect to URL',
  'pi_usage'       => Redirect::usage()
);

class Redirect {

  public function __construct() {
    $this->EE =& get_instance();
    $this->EE->load->helper('url');
    $url = $this->EE->TMPL->fetch_param('url');
    if ($url) {
      redirect($url, 'location', 301);
    }
  }

  public static function usage() {
    ob_start();
?>

{exp:redirect url='http://bluecoastweb.com/'}

<?php
    $buffer = ob_get_contents();
    ob_end_clean();
    return $buffer;
  }
}

/* End of file pi.input.php */
/* Location: /system/expressionengine/third_party/input/pi.redirect.php */
