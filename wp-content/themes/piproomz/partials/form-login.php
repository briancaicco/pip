<?php 


function sos_login_form( $args = array() ) {

    $defaults = array(
        'echo' => true,
        // Default 'redirect' value takes the user back to the request URI.
        'redirect' => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
        'form_id' => 'loginform',
        'label_username' => __( 'Username or Email Address' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in' => __( 'Log In' ),
        'id_username' => 'user_login',
        'id_password' => 'user_pass',
        'id_remember' => 'rememberme',
        'id_submit' => 'wp-submit',
        'remember' => true,
        'value_username' => '',
        // Set 'value_remember' to true to default the "Remember me" checkbox to checked.
        'value_remember' => false,
    );
 
    /**
     * Filters the default login form output arguments.
     *
     * @since 3.0.0
     *
     * @see wp_login_form()
     *
     * @param array $defaults An array of default login form arguments.
     */
    $args = wp_parse_args( $args, apply_filters( 'login_form_defaults', $defaults ) );
 
    /**
     * Filters content to display at the top of the login form.
     *
     * The filter evaluates just following the opening form tag element.
     *
     * @since 3.0.0
     *
     * @param string $content Content to display. Default empty.
     * @param array  $args    Array of login form arguments.
     */
    $login_form_top = apply_filters( 'login_form_top', '', $args );
 
    /**
     * Filters content to display in the middle of the login form.
     *
     * The filter evaluates just following the location where the 'login-password'
     * field is displayed.
     *
     * @since 3.0.0
     *
     * @param string $content Content to display. Default empty.
     * @param array  $args    Array of login form arguments.
     */
    $login_form_middle = apply_filters( 'login_form_middle', '', $args );
 
    /**
     * Filters content to display at the bottom of the login form.
     *
     * The filter evaluates just preceding the closing form tag element.
     *
     * @since 3.0.0
     *
     * @param string $content Content to display. Default empty.
     * @param array  $args    Array of login form arguments.
     */
    $login_form_bottom = apply_filters( 'login_form_bottom', '', $args );
 
    $form = '
    	' . do_action( 'wordpress_social_login' ) . '
        <form name="' . $args['form_id'] . '" class="standard-form px-4 pt-0 pb-4" id="' . $args['form_id'] . '" action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post">
            ' . $login_form_top . '
            <div class="input-group input-group-lg mt-3 py-2">
            	<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                <input type="text" name="log" id="' . esc_attr( $args['id_username'] ) . '" class="input form-control" value="' . esc_attr( $args['value_username'] ) . '" placeholder="' . esc_attr( $args['label_username'] ) . '" />
            </div>
            <div class="input-group input-group-lg mt-3 py-2">
                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" name="pwd" id="' . esc_attr( $args['id_password'] ) . '" class="input form-control" value="" placeholder="' . esc_attr( $args['label_password'] ) . '"" />
            </div>
			<div class="input-group input-group-lg border-0 mt-2 py-2">
				<button type="checkbox" class="btn btn-sm btn-switch" data-toggle="button" aria-pressed="false" autocomplete="off">
				  <div class="handle"></div>
				</button>
				<div class="text-white">' . esc_html( $args['label_remember'] ) . '</div>
			</div>
            <div class="submit pt-3">
                <input type="submit" name="wp-submit" id="' . esc_attr( $args['id_submit'] ) . '" class="btn btn-lg btn-success btn-block rounded-0 p-2" value="' . esc_attr( $args['label_log_in'] ) . '" />
                <input type="hidden" name="redirect_to" value="' . esc_url( $args['redirect'] ) . '" />
            </div>
            ' . $login_form_bottom . '
        </form>';
 
    if ( $args['echo'] )
        echo $form;
    else
        return $form;
}

// Initialize Form
sos_login_form();
