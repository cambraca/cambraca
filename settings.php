<?php

	class Link
	{
		public $url;
		public $title;
		public $hidden;
		public function __construct($url, $title, $hidden = FALSE)
		{
			$this->url = $url;
			$this->title = $title;
			$this->hidden = $hidden;
		}
	}

	$links = array(
		'email'			=> new Link('mailto:hola@cambraca.com', 'Email'),
		'mastodon'		=> new Link('https://musicians.today/@cambraca', 'Mastodon'),
		'twitter'		=> new Link('https://twitter.com/cambraca', 'Twitter', TRUE),
		'facebook'		=> new Link('https://facebook.com/cambraca', 'Facebook', TRUE),
		'github'		=> new Link('https://github.com/cambraca', 'GitHub'),
		'linkedin'		=> new Link('https://www.linkedin.com/in/cambraca', 'LinkedIn'),
//		'blog'			=> new Link('https://blog.cambraca.com', 'Blog'),
//		'gplus'			=> new Link('https://plus.google.com/u/0/111394655730295880367/about', 'Google+'),
		'soundcloud'	=> new Link('https://soundcloud.com/cambraca', 'SoundCloud', TRUE),
		'youtube'		=> new Link('https://www.youtube.com/cambraca1', 'YouTube', TRUE),
		'stackoverflow'	=> new Link('https://stackoverflow.com/users/368864/cambraca', 'Stack Overflow'),
		'toptal'	=> new Link('https://www.toptal.com/resume/camilo-bravo', 'Toptal'),
		'todayilearned'	=> new Link('https://todayilearned.cambraca.com', 'Today I Learned'),

		'volatil'		=> new Link('volatil', 'Volatil'),
		'volatil_bandcamp'		=> new Link('https://cambraca.bandcamp.com/album/volatil', 'Volatil @ Bandcamp', TRUE),
		'volatil_distrokid'		=> new Link('https://distrokid.com/hyperfollow/camilobravo/volatil', 'Volatil @ DistroKid', TRUE),
		'volatil_spotify'		=> new Link('https://open.spotify.com/album/39qfe1uHi7WVPZdYcvx6fL', 'Volatil @ Spotify', TRUE),
//		'volatil_soundcloud'	=> new Link('https://www.youtube.com/playlist?list=PLw2okqUZvAIaq3sgY_5JvJC7DVZ8T1Mz2', 'Volatil @ SoundCloud', TRUE),
		'volatil_youtube'		=> new Link('https://music.youtube.com/playlist?list=OLAK5uy_knL1sOscpUXc6QOTyCLHoqiNiutOphrug', 'Volatil @ YouTube', TRUE),
		'volatil_apple'		=> new Link('https://music.apple.com/us/album/volatil/1701049457', 'Volatil @ Apple Music', TRUE),
		'volatil_amazon'		=> new Link('https://music.amazon.com/albums/B0CDPF6HK3', 'Volatil @ Amazon Music', TRUE),
//		'volatil_pandora'		=> new Link('https://www.youtube.com/playlist?list=PLw2okqUZvAIaq3sgY_5JvJC7DVZ8T1Mz2', 'Volatil @ Pandora', TRUE),
//		'volatil_deezer'		=> new Link('https://www.youtube.com/playlist?list=PLw2okqUZvAIaq3sgY_5JvJC7DVZ8T1Mz2', 'Volatil @ Deezer', TRUE),
//		'volatil_tidal'		=> new Link('https://www.youtube.com/playlist?list=PLw2okqUZvAIaq3sgY_5JvJC7DVZ8T1Mz2', 'Volatil @ Tidal', TRUE),
	);
