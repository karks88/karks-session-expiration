<h1>KARKS SESSION EXPIRATION</h1>

<strong>by Eric Karkovack</strong>

https://www.karks.com

A custom plugin that reduces the life of WordPress user sessions for administrators. It trades a tiny bit of convenience for increased security.

By default, WordPress user sessions expire after 48 hours. This plugin reduces that to 2 (two) hours for users with the Administrator role.

Note: Use this plugin at your own risk. It's meant to be a starting point for something more robust down the road.


<strong>WHY CHANGE THE SESSION LIFE?</strong>

Stolen user session cookies are a common vector of attack for malicious actors. A cookie could allow someone to access your website without login credentials. From there, they can cause all sorts of damage.

This plugin reduces the life of Administrator user sessions to 2 (two) hours. Thus, reducing the opportunity for a hacker to access the back end of your site.


<strong>HOW CAN I CHANGE THE DEFAULT SESSION TIME TO SOMETHING ELSE?</strong>

Change the default number '2' to any amount you wish:

		$expiration = 2 * HOUR_IN_SECONDS;
