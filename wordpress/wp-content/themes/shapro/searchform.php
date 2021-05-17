<form method="get" id="searchform" class="input-group" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="input-group">
                  <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'shapro' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                  <span class="input-group-btn btn-default">
                  <button type="submit" class="btn"> <?php esc_html_e('Search', 'shapro'); ?> </button>
                  </span> 
                </div>
              </form>