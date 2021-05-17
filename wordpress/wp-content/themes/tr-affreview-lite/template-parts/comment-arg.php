<?php 
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
?>
<div class="submit-comment">
  <?php
  $args = array(
    'fields' => apply_filters(
      'comment_form_default_fields', array(
        'author' =>'<label for="author"><i>' . __( 'Name', 'tr-affreview-lite' ) . '</label> '. ( $req ? '<span class="required">:*</i></span>' : ':</i>' )  .'<div class="form-group">' . '<input id="author" placeholder="" name="author" type="text" class="form-control" value="'  .
          esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.'</div>'
          ,
        
        'email'  =>'<label for="email"><i>' . __( 'Email', 'tr-affreview-lite'  ) . '</label> '. ( $req ? '<span class="required">:*</i></span>' : ':</i>' )  .'<div class="form-group">' . '<input id="email" placeholder="" name="email" type="text" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) .
          '" size="30"' . $aria_req . ' />' . '</div>'
          ,
        
        'url'   => '<label for="url"><i>' . __( 'Your Website:', 'tr-affreview-lite' ) . '</i></label>'.'<div class="form-group">' .
         '<input id="url" name="url" placeholder="" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> '.
        '</div>'
      )
    ),
      'comment_field' => '<div class="form-group comment-form-comment">' .
      '<label for="comment">' . __( 'Comments:', 'tr-affreview-lite'  ) . '</label>' .
      '<textarea id="comment" class="form-control" name="comment" placeholder="" cols="45" rows="13" aria-required="true"></textarea>' .
      '</div>',
      
  );
  comment_form($args);
  ?>
</div><!-- /.submit-comment  -->