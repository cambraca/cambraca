<?php
	
	class Link
	{
		public $url;
		public $title;
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
		'volatil'		=> new Link('https://www.youtube.com/playlist?list=PLw2okqUZvAIaq3sgY_5JvJC7DVZ8T1Mz2', 'Volatil'),
		'stackoverflow'	=> new Link('https://stackoverflow.com/users/368864/cambraca', 'Stack Overflow'),
		'toptal'	=> new Link('https://www.toptal.com/resume/camilo-bravo', 'Toptal'),
		'todayilearned'	=> new Link('https://todayilearned.cambraca.com', 'Today I Learned'),
	);
