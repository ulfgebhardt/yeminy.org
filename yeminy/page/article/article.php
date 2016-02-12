<?php
class article {
    public static function preview($element = array()){
        $element['published'] = date_format(new DateTime($element['time_create']), 'H:i d-m-Y');
        $element['ago'] = \SYSTEM\time::time_ago_string(strtotime($element['time_create']));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('article/tpl/preview.tpl'))->SERVERPATH(), $element);
    }

    public static function full($id) {
        $vars = \SYSTEM\PAGE\text::get_adv($id);
        $tags = \SYSTEM\PAGE\text::get_tags($id,7);
        $vars['tags'] = '';
        foreach($tags as $tag){
            $vars['tags'] .= \SYSTEM\PAGE\replace::replaceFile((new PPAGE('article/tpl/tag.tpl'))->SERVERPATH(), $tag);}
        $vars['published'] = date_format(new DateTime($vars['time_create']), 'H:i d-m-Y');
        $vars['ago'] = \SYSTEM\time::time_ago_string(strtotime($vars['time_create']));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('article/tpl/article.tpl'))->SERVERPATH(), $vars);
    }

}