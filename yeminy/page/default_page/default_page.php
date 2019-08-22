<?php
class default_page implements \SYSTEM\PAGE\DefaultPage {
    public static function js(){        
        return  \SYSTEM\HTML\html::script(\LIB\lib_jquery::js()->WEBPATH()).
                \SYSTEM\HTML\html::script(\LIB\lib_bootstrap::js()->WEBPATH()).
                \SYSTEM\HTML\html::script(\LIB\lib_system::js()->WEBPATH()).
                \SYSTEM\HTML\html::script(\LIB\lib_jqbootstrapvalidation::js()->WEBPATH()).
                \SYSTEM\HTML\html::script((new PPAGE('default_page/js/default_page.js'))->WEBPATH());
    }
    
    public static function css(){  
        return  \SYSTEM\HTML\html::link(\LIB\lib_bootstrap::css()->WEBPATH()).
                \SYSTEM\HTML\html::link(\LIB\lib_animate::css()->WEBPATH()).
                \SYSTEM\HTML\html::link(\LIB\lib_system::css()->WEBPATH()).
                \SYSTEM\HTML\html::link((new PPAGE('default_page/css/default_page.css'))->WEBPATH());
    }
    
    public function html($_escaped_fragment_ = NULL){
        $vars = array();
        $vars['js'] = '';
        if(!$_escaped_fragment_){
            $vars['js'] = $this->js();}
        $vars['css'] = $this->css();
        $vars['content_header'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_page/tpl/content_header.tpl'))->SERVERPATH());
        $vars['content_menu'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_page/tpl/content_menu.tpl'))->SERVERPATH());
        $vars['content'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_page/tpl/content.tpl'))->SERVERPATH());
        $vars['content_footer'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_page/tpl/content_footer.tpl'))->SERVERPATH());
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('meta'));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_page/tpl/default_page.tpl'))->SERVERPATH(), $vars);
    }
}
