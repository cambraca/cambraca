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
		'bandcamp'		=> new Link('mailto:hola@cambraca.com', 'Bandcamp'),
		'spotify'		=> new Link('https://musicians.today/@cambraca', 'Spotify'),
		'soundcloud'	=> new Link('https://soundcloud.com/cambraca', 'SoundCloud'),
		'youtube'		=> new Link('https://www.youtube.com/cambraca1', 'YouTube'),
		'apple'			=> new Link('https://www.youtube.com/cambraca1', 'Apple Music'),
		'amazon'		=> new Link('https://www.youtube.com/cambraca1', 'Amazon Music'),
		'pandora'		=> new Link('https://www.youtube.com/cambraca1', 'Pandora'),
		'deezer'		=> new Link('https://www.youtube.com/cambraca1', 'Deezer'),
		'tidal'			=> new Link('https://www.youtube.com/cambraca1', 'Tidal'),
	);
