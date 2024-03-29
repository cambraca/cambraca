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
		'bandcamp'		=> new Link('https://cambraca.bandcamp.com/album/volatil', 'Bandcamp'),
//		'distrokid'		=> new Link('https://distrokid.com/hyperfollow/camilobravo/volatil', 'DistroKid'),
		'spotify'		=> new Link('https://open.spotify.com/album/39qfe1uHi7WVPZdYcvx6fL', 'Spotify'),
//		'soundcloud'	=> new Link('https://soundcloud.com/cambraca', 'SoundCloud'),
		'ytmusic'		=> new Link('https://music.youtube.com/playlist?list=OLAK5uy_knL1sOscpUXc6QOTyCLHoqiNiutOphrug', 'YouTube Music'),
		'apple'			=> new Link('https://music.apple.com/us/album/volatil/1701049457', 'Apple Music'),
		'amazon'		=> new Link('https://music.amazon.com/albums/B0CDPF6HK3', 'Amazon Music'),
//		'pandora'		=> new Link('https://www.youtube.com/cambraca1', 'Pandora'),
//		'deezer'		=> new Link('https://www.youtube.com/cambraca1', 'Deezer'),
//		'tidal'			=> new Link('https://www.youtube.com/cambraca1', 'Tidal'),
	);
