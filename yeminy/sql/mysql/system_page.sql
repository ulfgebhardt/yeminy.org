INSERT INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (10, 1, '', 'article', -1, 0, 0, '#div_content', './?page=article&id=${article}', 'init_article', 'default_article');
INSERT INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (20, 1, '', 'impressum', -1, 0, 0, '#div_content', './?page=impressum', 'init_impressum', 'default_impressum');
INSERT INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (30, 1, '', 'search', -1, 0, 0, '#div_content', './?page=search&param=${param}', 'init_search', 'default_search');
INSERT INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (40, 1, '', 'start', -1, 0, 0, '#div_content', './?page=list&tag=${tag}', 'init_start', 'default_list');