<?php

namespace Lukieer\TS3AudioBot\Api;

class bot extends request {

    public $auth;
    public $id;
/**
 * 
 *  __construct - Register new bot
 * 
 * @param array    $auth  Login options
 * @param int      $id    Bot id
 * 
 * @return boolean 1
 * 
 */
    public function __construct(Array $auth, int $id)
    {
        $this->auth = $auth;
        $this->id = $id;

        return true;
    }
/**
 * 
 * botInfo - Info about the bot.
 * 
 * @return string botInfo
 * 
 */
	public function botInfo()
    {
		return parent::request($this->auth, $this->id, '(/bot/info/client');
	}
/**
 * 
 * play - Automatically tries to decide whether the link is a special resource (like youtube) or a direct resource (like ./hello.mp3) and starts it.
 * 
 * @param   string  $string - Youtube or Patch to music
 * 
 * @return  array
 * 
 */
    public function play(string $string)
    {
        return parent::request($this->auth, $this->id, '(/play/'.urlencode($string));
    }
/**
 * 
 * setVolume - Sets the volume level of the music.
 * 
 * @param   int  $vol - Volume
 * 
 * @return array
 * 
 */
	public function setVolume(int $vol)
	{
		return parent::request($this->auth, $this->id, '/(/volume/'.$vol);
	}
/**
 * 
 * next - Plays the next song in the playlist.
 * 
 * @return array
 * 
 */
    public function next()
	{
		return parent::request($this->auth, $this->id, '(/next');
	}
/**
 * 
 *  previous - Plays the previous song in the playlist.
 * 
 * @return array
 * 
 */
    public function previous()
    {
	    return parent::request($this->auth, $this->id, '(/previous');
    }
/**
 * 
 * pause - Well, pauses the song. Undo with !play.
 * 
 * @return array
 * 
 */
    public function pause()
	{
		return parent::request($this->auth, $this->id, '(/pause');
	}
/**
 * 
 * pause - Lets you format multiple parameter to one.
 * 
 * @param  array  $param - paramets
 * 
 * @return array
 * 
 */
    public function print($param)
	{
		$param = implode(",",$param);
		return parent::request($this->auth, $this->id, '(/print/'.$param);
	}
/**
 * 
 * rng - Gets a random number.
 * 
 * @param  int  $first - First number.
 * @param  int  $second - Second number.
 * 
 * @return array
 * 
 */
    public function rng($first = 1, $second = 1)
	{
		return parent::request($this->auth, $this->id, '(/rng/'.$first.'/'.$second);
	}
/**
 * 
 * seek - Jumps to a timemark within the current song.
 * 
 * @param  string  $position - Position.
 * 
 * @return array
 * 
 */
    public function seek($position)
	{
		return parent::request($this->auth, $this->id, '(/seek/'.$position);
	}

/**
 * 
 * seek - Tells you the name of the current song.
 * 
 * @return array
 * 
 */
    public function song()
	{
		return parent::request($this->auth, $this->id, '(/song/');
	}
/**
 * 
 * pause - Stops the current song.
 * 
 * @return array
 * 
 */
    public function stop()
	{
		return parent::request($this->auth, $this->id, '(/stop');
	}
/**
 * 
 * take - Take a substring from a string..
 * 
 * @return array
 * 
 */
    public function take()
	{
		return parent::request($this->auth, $this->id, '(/take');
	}
/**
 * 
 * version - Gets the current build version.
 * 
 * @return array
 * 
 */
    public function version()
	{
		return parent::request($this->auth, $this->id, '(/version');
	}
/**
 * 
 * add - Adds a new song to the queue.
 * 
 * @param   string  $string - Youtube or Patch to music
 * 
 * @return  array
 * 
 */
    public function add(string $add)
	{
		return parent::request($this->auth, $this->id, '(/add/'.urlencode($add));
	}

}
