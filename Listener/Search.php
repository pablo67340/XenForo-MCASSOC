<?php
class AssociationMc_Listener_Search {
  public static function hookSearchTab($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template) {
    switch ($hookName) {
      case "search_form_tabs":
        $contents .= $template->create('association_search_tab', $template->getParams());
        break;
    }
  }
}
