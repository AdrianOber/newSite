<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: Hello Dolly
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.7.2
Author URI: http://ma.tt/
*/

function hello_dolly_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "If Rain is What You Want - Slipknot
It's been years since anyone
Could be a friend
It's the fear that kills the feeling
In the end
Can we face it?
Can we shape it?
Can we really die?
If rain is what you want
All you have to do is close your eyes
Just close your eyes
I have watched your resurrection
Start to crawl
Is there any chance in hell? (Any chance in hell?)
Any chance at all?
Do we need it? Do we see it?
Is it really there?
If rain is what you want
Then take your seats
Enjoy the fall
Enjoy the fall
The only thing deeper than my last breath
The only thing darker than my last death
Is the panic, the static
I've come back from the dead
For my solace
We'll never sleep again
In these diamonds
We're left with colored glass
As pressure takes its toll
We will outlast
But you can't break my heart
As long as I can be myself
I'll never fall apart
And you can't take me in
If I'm not broken, break me down
So I will never feel alone again
The only thing deeper than my last breath
The only thing darker than my last death
Is the panic, the static
I've come back from the dead
For my solace
We'll never sleep again
My solace
We'll never sleep again
My solace
We'll never sleep again
My solace
We'll never sleep again
My solace
We'll never sleep again";

	// Here we split it into lines.
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line.
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function hello_dolly() {
	$chosen = hello_dolly_get_lyric();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="dolly"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Quote from Hello Dolly song, by Jerry Herman:' ),
		$lang,
		$chosen
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'hello_dolly' );

// We need some CSS to position the paragraph.
function dolly_css() {
	echo "
	<style type='text/css'>
	#dolly {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #dolly {
		float: left;
	}
	.block-editor-page #dolly {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#dolly,
		.rtl #dolly {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'dolly_css' );
