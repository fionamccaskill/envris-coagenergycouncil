<?php
/**
 * @file
 * redirect_and_show_url.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function redirect_and_show_url_default_rules_configuration() {
  $items = array();
  $items['rules_login_redirect_to_st'] = entity_import('rules_config', '{ "rules_login_redirect_to_st" : {
      "LABEL" : "Login redirect to ST",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "rules" ],
      "ON" : { "user_view" : [] },
      "DO" : [
        { "redirect" : { "url" : "https:\\/\\/prod-SITENAME-industry-gov-au.industry.slicedtech.com.au\\/user" } }
      ]
    }
  }');
  return $items;
}
