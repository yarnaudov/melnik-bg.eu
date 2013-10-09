<?php

if(count($menus) > 0 || $article_alias != ''){

    if(isset($text)){
		echo '<span>'.$text.'</span>';
    }
    
    //echo '<ul>';

    //echo '    <li>';
    echo '        <a href="'.site_url().'" >'.$this->Menu->getDefault('title').'</a>';
    //echo '    </li>';

    $numb = 1;
    foreach($menus as $menu){

		echo  $separator."&nbsp;";
        
        if(count($menus) == $numb && $article_alias == ''){
            echo '<a class="inactive" >'.$menu['title'].'</a>'; 
        }
        else{
            echo "<a href=\"".$menu['link']."\" >".$menu['title']."</a>\n";
        }
        
        $numb++;
        
    }
    
    if($article_alias != ''){
        
        echo  $separator."&nbsp;";
        echo '<a class="inactive" >'.$this->Article->getByAlias($article_alias, 'title').'</a>';
        
    }


}
 
?>
