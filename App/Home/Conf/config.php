<?php
return array(

	'URL_ROUTER_ON'   => true,  // 开启路由
    'URL_ROUTE_RULES'=>array(    
         'article/:a_id' => 'Index/article',    
         'topic/:c_value' => 'Index/theme',    
          'me'		=> 'Index/aboutme',
        ),

);